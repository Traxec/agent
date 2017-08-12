<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\payRequest;
use DB;

class pay_apiController extends Controller
{
  public function index(){
    $config = DB::table('config')->where('id',1)->first();
    if($config){
      return view('admin/pay_api',['config'=>$config]);
    }else{
      return view('admin/pay_api');
    }
  }
  public function update(Request $request)
  {
    $sel= DB::table('config')->where('id',1)->first();
    if(!$sel){
      $res=DB::table('config')->insert([
        'id'=>1,
        'payweb'=>$request->input('payweb'),
      ]);
      if($res){
        return back()->with('success','修改成功');
      }else{
        return back()->with('error','修改失败');
      }
    }else{
      $res = DB::table('config')->where('id',1)->update(['payweb'=>$request->input('payweb')]);
      if($res){
        return back()->with('success','修改成功');
      }else{
        return back()->with('error','修改失败');
      }
    }

  }

}
