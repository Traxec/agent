<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class agencyController extends Controller
{
    public function check()
    {
    	return view('Home.agency');
    }
    public function index()
    {
    	return view('Home.agency_index');
    }
}
