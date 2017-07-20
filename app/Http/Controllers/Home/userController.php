<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function check()
    {
    	return view('Home.user');
    }
    public function index()
    {
    	return view('Home.user_index');
    }
    
}
