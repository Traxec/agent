<?php

namespace App\Http\Controllers;

use DB;
use App\Mail\OrderShipped;
use App\Http\Requests;
use Mail;

class MailController extends Controller
{

    public function send()
    {
//        $this->sendEmail('2582459187@qq.com','Traxec','邮件标题',['name'=>'大白'],'Email.test');
        $message = DB::table('admin')->where('id',1)->first();
        Mail::to('2582459187@qq.com')
            ->send(new OrderShipped($message));
    }

}
