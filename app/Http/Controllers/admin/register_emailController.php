<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\register_emailRequest;
use App\Mail\register_mail;
use DB;
use Mail;

class register_emailController extends Controller
{
    public function index()
    {
        return view('admin/register_email');
    }

    public function send(register_emailRequest $request)
    {
        $message = DB::table('admin')->where('id',session('id'))->first();
        Mail::to($request->input('email'))
            ->send(new register_mail($message));
    }
}
