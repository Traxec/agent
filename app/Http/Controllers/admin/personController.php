<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class personController extends Controller
{
    /**
     * @return function name index
     * 个人资料主页
     */
    public function index(){
        return view('admin.person');
    }

    /**
     * @return function name person
     * 修改个人资料
     */
    public function update(Request $request){
       dd($request->all());
    }
}
