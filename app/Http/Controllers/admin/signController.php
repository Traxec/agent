<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class signController extends Controller
{
    public function index()
    {
    	return view('Admin.sign');
    }

    public function add(Request $request){
        if($request->input('id')){

        }else{

        }
    }
}
