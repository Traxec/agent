<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class exit_signController extends Controller
{
  static function exit(){
    session()->forget('user_id');
    return back();
  }

  public function info()
  {
    $info = DB::table('users')->where('id',session('user_id'))->first();
    return $info;
  }

  public function sign()
  {
    $sign = DB::table('users')->where('id',session('user_id'))->first();
    $key= explode(',',$sign->keys);
    $data['agent'] = $key[0];
    $data['template'] = $key[1];
    $data['package_add'] = $key[2];
    $data['package_update'] = $key[3];
    $data['system_add'] = $key[4];
    $data['system_update'] = $key[5];
    return $data;
  }
}
