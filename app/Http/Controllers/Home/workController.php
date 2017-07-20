<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class workController extends Controller
{
    public function order()
    {
    	return view('Home.order');
    }
    public function record()
    {
    	return view('Home.record');
    }
}
