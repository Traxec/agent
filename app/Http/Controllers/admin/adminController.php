<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Hash;
use App\Http\Requests\admin_addRequest;

class adminController extends Controller
{
    /**
     * @return function name index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 管理员列表
     */
    public function index()
    {
        $judge = $this -> judge_keys(session('id'));
        if($judge['admin']==1){
            $admin = DB::table('admin')->where('pid', '1')->paginate(15);
            return view('Admin.admin', ['admin' => $admin]);
        }else{
            return redirect('/admin/index')->with('error','非法操作');
        }
    }

    /**
     * @return function name add
     * 添加管理员
     */
    public function add(Request $request)
    {
        $data = $request->input();
        foreach($data as $key => $value){
            if(!$value){
                unset($data[$key]);
            }
        }
        $this->validate($request, [
            'username' => 'required|unique:admin|max:255|alpha',
            'nick'     => 'required',
            'phone'    => 'alpha_num|between:1,12',
        ]);



        $admin = DB::table('admin')->insert(
            [
                'pid'      => '1',
                'username' => $request->input('username'),
                'nick'     => $request->input('nick'),
                'phone'    => $request->input('phone'),
                'email'    => $request->input('email'),
                'password' => hash::make('123456'),
                'key'      => '0,0,0',
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
    public function update(admin_addRequest $request)
    {
        $unique_phone = DB::table('admin')->where([
            ['phone', $request->input('phone')],
            ['username', '<>', $request->input('username')],
        ])->first();
        //dd($unique_phone);
        $unique_email = DB::table('admin')->where([
            ['email', $request->input('email')],
            ['username', '<>', $request->input('username')],
        ])->first();

            $admin = DB::table('admin')->where('id', $request->input('id'))->update(
                [
                    'nick'  => $request->input('nick'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                ]
            );
        if ($admin) {
            return back()->with('success', '修改成功');
        } else {
            return back()->with('error', '修改失败');
        }
    }

    /**
     * @return function name delete
     * 管理员删除
     */
    public function delete(Request $request)
    {
        $admin = DB::table('admin')->where('id', $request->input('id'))->delete();
        if ($admin) {
            return '{"success":"true"}';
        } else {
            return 'error';
        }
    }

    /**
     * @return function name judge_admin
     * 判断用户名
     */
    public function judge_admin($id)
    {
        $admin = DB::table('admin')->where('id', $id)->first();
        return $admin;
    }

    /**
     * @return function name judge_admin
     * 判断权限
     */
    public function judge_keys($id)
    {
        $admin         = DB::table('admin')->where('id', $id)->first();
        $data['id']    = $admin->id;
        $key           = explode(',', $admin->key);
        $data['admin'] = $key['0'];
        $data['card']  = $key['1'];
        $data['user'] = $key['2'];
        return $data;
    }

    /**
     * @return function name judge_update
     * 权限修改展示
     */
    public function judge_show(Request $request)
    {
        $admin         = DB::table('admin')->where('id', $request->id)->first();
        $data['id']    = $admin->id;
        $key           = explode(',', $admin->key);
        $data['admin'] = $key['0'];
        $data['card']  = $key['1'];
        $data['user'] = $key['2'];
        $json_data     = json_encode($data);
        return $json_data;
    }

    public function judge_update(Request $request)
    {
        $arr['admin'] = $request->input('admin')??0;
        $arr['card']  = $request->input('card')??0;
        $arr['user'] = $request->input('user')??0;
        $key          = implode(',', $arr);
        $admin        = DB::table('admin')->where('id', $request->id)->update([
            'key' => $key,
        ]);
        if ($admin) {
            return back()->with('success', '修改成功');
        } else {
            return back()->with('error', '修改失败');
        }
    }

    /**
     * @return function name exit_admin
     * @return \Illuminate\Http\RedirectResponse
     * 管理员退出
     */
    public function exit_admin()
    {
        session()->forget('id');
        return back();
    }
}
