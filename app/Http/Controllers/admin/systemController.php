<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Mail;
use App\Mail\modify_mail;
use DB;
use \PhpSms;
use App\Http\Controllers\Controller;
use App\Http\Requests\system_addRequest;

class systemController extends Controller
{
    public function index()
    {
        $system = DB::table('system')
                    ->join('spend','system.id','spend.sid')
                    ->join('users', 'system.aid', 'users.id')
        ->paginate(10);
        $s = DB::table('price_set')->where('id',session('id'))->first();
        foreach ($system as $key => $value) {
        $last_day = ceil($this->diffBetweenTwoDays($value->enddate,date('Y-m-d H:i:s')));
          $value -> last_day = $last_day;
        }
        // dd($system);
        return view('Admin.system', ['system'=>$system],['s'=>$s]);
    }


    public function edit(Request $request)
    {
        $edit = DB::table('system')->where('id', $request->input('id'))->first();
        $json = json_encode($edit);
        return $json;
    }

    public function update(Request $request)
    {
        $update = DB::table('system')->where('id', $request->input('id'))->first();
        if ($update->state == 0) {
            $update = DB::table('system')->where('id', $request->input('id'))->update(['state'=>1]);
            return back()->with('success', '处理成功');
        } elseif ($update->state == 1) {
            return back()->with('error', '不能重复处理该信息');
        }
    }

    public function update_system(Request $request)
    {
      if($request->input('price')==''){
        return back()->with('error','请输入有效金额');
      }
      $res = DB::table('price_set')->where('id',1)->first();
      if($res){
        $result = DB::table('price_set')->where('id',1)->update([
          's_update'=>$request->input('price'),
        ]);
        if($result){
          return back()->with('success','编辑成功');
        }else{
          return back()->with('error','编辑失败');
        }
      }else{
        $result = DB::table('price_set')->insert([
          'id'=>1,
        ]);
        if($result){
          $result = DB::table('price_set')->where('id',1)->update([
            's_update'=>$request->input('price'),
          ]);
          if($result){
            return back()->with('success','编辑成功');
          }else{
            return back()->with('error','编辑失败');
          }
        }else{
          return back()->with('error','编辑失败');
        }

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

    public function send()
    {
      $sel = DB::table('system')->join('spend','system.id','=','spend.sid')->get();
      foreach ($sel as $key => $value) {
        $last_day = ceil($this->diffBetweenTwoDays($value->enddate,date('Y-m-d H:i:s')));
        $e=DB::table('system')
        ->join('spend','system.id','=','spend.sid')
        ->join('users','system.aid','=','users.id')
        ->select('users.email','users.phone','users.nick','system.title','spend.enddate')
        ->where('system.id',$value->id)->first();
        if(7>$last_day&&$last_day>=0){
          $message=array();
          $message['user']=$e->nick;
          $message['content'] = '您的系统'.$value->title.'还有'.$last_day.'天就到期了,为了不影响您的使用，请及时续费';
          Mail::to($e->email) ->send(new modify_mail($message));
          $res = PhpSms::make()->to($e->phone)->template([ 'Ucpaas' => '121681' ])->data(['nick' => $e->nick ,'title' => $e->title , 'last_day' => $last_day])->send();
        }elseif($last_day<0 && $last_day>-4){
          $message=array();
          $message['user']=$e->nick;
          $message['content'] = '您的系统'.$value->title.'已到期，超过三天我们将删除您的系统，为了不影响您的使用，请及时续费';
          Mail::to($e->email) ->send(new modify_mail($message));
          $res = PhpSms::make()->to($e->phone)->template([ 'Ucpaas' => '121847' ])->data(['nick' => $e->nick ,'title' => $e->title ])->send();
        }
      }
      return back()->with('success','发送成功');
    }

    /**
    * 求两个日期之间相差的天数
    * (针对1970年1月1日之后，求之前可以采用泰勒公式)
    * @param string $day1
    * @param string $day2
    * @return number
    */
    public function diffBetweenTwoDays ($day1, $day2)
    {
      $second1 = strtotime($day1);
      $second2 = strtotime($day2);

      // if ($second1 < $second2) {
      //   $tmp = $second2;
      //   $second2 = $second1;
      //   $second1 = $tmp;
      // }
      return ($second1 - $second2) / 86400;
    }
}
