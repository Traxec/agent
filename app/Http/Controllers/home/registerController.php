<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\registerRequest;
use Hash;
use DB;
// use Illuminate\Contracts\Encryption\DecryptException;

class registerController extends Controller
{
  public function index(Request $request){
    $str = $request->server('QUERY_STRING');
    try {
      $decrypted = decrypt($str);
    } catch (DecryptException $e) {
    }
    $json_str = str_replace("'",'"',$decrypted);
    $json_obj = json_decode($json_str);
    return view('home.register',['data'=>$json_obj]);
  }

  public function add(registerRequest $request){
    date_default_timezone_set('Asia/Shanghai');
    $data = $request->all();
    foreach ($data as $key => $value) {
      if (preg_match("/[\x7f-\xff]/", $value)) {
        return back()->with('error','不能含有中文');
      }
    }
    if($data['password']!=$data['repassword']){
      return back()->with('error','两次密码不一致');
    }
    $users = DB::table('users')->insert([
      'username'=>$data['username'],
      'phone'=>$data['phone'],
      'email'=>$data['email'],
      'password'=>Hash::make($data['password']),
      'catid'=>$data['catid'],
      'pid'=>$data['pid'],
      'path'=>$data['path'],
      'audit'=>'0',
      'date'=>date('Y-m-d H:i:s'),
    ]);
    if($users){
      return redirect('/login')->with('success','恭喜'.$data['username'].',您已注册成功,请登录');
    }else{
      return back()->with('error','注册失败');
    }
  }
}
