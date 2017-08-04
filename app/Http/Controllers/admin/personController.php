<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\adminController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\adminperson_updateRequest;
use DB;

class personController extends Controller
{
    /**
     * @return function name index
     * 个人资料主页
     */
    public function index()
    {
        $admin = DB::table('admin')->where('id', session('id'))->first();
        return view('admin.person', ['id' => $admin->id, 'nick' => $admin->nick, 'email' => $admin->email, 'phone' => $admin->phone]);
    }

    /**
     * @return function name person
     * 修改个人资料
     */
    public function update(adminperson_updateRequest $request)
    {
        $user = DB::table('admin')
            ->where('id', $request->input('id'))
            ->update(['nick' => $request->input('nick'), 'email' => $request->input('email'), 'phone' => $request->input('phone')]);
        if ($user) {
            return back()->with('success', '修改成功');
        } else {
            return back()->with('error', '修改失败');
        }
    }

    /**
     * @return function name password
     * 修改密码
     */
    public function password(Request $request)
    {
        //dd($request->all());
        $sel = DB::table('admin')->where('id', session('id'))->first();
        if (Hash::check($request->input('old_password'),$sel->password))
        {
            if ($request->input('new_password') == $request->input('re_password'))
            {
                $admin  = DB::table('admin')
                    ->where('id', session('id'))
                    ->update([
                        'password' => Hash::make($request->input('new_password')),
                    ]);

                $reload = new adminController();
                $reload->exit_admin();
                return back();
            } else
            {
                return back()->with('error', '两次密码不一致，请重新填写');
            }
        } else
        {
            return back()->with('error', '旧密码错误');
        }
    }

}
