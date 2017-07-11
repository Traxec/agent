<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class adminController extends Controller
{
    /**
     * @return function name index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 管理员列表
     */
    public function index()
    {
        $admin = DB::table('admin')->where('pid', '1')->get();
        return view('Admin.admin', ['admin' => $admin]);
    }

    /**
     * @return function name add
     * 添加管理员
     */
    public function add(Request $request)
    {
        $admin = DB::table('admin')->insert(
            [
                'pid'      => '1',
                'username' => $request->input('username'),
                'nick'     => $request->input('nick'),
                'phone'    => $request->input('phone'),
                'email'    => $request->input('email'),
                'password' => '123456',
                'key'      => '1,1,1,1,1,1',
            ]
        );
        if ($admin) {
            return back()->with('success', '添加成功');
        } else {
            return back()->with('error', '添加失败');
        }
    }

    /**
     * @return function name update
     * 管理员信息修改页面展示
     */
    public function edit(Request $request)
    {
        $admin      = DB::table('admin')->where('id', $request->input('id'))->first();
        $json_admin = json_encode($admin);
        echo $json_admin;
    }

    /**
     * @return function name update
     * 修改管理员信息
     */
    public function update(Request $request)
    {
        $admin = DB::table('admin')->where('id', $request->input('id'))->update(
            [
                'nick'  => $request->input('nick'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
            ]
        );
        if($admin){
            return back()->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }
}
