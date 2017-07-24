<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class forgetController extends Controller
{
    /**
     * @return function name index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 忘记密码
     */
    public function index()
    {
        return view('Home.forget');
    }
}
