<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class personController extends Controller
{
    public function index()
    {
    	return view('Home.person');
    }
    public function password()
    {
    	return view('Home.password');
    }
}
