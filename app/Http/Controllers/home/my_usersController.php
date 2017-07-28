<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class my_usersController extends Controller
{
  public function index(){
    $my_users = $this->select();
    return view('home.my_users',['my_users'=>$my_users]);
  }

  public function select()
  {
    $user = DB::table('users')->where('id',session('user_id'))->first();
    $sel_path = $user->path.','.session('user_id');
    $select = DB::table('users')->select(DB::raw("*,concat(path,',',id) as paths"))->where([['path','like',$sel_path.'%'],['audit','1']])->orderBy('paths')->paginate(15);
    foreach($select as $k=>$v){
      $arr = explode(',',$v->path);
      $them_path_num = count($arr);
      $my_path_num = count(explode(',',$user->path));
      $num = $them_path_num-$my_path_num;
      $select[$k]->path = str_repeat('|--',$num);
    }
    return $select;
  }

}
