<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class user_auditController extends Controller
{
    public function index(){
        return view('admin.user_audit');
    }
}
