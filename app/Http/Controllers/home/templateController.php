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
        $res = DB::table('template')->where('aid', 'admin')->get();
        $my_res = DB::table('template')->where('aid', session('user_id'))->get();
        return view('home.template', ['res'=>$res,'my_res'=>$my_res]);
    }

    public function show(Request $request)
    {
      $sel_user = DB::table('users')->where('id',session('user_id'))->first();
      $admin_template = DB::table('template')->where('aid','admin')->get();
      foreach ($admin_template as $key => $value) {
        $arr_admin_template[$key] = $value->title;
      }
      // dd($arr_admin_template);
      $arr_path = explode(',',$sel_user->path);
      $arr_path['admin']='admin';
      $arr_path = array_reverse($arr_path);
      foreach ($arr_path as $key => $value) {
        $sel_template[$value] = DB::table('template')->where('aid',$value)->get();
      }
      // dd($sel_template);
      foreach ($sel_template as $key => $value) {
        foreach ($value as $k => $v) {
          if($v){
            $a=0;
            foreach ($arr_admin_template as $kk => $vv) {
                $a++;
              if($vv == $v->title){
                $data[$a] = ['title'=>$v->title,'price'=>$v->price];
              }
            }
          }
        }
      }
      $data = json_encode($data);
      // dd($data);
      if($data){
        return $data;
      }else{
        return 'false';
      }

      // $template = DB::table('template')->get();
      // if ($template) {
      //   $json_template = json_encode($template);
      //   return $json_template;
      // } else {
      //   return 'false';
      // }
    }

    public function reshow(Request $request)
    {
        $template = DB::table('template')->where('title', $request->input('template'))->first();
        if ($template) {
            $json_template = json_encode($template);
            return $json_template;
        } else {
            return 'false';
        }
    }

    public function agent_template(Request $request)
    {
        // dd($request->all());
      $sel = DB::table('template')->where([
        ['title',$request->input('title')],
        ['aid',session('user_id')],
        ])->first();
        if ($sel) {
          $res = DB::table('template')->where('id',$sel->id)->update([
            'price'=>$request->input('price'),
          ]);
            if ($res) {
              return back()->with('success', '设置成功');
            } else {
              return back()->with('error', '设置失败');
            }
          } else {
            $res = DB::table('template')->insert([
              'aid'=>session('user_id'),
              'title'=>$request->input('title'),
              'price'=>$request->input('price'),
            ]);
            if ($res) {
              return back()->with('success', '设置成功');
            } else {
              return back()->with('error', '设置失败');
            }
          }

    }

    public function agent_template_show(Request $request)
    {
      // dd($request->all());
      $sel = DB::table('template')->where([
        ['title',$request->input('title')],
        ['aid',session('user_id')],
        ])->first();
        if($sel){
          $json_sel = json_encode($sel);
          return $json_sel;
        }else{
          return 'false';
        }
    }
}
