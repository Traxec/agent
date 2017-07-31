<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class systemController extends Controller
{
    public function index()
    {
    	return view('Home.system');
    }
    public function add()
    {
      return view('Home.system_add');
    }
}
