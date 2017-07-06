<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    /**
     * @return function name
     *后台主页
     */
    public function index(){
        return view('Admin.index');
    }
}
