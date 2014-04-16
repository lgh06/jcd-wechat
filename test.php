<?php


require_once  './common/base.php';



$wechatObj = new wechatCallbackapiTest();
if(isset($_GET['echostr'])) {
    $wechatObj->valid();
}else{
    $wechatObj->responseMsg();
}
