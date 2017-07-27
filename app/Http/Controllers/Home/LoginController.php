<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use DB;
use Gregwar\Captcha\CaptchaBuilder;
use Hash;
use Illuminate\Http\Request;


class loginController extends Controller
{
    /**
     * @return function name index
     * @登录页面
     */
    public function index()
    {
        return view('Home.login');
    }

    /**
     * @return function name check
     * 检查登录
     */
    public function check(Request $request)
    {
      // dd($request->all());
        date_default_timezone_set('Asia/Shanghai');
        $admin = DB::table('users')->where('username', $request->input('username'))->first();
        if (empty($admin)) {
            return back()->with('error', '用户名不存在');
        }
        if (Hash::check($request->input('password'), $admin->password)) {
            $v     = $request->input('vcode');
            $vcode = $request->session()->get('Vcode');
            // dd($vcode);
            if ($v == $vcode) {
                session(['user_id' => $admin->id]);
                return redirect('/')->with('success', '欢迎' . $admin->nick . '登录');
            } else {
                return back()->with('error', '验证码不正确');
            }
        } else {
            return back()->with('error', '用户名或者密码不正确');
        }

    }

    //验证码
    public function vcode()
    {
        ob_clean();//清除输出缓存区的内容
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        session(['Vcode' => $phrase]);

        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();

        //看到图片输出 需要die
        //die;

    }
}
