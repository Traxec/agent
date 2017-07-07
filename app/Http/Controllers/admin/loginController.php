<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    /**
     * @return function name index
     * @cteate by Cui．
     */
    public function index(){
        return view('Admin.login');
    }
}
