<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
	
	/**
	 * @return function name index
	 *
	 * 用户列表
	 */
     public function index()
     {
     	return view('Admin.user');
    // 	$admin = DB::table('user')->where('pid','1')-get();
    // 	return view('Admin.user',['admin'=> $admin]);
    // }
    // /**
    //  * @return  function name add
    //  * 添加角色
    //  */
    // public function add(Requset $request)
    // {
    // 	$admin = DB::table('user')->insert(
    // 		[
    			






    // 		])
    }
    
}
