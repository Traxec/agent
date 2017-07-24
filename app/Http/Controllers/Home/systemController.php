<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class systemController extends Controller
{
    public function index()
    {
    	$admin = DB::table('system')->where('pid','1')->get();
    	return view('Home.system',['system'=> $admin]);
    }
    public function add()
    {
    	$input = Request::all;
    	return $input;
    }
}
