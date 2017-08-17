<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\order_updateRequest;
use Mail;
use App\Mail\modify_mail;
use DB;
use \PhpSms;

class workController extends Controller
{
    public function index()
    {
      $order = DB::table('order')
                  ->join('users','order.aid','users.id')
                  ->select('order.*','users.username','users.nick')
      ->paginate(10);
    	return view('Admin.work',['order'=>$order]);
    }

    public function update(order_updateRequest $request)
    {
      date_default_timezone_set('Asia/Shanghai');
      $update = DB::table('order')->where('id',$request->input('id'))->update([
        'recontent'=>$request->input('recontent'),
        'retime'=>date('Y-m-d h:i:s')
      ]);
      if($update){
        $sel =DB::table('order')->where('id',$request->input('id'))->first();
        $e = DB::table('users')->where('id',$sel->aid)->first();
        $message=array();
        $message['user']=$e->nick;
        $message['content'] = '您的工单已回复，请注意查收';
        Mail::to($e->email) ->send(new modify_mail($message));
        $res = PhpSms::make()->to($e->phone)->template([ 'Ucpaas' => '120990' ])->data(['nick' => $e->nick])->send();
        return back()->with('success','回复成功');
      }else{
        return back()->with('error','回复失败');
      }
    }
}
