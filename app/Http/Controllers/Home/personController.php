<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class personController extends Controller
{
    public function index()
    {
      $person = DB::table('users')->where('id',session('user_id'))->first();
    	return view('Home.person',['person'=>$person]);
    }

    public function update(Request $request)
    {
      dd($request);
    }

    public function password()
    {
    	return view('Home.password');
    }
}
