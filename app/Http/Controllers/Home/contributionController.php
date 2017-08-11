<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class contributionController extends Controller
{
    public function index()
    {
      $capital = DB::table('capital')->where('aid',session('user_id'))
                    ->join('users', 'capital.aid', '=', 'users.id')
                    ->select('capital.*', 'users.nick')
                    ->paginate(15);
      $pay = DB::table('pay')->where('aid',session('user_id'))->first();
    	return view('Home.contribution',['capital'=>$capital],['pay'=>$pay]);
    }
}
