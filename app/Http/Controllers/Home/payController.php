<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class payController extends Controller
{
    public function index()
    {
    	return view('Home.pay');
    }

    public function add()
    {
      return view('Home.pay_add');
    }

    public function insert(Request $request)
    {
      date_default_timezone_set('Asia/Shanghai');
      $money = $request->input('pay');
      DB::beginTransaction(); //开启事务
      $sel = DB::table('pay')->where('aid',session('user_id'))->first();
      if($sel){
        $a = DB::table('pay')->where('aid',session('user_id'))->update([
          'pay'=>$sel->pay+$money,
        ]);
      }else{
        $a = DB::table('pay')->insert([
          'aid'=>session('user_id'),
          'pay'=>$money,
        ]);
      }
      $b = DB::table('capital')->insert([
        'aid'=>session('user_id'),
        'money'=>$money,
        'used'=>'充值',
        'date'=>date('Y-m-d H:i:s'),
      ]);
      if($a && $b){
        DB::commit();
        return back()->with('success','充值成功');
      }else{
        DB::rollback();
        return back()->with('error','充值失败');
      }

    }
}
