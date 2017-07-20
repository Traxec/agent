<?php

namespace App\Http\Controllers;

use DB;
use App\Mail\OrderShipped;
use App\Http\Requests;
use Mail;

class MailController extends Controller
{
    /**
     * 发送邮件函数
     *
     * @param $email            收件人邮箱  如果群发 则传入数组
     * @param $name             收件人名称
     * @param $subject          标题
     * @param $data             邮件内容数组形式 邮件模板中需要用的的变量 示例：['name'=>'帅白','phone'=>'110']
     * @param string $template 邮件模板
     * @return array            发送状态
     */
    function sendEmail($email, $name, $subject, $data, $template)
    {
        Mail::send($template, $data, function ($message) use ($email, $name, $subject) {
            //如果是数组；则群发邮件
            if (is_array($email)) {
                foreach ($email as $k => $v) {
                    $message->to($v, $name)->subject($subject);
                }
            } else {
                $message->to($email, $name)->subject($subject);
            }
        });
        if (count(Mail::failures()) > 0) {
            $data = array(
                'status_code' => 500,
                'message'     => '邮件发送失败',
            );
        } else {
            $data = array(
                'status_code' => 200,
                'message'     => '邮件发送成功',
            );

        }
        return $data;
    }

    public function send()
    {
//        $this->sendEmail('2582459187@qq.com','Traxec','邮件标题',['name'=>'大白'],'Email.test');
        $message = DB::table('admin')->where('id',1)->first();
        Mail::to('2582459187@qq.com')
            ->send(new OrderShipped($message));
    }

}
