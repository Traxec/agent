<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\users_updateRequest;
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

		 $user = DB::table('users')
		 ->select(DB::raw("*,concat(path,',',id) as paths"))
		 ->where('audit',1)
		 ->orderBy('paths')
		 ->paginate(15);
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

    /**
     * @return function name update
     * 用户信息修改页面展示
     */
    public function edit(Request $request)
    {
        $admin      = DB::table('users')->where('id', $request->input('id'))->first();
        $json_admin = json_encode($admin);
        echo $json_admin;
    }

    /**
     * @return  function name update
     *修改用户信息
     */
    public function update(users_updateRequest $request)
    {
    	//dd($request->all());
    	$admin = DB::table('users')->where('id',$request->input('id'))->update(
			[

				'nick'		=> $request->input('nick'),
				'phone'		=> $request->input('phone'),
				'email'		=> $request->input('email'),
				'b_bank'	=> $request->input('b_bank'),
				'b_branch'	=> $request->input('b_branch'),
				'b_account'	=> $request->input('b_account'),
				'b_master'	=> $request->input('b_master'),
			]
		);

    	if($admin)
    	{
    		return back()->with('success', '修改成功');
    	}else
    	{
    		return back()->with('error','修改失败');
    	}
    }

    /**
    * @return  function name delete
    * 用户删除
     */
    public function delete(Request $request)
    {

    	$admin = DB::table('users')->where('id',$request->input('id'))->delete();

    	if($admin)
    	{
    		return '{"success":"true"}';
    	}else
    	{
    		return 'error';
    	}
    }

}
