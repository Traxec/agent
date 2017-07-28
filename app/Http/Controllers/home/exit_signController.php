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
}
