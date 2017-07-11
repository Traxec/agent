<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class personController extends Controller
{
    /**
     * @return function name index
     * 个人资料主页
     */
    public function index(){
        $admin = DB::table('admin')->where('id',session('id'))->first();
        return view('admin.person',['id'=>$admin->id,'nick'=>$admin->nick,'email'=>$admin->email,'phone'=>$admin->phone]);
    }

    /**
     * @return function name person
     * 修改个人资料
     */
    public function update(Request $request){
       $user = DB::table('admin')
           ->where('id',$request->input('id'))
           ->update(['nick'=>$request->input('nick'),'email'=>$request->input('email'),'phone'=>$request->input('phone')]);
       if($user){
           return back()->with('success','修改成功');
       }else{
           return back()->with('error','修改失败');
       }
    }


}
