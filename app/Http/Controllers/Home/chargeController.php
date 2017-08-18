<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Mail\template_mail;
use \PhpSms;

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
          $e=DB::table('users')->where('id',session('user_id'))->first();
          $message=array();
          $message['title']="提现申请";
          $message['user']=$e->nick;
          $message['content'] = '您于'.date('Y-m-d H:i:s').'申请提现金额为'.$request->input('pay').'元，我们已经成功收到您的申请，我们的工作人员将在1~2个工作日将款项打到您的账户中，请核对
          您的账号信息并注意查收!';
          // dd($e);
          Mail::to($e->email) ->send(new template_mail($message));
          PhpSms::make()->to($e->phone)->template([ 'Ucpaas' => '120935' ])->data([ 'nick' => $e->nick , 'date' => date('Y-m-d H:i:s') , 'code' => $request->input('pay')])->send();
          return back()->with('success','申请提现成功');

        }else
        {
          return back()->with('error','申请提现失败');
        }
    }
}
