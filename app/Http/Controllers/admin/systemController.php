<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\system_addRequest;

class systemController extends Controller
{
    public function index()
    {
        $system = DB::table('system')->paginate(10);
        $s = DB::table('price_set')->where('id',session('id'))->first();
        //dd($s);
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
}
