<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class my_usersController extends Controller
{
  public function index(){
    return view('home.my_users');
  }
}
