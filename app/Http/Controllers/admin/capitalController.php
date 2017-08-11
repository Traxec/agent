<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class capitalController extends Controller
{
  public function index()
  {
    $capital = DB::table('capital')
                  ->join('users', 'capital.aid', '=', 'users.id')
                  ->select('capital.*', 'users.nick')
                  ->paginate(15);
    $sum =DB::table('profit')->sum('price');
    //dd($sum);
    return view('Admin.capital',['capital'=>$capital],['sum'=>$sum]);
  }

}
