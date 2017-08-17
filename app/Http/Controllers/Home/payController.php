<?php

namespace App\Http\Controllers\home;

use App\Mail\pay_mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\payRequest;
use Toplan\PhpSms\Sms;
use \PhpSms;
use DB;
use Mail;

class payController extends Controller
{
    public function index()
    {
    	return view('Home.pay');
    }

    public function add()
    {
      $api = DB::table('config')->where('id',1)->first();
      if($api->payweb){
        return view('Home.pay_add',['api'=>$api]);
      }else{
        return view('Home.pay_add');
      }
    }

    public function insert(Request $request)
    {
      // dd($request->all());
      date_default_timezone_set('Asia/Shanghai');
      $money = $request->input('order_amount');
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
        //邮件短信提醒
        $e=DB::table('users')->where('id',session('user_id'))->first();
        $message=array();
        $message['user']=$e->nick;
        $message['content'] = '您于'.date('Y-m-d H:i:s').'充值的'.$money.'已成功。';
        //邮件提醒
        Mail::to($e->email) ->send(new pay_mail($message));
        //短信提醒
        PhpSms::make()->to($e->phone)->template([ 'Ucpaas' => '120900' ])->data([ 'code' => $money])->send();
        return Redirect('home/pay/add')->withInput()->with('success','充值成功');
      }else{
        DB::rollback();
        return Redirect('home/pay/add')->withInput()->with('error','充值失败');
      }

    }
}
