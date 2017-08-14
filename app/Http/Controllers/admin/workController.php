<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\order_updateRequest;
use DB;

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
      $judge = DB::table('order')->where('id',$request->input('id'))->first();
      if($judge->recontent){
        return back()->with('error','不能重复回复');
      }

      $update = DB::table('order')->where('id',$request->input('id'))->update([
        'recontent'=>$request->input('recontent'),
        'retime'=>date('Y-m-d h:i:s')
      ]);
      if($update){
        return back()->with('success','回复成功');
      }else{
        return back()->with('error','回复失败');
      }
    }
}
