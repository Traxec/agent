<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\person_updateRequest;
use App\Http\Controllers\home\exit_signController;
use DB;
use Hash;

class personController extends Controller
{
    public function index()
    {
      $person = DB::table('users')->where('id',session('user_id'))->first();
    	return view('Home.person',['person'=>$person]);
    }

    public function update(person_updateRequest $request)
    {
      //dd($request->all());
      $admin = DB:: table('users')->where('id',$request->input('id'))->update(
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
        return back()->with('success','修改成功');
      }else
      {
        return back()->with('error','修改失败');
      }
    }

      public function password()
      {

        $sel = DB::table('users')->where('id', session('user_id'))->first();
        return view('Home.password',['sel'=>$sel]);
      }
      public function pwdupdate(request $request){
        // dd($request->all());
        $sel = DB::table('users')->where('id', session('user_id'))->first();
        if (Hash::check($request->input('old_password'),$sel->password))
        {
            if ($request->input('new_password') == $request->input('re_password'))
            {
                $admin  = DB::table('users')
                    ->where('id', session('user_id'))
                    ->update([
                        'password' => Hash::make($request->input('new_password')),
                    ]);
                if($admin){
                  $reload = new exit_signController();
                  $reload->exit();
                  return back()->with('success','修改成功');
                }else{
                  return back()->with('error','修改失败');
                }
                return back();
            } else
            {
                return back()->with('error', '两次密码不一致，请重新填写');
            }
        }else
        {
            return back()->with('error', '旧密码错误');
        }
    }
}
