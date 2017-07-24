<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\usersRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class userController extends Controller
{

	/**
	 * @return function name index
	 *
	 * 用户列表
	 */
	 public function index(Request $request)
	 {
		 //分页查询
		 $num = $request->input('num',10);

		 if($request->input('keywords')){
			 $user = DB::table('users')
			 ->select(DB::raw("*,concat(path,',',id) as paths"))
			 ->where('name','like','%'.$request->input('keywords').'%')
			 ->orderBy('paths')
			 ->paginate($num);
		 }else{
			 $user = DB::table('users')
			 ->select(DB::raw("*,concat(path,',',id) as paths"))
			 ->orderBy('paths')
			 ->paginate($num);
		 }
		 foreach($user as $k=>$v){
			 $arr = explode(',',$v->path);
			 $num = count($arr);
			 $user[$k]->path = str_repeat('|---',$num);
		 }
		 return view('Admin.user',['user'=> $user]);
	 }

    /**
     * @return  function name add
     * 添加角色
     */
    public function add(usersRequest $request)
    {
			$type = $request->input('type')=='普通用户'?1:2;
			$data = DB::table('users')->where('id',session('id'))->first();
    	$admin = DB::table('users')->insert([
				'username'=>$request->input('username'),
				'password'=>Hash::make('123456'),
				'nick'=>$request->input('nick'),
				'pid'=>session('id'),
				'path'=>$data->path.','.session('id'),
				'audit'=>'1',
				'catid'=>$type,
			]);
			if($admin){
				return back()->with('success','添加成功');
			}else{
				return back()->with('error','未知错误');
			}
    }

}
