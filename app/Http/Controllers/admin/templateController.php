<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\templateRequest;
use DB;

class templateController extends Controller
{
  public function index(){
    $template = DB::table('template')->where('aid','admin')->paginate(10);
    return view('admin/template',['template'=>$template]);
  }

  public function insert(templateRequest $request)
  {
    $template = DB::table('template')->insert([
      'aid'=>'admin',
      'title'=>$request->input('title'),
      'price'=>$request->input('price'),
    ]);
    if($template){
      return back()->with('success','添加成功');
    }else{
      return back()->with('error','添加失败');
    }
  }

  public function edit(Request $request)
  {
    $template = DB::table('template')->where('id',$request->input('id'))->first();
    $data = json_encode($template);
    return $data;
  }

  public function update(templateRequest $request)
  {
    $template = DB::table('template')->where('id',$request->input('id'))->update([
      'price'=>$request->input('price'),
    ]);
    if($template){
      return back()->with('success','修改成功');
    }else{
      return back()->with('error','修改失败');
    }

  }

  public function delete(Request $request)
  {
    // dd($request->all());
    $template = DB::table('template')->where('id',$request->input('id'))->delete();
    if($template){
      return '{"success":"true"}';
    }else{
      return 'false';
    }
  }

  public function show(Request $request){
    $template = DB::table('template')->get();
    if($template){
      $json_template = json_encode($template);
      return $json_template;
    }else{
      return 'false';
    }
  }
}
