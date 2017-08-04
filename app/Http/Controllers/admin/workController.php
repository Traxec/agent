<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class workController extends Controller
{
    public function index()
    {
      $order = DB::table('order')->paginate(1);
    	return view('Admin.work',['order'=>$order]);
    }
}
