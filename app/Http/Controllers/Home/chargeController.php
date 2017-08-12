<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class chargeController extends Controller
{
    //提现审核
    public function char()
    {
      $pay = DB::table('pay')->where('aid',session('user_id'))->first();
      $c= DB::table('users')->where('id',session('user_id'))->first();
      //dd($c);
      return view('Home.char',['pay'=>$pay],['c'=>$c]);
    }
    public function add(Request $request)
    {
        date_default_timezone_set('Asia/Shanghai');
        //dd($request->all());
        $c= DB::table('users')->where('id',session('user_id'))->first();
        $char = DB::table('char')->where('id',$request->input('id'))->insert(
          [
            'aid'=>session('user_id'),
            'nick'=>$request->input('nick'),
            'price'=>$request->input('pay'),
            'time'=>date('Y-m-d H:i:s'),
            'audit'=>0,
          ]
        );
        //dd($char);
        if($char)
        {
          return back()->with('success','申请提现成功');
        }else
        {
          return back()->with('error','申请提现失败');
        }
    }
}
