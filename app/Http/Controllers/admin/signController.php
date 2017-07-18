<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class signController extends Controller
{
    /**
     * @return function name index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * c
     */
    public function index()
    {
        return view('Admin.sign');
    }

    /**
     * @return function name sign
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * x
     */
    public function sign()
    {
        return view('Admin.signup');
    }

    public function add_sign(Request $request)
    {
        $admin = DB::table('admin')->where('id', $request->input('id'))->first();
        $ip = DB::table('sign_up')->where('ip',$request->input('ip'))->get();
        $sign  = DB::table('sign')->where('id', $request->input('id'))->install([
            'aid'      => $request->input('id'),
            'signcard' => 1,
            'nick'     => $admin->nick,
            'ip' => $request->getClientIp(),
        ]);
    }
}
