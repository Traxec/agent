<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class signController extends Controller
{
    /**
     * @return function name index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * c
     */
    public function index()
    {
        $data = DB::table('sign')->where([
            ['datetime','like',date('Y-m-d').'%'],
        ])->get();
        return view('Admin.sign',['data'=>$data]);
    }

    /**
     * @return function name sign
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * x
     */
    public function sign()
    {
        return view('Admin.signup');
    }

    /**
     * @return function name ip
     * ip黑名单
     */
    public function ban_ip()
    {
        $ban_ip = DB::table('ban_ip')->get();
        return view('Admin.ban_ip',['ip'=>$ban_ip]);
    }

    /**
     * @return function name ip
     * 添加ip黑名单
     */
    public function add_ban_ip(Request $request)
    {
        $this->validate($request,[
            'ip'=>'required|unique:ban_ip|ip',
        ]);

        $ban_ip = DB::table('ban_ip')->insert([
           'ip' => $request->input('ip'),
        ]);
        if($ban_ip){
           return back()->with('success','添加成功');
        }else{
           return back()->with('error','添加失败');
        }
    }

    /**
     * @return function name add_sign
     * 签到
     */
    public function add_sign(Request $request)
    {
        date_default_timezone_set('Asia/Shanghai');//'Asia/Shanghai'   亚洲/上海
        $check_ip = DB::table('ban_ip')->where('ip',$request->getClientIp())->first();
        if($check_ip){
            return '{"success":"false"}';
        }

        $admin = DB::table('admin')->where('id', $request->input('id'))->first();
        $sign  = DB::table('sign')->where('id', $request->input('id'))->insert([
            'aid'      => $request->input('id'),
            'sign_card' => 1,
            'nick'     => $admin->nick,
            'ip' => $request->getClientIp(),
            'datetime' => date('Y-m-d H:i:s'),
        ]);
        if($sign){
            return '{"success":"true"}';
        }else{
            return 'error';
        }
    }

    /**
     * @return function name del_ban_ip
     * 删除ip
     */
    public function del_ban_ip(Request $request)
    {
        $sign = DB::table('ban_ip')->where('id',$request->input('id'))->delete();
        if($sign){
            return '{"success":"true"}';
        }else{
            return 'error';
        }
    }

    /**
     * @return function name sign_data
     * @return string
     * 判断本月签到天数
     */
    public function sign_data(Request $request)
    {
        date_default_timezone_set('Asia/Shanghai');//'Asia/Shanghai'   亚洲/上海
        $data = DB::table('sign')->where([
            ['aid',$request->input('id')],
            ['datetime','like',date('Y-m').'%'],
        ])->get();
        $str = '';
        foreach($data as $key => $value){
            foreach($value as $k => $v){
                if($k == 'datetime'){
                    $str .= substr($v, 8, 2) - 1 . ',';
                }
            }
        }
        $str = rtrim($str,',');
        return $str;
    }

    /**
     * @return function name signed
     * 是否签到
     */
    public function signed(Request $request)
    {
        date_default_timezone_set('Asia/Shanghai');//'Asia/Shanghai'   亚洲/上海
        $data = DB::table('sign')->where([
            ['aid',$request->input('id')],
            ['datetime','like',date('Y-m-d').'%'],
        ])->first();
        if($data){
            return '{"success":"true"}';
        }else{
            return '{"success":"false"}';
        }
    }
}
