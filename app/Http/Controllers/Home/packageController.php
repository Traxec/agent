<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class packageController extends Controller
{
    public function index()
    {
    	return view('Home.package');
    }
}
