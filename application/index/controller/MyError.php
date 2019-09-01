<?php
namespace app\index\controller;
use think\Request;

class MyError
{
    public function _empty()
    {
        header("HTTP/1.0 404 Not Found");
        echo  '<script>setTimeout(function (){location.href="'.MAC_PATH.'";},'.(2000).');</script>';
        $msg = '正在为您跳转到首页  建议您重新操作，谢谢！';
        abort(404,$msg);
        exit;
    }
}