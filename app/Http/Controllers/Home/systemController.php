<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\system_addRequest;
use App\Http\Requests\resystemRequest;

class systemController extends Controller
{
    public function index()
    {
        $system = DB::table('system')->where('aid', session('user_id'))->paginate(15);
        return view('Home.system', ['system'=>$system]);
    }

    public function add()
    {
        return view('Home.system_add');
    }

    public function insert(system_addRequest $request)
    {
        date_default_timezone_set('Asia/Shanghai');
        $sel = DB::table('pay')->where('aid', session('user_id'))->first();
        if ($sel) {
            if ($sel->pay>$request->input('price')) {
                DB::beginTransaction(); //开启事务
                $a = DB::table('pay')->where('aid', session('user_id'))->decrement('pay', $request->input('price'), ['paydate'=>date('Y-m-d H:i:s')]);
                $b = DB::table('capital')->insert([
                  'aid'=>session('user_id'),
                  'money'=>-$request->input('price'),
                  'used'=>'开设系统',
                  'date'=>date('Y-m-d H:i:s'),
                ]);
                $img1=$this->upload($request, 'img1');
                $img2=$this->upload($request, 'img2');
                $img3=$this->upload($request, 'img3');

                $system = DB::table('system')->insertGetId([
                  'aid'=>session('user_id'),
                  'port'=>$request->input('port'),
                  'template'=>$request->input('template'),
                  'title'=>$request->input('title'),
                  'nav'=>$request->input('nav'),
                  'server'=>$request->input('server'),
                  'phone'=>$request->input('phone'),
                  'website'=>$request->input('website'),
                  'email'=>$request->input('email'),
                  'address'=>$request->input('address'),
                  'company'=>$request->input('company'),
                  'img1'=>$img1,
                  'img2'=>$img2,
                  'img3'=>$img3,
                  'state'=>0,
                  'time'=>date('Y-m-d H:i:s'),
                  'number'=>'0',
                ]);

                $c = DB::table('spend')->insert([
                  'sid' => $system,
                  'pay' => $request->input('price'),
                  'day'=>$request->input('time'),
                  'startdate'=>date('Y-m-d H:i:s'),
                  'enddate'=>date('Y-m-d H:i:s', strtotime('+'.$request->input('time').' day')),
                ]);


                if ($a && $b && $system && $c) {
                    DB::commit();
                    return back()->with('success', '开设成功');
                } else {
                    DB::rollback();
                    return back()->with('error', '开设失败');
                }
            } else {
                return back()->with('error', '账户余额不足，请先充值');
            }
        } else {
            return back()->with('error', '账户余额不足，请先充值');
        }
    }

    public function edit(Request $request)
    {
        $edit = DB::table('system')->where('id', $request->input('id'))->first();
        $json = json_encode($edit);
        return $json;
    }

    public function update(system_addRequest $request)
    {
        // dd($request->all());
        date_default_timezone_set('Asia/Shanghai');
        $img1=$this->upload($request, 'img1');
        $img2=$this->upload($request, 'img2');
        $img3=$this->upload($request, 'img3');
        $data = array();
        if ($img1) {
            $data['img1'] = $img1;
        }
        if ($img2) {
            $data['img2'] = $img2;
        }
        if ($img3) {
            $data['img3'] = $img3;
        }
        $data['title']=$request->input('title');
        $data['nav']=$request->input('nav');
        $data['server']=$request->input('server');
        $data['phone']=$request->input('phone');
        $data['website']=$request->input('website');
        $data['email']=$request->input('email');
        $data['address']=$request->input('address');
        $data['company']=$request->input('company');
        $data['state']=0;
        $data['time']=date('Y-m-d H:i:s');

        $sel = DB::table('price_set')->where('id',1)->first();
        $price = $sel->s_update;
        $sel = DB::table('system')->where('id', $request->input('id'))->first();
        if ($sel->number < 3) {
          $system = DB::table('system')->where('id', $request->input('id'))->increment('number', 1, $data);
          if ($system) {
            return back()->with('success', "修改成功(修改前三次免费，之后每次收取.$price.元)");
          } else {
            return back()->with('error', '提交失败');
          }
        } else {
          $pay= DB::table('pay')->where('aid', session('user_id'))->first();
          if ($pay && $pay->pay>$price) {
            DB::beginTransaction(); //开启事务
            $a = DB::table('pay')->where('aid', session('user_id'))->decrement('pay', $price, ['paydate'=>date('Y-m-d H:i:s')]);
            $b = DB::table('capital')->insert([
              'aid'=>session('user_id'),
              'money'=>-$price,
              'used'=>'修改系统',
              'date'=>date('Y-m-d H:i:s'),
            ]);
            $system = DB::table('system')->where('id', $request->input('id'))->increment('number', 1, $data);

            if ($a && $b && $system) {
              DB::commit();
              return back()->with('success', "修改成功,收取您.$price.元");
            } else {
              DB::rollback();
              return back()->with('error', '修改失败');
            }

          } else {
            return back()->with('error', '您的余额不足，请先充值');
          }
        }

    }

    public function renew(resystemRequest $request)
    {
      // dd($request->all());
      date_default_timezone_set('Asia/Shanghai');
      $sel = DB::table('pay')->where('aid', session('user_id'))->first();
      if ($sel) {
        if ($sel->pay>$request->input('price')) {
          DB::beginTransaction(); //开启事务
          $a = DB::table('pay')->where('aid', session('user_id'))->decrement('pay', $request->input('price'), ['paydate'=>date('Y-m-d H:i:s')]);
          $b = DB::table('capital')->insert([
            'aid'=>session('user_id'),
            'money'=>-$request->input('price'),
            'used'=>'系统续费',
            'date'=>date('Y-m-d H:i:s'),
          ]);

          $sel_c = DB::table('spend')->where('sid',$request->input('id'))->first();
          // dd($sel_c);
          $retime = $request->input('time')*30;
          $c = DB::table('spend')->where('sid',$request->input('id'))->increment('day',$request->input('time'),[
            'pay' => $sel_c->pay+$request->input('price'),
            'day'=>$sel_c->day+$request->input('time')*30,
            'enddate'=>date('Y-m-d H:i:s', strtotime('+'.$retime.' day', strtotime($sel_c->enddate))),
          ]);


          if ($a && $b && $c) {
            DB::commit();
            return back()->with('success', '续费成功');
          } else {
            DB::rollback();
            return back()->with('error', '续费失败');
          }
        } else {
          return back()->with('error', '账户余额不足，请先充值');
        }
      } else {
        return back()->with('error', '账户余额不足，请先充值');
      }

    }

    //上传图片
    public function Upload($request, $name)
    {
        // dd($request->all());
        date_default_timezone_set('Asia/Shanghai');
        //检测是否有文件上传
        if ($request->hasFile($name)) {
            //随机文件名
            $n = md5(rand(1, 99999).time());
            $suffix = $request->file($name)->getClientOriginalExtension();
            $path = './uploads/'.date('Y-m-d').'/';
            $fileName = $n.'.'.$suffix;
            $arr = array('jpg','png','jpeg');
            if (!in_array($suffix, $arr)) {
                return back()->with('error', '文件类型不符合');
            }

            $img = $this->isimage($request, $name);
            // dd($path);
            if (!file_exists($path)) {
                mkdir($path);
            }
            $a = imagejpeg($img, $path.$fileName);
            //1,移动的目标目录  2,文件名字
            // $request->file($name)->move('./uploads/'.date('Y-m-d'), $fileName);
            return $path.$fileName;
        }
        //echo '上传成功';
    }

    //gd库重绘
    public function isimage($request, $imgpath)
    {
        $mime_type = getimagesize($request->file($imgpath));
        if ($mime_type['mime']=="image/gif") {
            $img = imagecreatefromgif($_FILES[$imgpath]['tmp_name']);
        } elseif ($mime_type['mime']=="image/png"||$mime_type['mime']=="image/x-png") {
            $img = imagecreatefrompng($_FILES[$imgpath]['tmp_name']);
        } else {
            $img = imagecreatefromjpeg($_FILES[$imgpath]['tmp_name']);
        }
        if ($img == false) {
            return false;
        } else {
            return $img;
        }
    }
}
