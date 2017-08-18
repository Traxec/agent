<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\order_addRequest;

class workController extends Controller
{
    public function order()
    {
    	return view('Home.order');
    }
    public function record()
    {
      $order = DB::table('order')->where('aid',session('user_id'))->get();
    	return view('Home.record',['order'=>$order]);
    }
    public function insert(order_addRequest $request)
    {
      // dd($request->all());
      date_default_timezone_set('Asia/Shanghai');
      $img=$this->upload($request, 'img1');

      $system = DB::table('order')->insert([
        'aid'=>session('user_id'),
        'port'=>$request->input('port'),
        'system'=>$request->input('system'),
        'type'=>$request->input('type'),
        'content'=>$request->input('content'),
        'img'=>$img,
        'mark'=>0,
        'time'=>date('Y-m-d H:i:s'),
      ]);

      if ($system) {
        return back()->with('success', '提交成功');
      } else {
        return back()->with('error', '提交失败');
      }
    }
    //上传图片
    public function Upload($request, $name)
    {
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
              die('文件类型不符合,请上传jpg，png，jpeg格式图片');
            }

            $img = $this->isimage($request, $name);
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
