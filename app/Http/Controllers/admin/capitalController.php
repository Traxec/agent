<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Mail\charge_mail;

class capitalController extends Controller
{
  public function index()
  {
    $capital = DB::table('capital')
                  ->join('users', 'capital.aid', '=', 'users.id')
                  ->select('capital.*','users.username','users.nick','users.phone','users.email')
                  ->paginate(15);
    $sum =DB::table('profit')->sum('price');
    //dd($sum);
    return view('Admin.capital',['capital'=>$capital],['sum'=>$sum]);
  }
  public function charge()
  {
    $c =DB::table('char')
          ->join('users', 'char.aid', '=', 'users.id')
          ->select('char.*','users.username','users.nick','users.phone','users.email')
    ->get();
    return view('Admin.charge',['c'=>$c]);
  }
  //审核
  public function update(Request $request)
  {
      date_default_timezone_set('Asia/Shanghai');
      $update = DB::table('char')->where('id', $request->input('id'))->first();
      if ($update->audit == 0) {


          DB::beginTransaction(); //开启事务
          $update = DB::table('char')->where('id', $request->input('id'))->update(['audit'=>1]);
          //dd($update);
          $sel=DB::table('char')->where('id',$request->input('id'))->first();
          $a =DB::table('pay')->where('aid',$sel->aid)->decrement('pay',$sel->price,[
              'paydate'=>date('Y-m-d H:i:s'),
          ]);
          $b =DB::table('capital')->insert([
            'aid'=>$sel->aid,
            'money'=>$sel->price,
            'used'=>'提现',
            'date'=>date('Y-m-d H:i:s'),
          ]);
          if($update&&$a&&$b)
          {
            DB::commit();
            $e=DB::table('users')->where('id',session('user_id'))->first();
            $message=array();
            $message['user']=$e->nick;
            $message['content'] = '您于'.date('Y-m-d H:i:s').'申请提现金额为'.$sel->price.'元，我们已经成功审核，款项已经打到您的账户中，请核对
            您的账号信息并注意查收!';
            Mail::to($e->email)
                ->send(new charge_mail($message));
            return back()->with('success', '审核成功');
          }else{
            DB::rollback();
            return back()->with('error', '审核失败');
          }
      }else{
        return back()->with('error', '不能重复审核该信息');
      }

}
  //删除
  public function delete(Request $request)
  {
    //dd($request->all());
    $admin = DB::table('char')->where('id',$request->input('id'))->delete();

    if($admin)
    {
      return '{"success":"true"}';
    }else
    {
      return 'error';
    }
  }
}
