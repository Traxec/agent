<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class capitalController extends Controller
{
  public function index()
  {
    $capital = DB::table('capital')
                  ->join('users', 'capital.aid', '=', 'users.id')
                  ->select('capital.*', 'users.nick','users.phone','users.email')
                  ->paginate(15);
    $sum =DB::table('profit')->sum('price');
    //dd($sum);
    return view('Admin.capital',['capital'=>$capital],['sum'=>$sum]);
  }
  public function charge()
  {
    $c =DB::table('char')->get();
    return view('Admin.charge',['c'=>$c]);
  }
  //审核
  public function update(Request $request)
  {
      $update = DB::table('char')->where('id', $request->input('id'))->first();
      //dd($update);
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
            return back()->with('success', '审核成功');
          }else{
            DB::rollback();
            return back()->with('error', '不能重复审核该信息');
          }
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
