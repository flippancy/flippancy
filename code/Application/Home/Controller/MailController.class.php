<?php

namespace Home\Controller;
use Think\Controller;
class MailController extends Controller{
    public function send(){

        $mailinfo = $_POST['contact'];
        $mailinfo['message'] = "我的邮箱是：" . $mailinfo['email'] . "<br /><br />" . $mailinfo['message'];

        $reslut = sendMail("xx收件者邮箱xx@qq.com",$mailinfo['subject'],$mailinfo['message']);

        if($reslut == 1){
            $this->success("邮件发送成功！" ,'Index/index');
        }
        else{
            $this->error("邮件发送失败！请检查你的网络情况！" ,'Index/index')
        }
    }

}
