<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\package_addRequest;
use DB;

class packageController extends Controller
{
    public function index()
    {
    	return view('Home.package');
    }

    public function add()
    {
      return view('Home.package_add');
    }

    public function insert(package_addRequest $request)
    {
      // dd($request->all());
      date_default_timezone_set('Asia/Shanghai');
      $img1=$this->upload($request,'img1');
      $img2=$this->upload($request,'img2');
      $img3=$this->upload($request,'img3');
      dd($img3);

      // $package = DB::table('package')->insert([
      //   'aid'=>session('user_id'),
      //   'title'=>$request->input('title'),
      //   'nav'=>$request->input('nav'),
      //   'server'=>$request->input('server'),
      //   'phone'=>$request->input('phone'),
      //   'website'=>$request->input('website'),
      //   'email'=>$request->input('email'),
      //   'address'=>$request->input('address'),
      //   'company'=>$request->input('company'),
      //   'img1'=>,
      //   'img2'=>,
      //   'img3'=>,
      //   'state'=>0,
      //   'time'=>date('Y-m-d H:i:s'),
      //   'number'=>'0',
      // ]);
    }

    public function Upload($request,$name)
    {
      // dd($request->all());
      date_default_timezone_set('Asia/Shanghai');
       //检测是否有文件上传
       if($request->hasFile($name)){
          //随机文件名
          $n = md5(rand(1,99999).time());
          $suffix = $request->file($name)->getClientOriginalExtension();
          $fileName = $n.'.'.$suffix;
          $arr = array('jpg','png','jpeg');
          if(!in_array($suffix,$arr)){
             return back()->with('error','文件类型不符合');
          }
          $mime_type =$this-> getFileMimeType($request,$name);
          // dd($request->file('img1'));
          dd($mime_type);
          //1,移动的目标目录  2,文件名字
          $request->file($name)->move('./uploads/'.date('Y-m-d'),$fileName);
          return $fileName;
       }
       //echo '上传成功';
    }

    function getFileMimeType($request,$file) {
      // $buffer = file_get_contents($request->file($file));
      $buffer = getimagesize($request->file($file));
      return $buffer;
    }
}
