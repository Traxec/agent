<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class user_auditController extends Controller
{
    public function index(){
      $user = DB::table('users')->where('audit','0')->get();
      return view('admin.user_audit',['user'=>$user]);
    }
}
