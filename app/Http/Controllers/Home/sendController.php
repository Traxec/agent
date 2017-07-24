<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sendController extends Controller
{
	// 发送邮件
    public function mail()
    {
    	return view('Home.mail');
    }
    //邮件收件箱
    public function box()
    {
    	return view('Home.box');
    }
    //发送短信
    public function message()
    {
    	return view('Home.message');
    }
    //短信收件箱
    public function inbox()
    {
    	return view('Home.inbox');
    }
}
