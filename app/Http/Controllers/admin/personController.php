<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class personController extends Controller
{
    public function index()
    {
    	return view('Admin.person');
    }
}
