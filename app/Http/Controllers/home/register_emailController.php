<?php

namespace App\Http\Controllers\home;

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
        return view('home/register_email');
    }

    public function send(register_emailRequest $request)
    {
      $data = DB::table('users')->where('id',session('user_id'))->first();
      $email = $request->input('email');
      $catid = $request->input('catid');
      $pid = session('user_id');
      $path= $data->path.','.session('user_id');

      $message['data'] = "{'email':'$email','catid':'$catid','pid':'$pid','path':'$path'}";
      $message['database'] = $data;
        Mail::to($request->input('email'))
            ->send(new register_mail($message));
    }
}
