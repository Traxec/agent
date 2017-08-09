<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\templateRequest;
use DB;

class templateController extends Controller
{

  public function index()
  {
    $res = DB::table('template')->where('aid','admin')->get();
    $my_res = DB::table('template')->where('aid',session('user_id'))->get();
      return view('home.template',['res'=>$res,'my_res'=>$my_res]);
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

  public function reshow(Request $request){
    $template = DB::table('template')->where('title',$request->input('template'))->first();
    if($template){
      $json_template = json_encode($template);
      return $json_template;
    }else{
      return 'false';
    }
  }
}
