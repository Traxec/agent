<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class roleController extends Controller
{
    public function show(Request $request)
    {
        $user = DB::table('role')->where('catid',$request->input('id'))->first();
        $key= explode(',',$user->keys);
        $data['agent'] = $key[0];
        $data['template'] = $key[1];
        $data['package_add'] = $key[2];
        $data['package_update'] = $key[3];
        $data['system_add'] = $key[4];
        $data['system_update'] = $key[5];
        return $data;
    }

    public function update(Request $request)
    {
        $arr['agent'] = $request->input('agent')??0;
        $arr['template']  = $request->input('template')??0;
        $arr['package_add'] = $request->input('package_add')??0;
        $arr['package_update'] = $request->input('package_update')??0;
        $arr['system_add'] = $request->input('system_add')??0;
        $arr['system_update'] = $request->input('system_update')??0;
        $keys          = implode(',', $arr);
        $admin        = DB::table('role')->where('id', $request->id)->update([
            'keys' => $keys,
        ]);
        if ($admin) {
            return back()->with('success', '修改成功');
        } else {
            return back()->with('error', '修改失败');
        }
    }
}
