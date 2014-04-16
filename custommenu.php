<?php
//自定义菜单 JSON https curl post解决方案页
require_once  './common/base.php';
header('Content-type:text/html;charset=utf-8');

$jsonmenu = '{
      "button":[
      {
           "name":"aaaa",
           "sub_button":[
            {
               "type":"click",
               "name":"谁说的",
               "key":"天气北京"
            },
            {
               "type":"click",
               "name":"上海天气",
               "key":"天气上海"
            },
            {
               "type":"click",
               "name":"广州天气",
               "key":"天气广州"
            },
            {
               "type":"click",
               "name":"深圳天气",
               "key":"天气深圳"
            },
            {
                "type":"view",
                "name":"本地天气",
                "url":"http://m.hao123.com/a/tianqi"
            }]
      

       },
       {
           "name":"过客小站",
           "sub_button":[
            {
               "type":"click",
               "name":"公司简介",
               "key":"company"
            },
            {
               "type":"click",
               "name":"趣味游戏",
               "key":"游戏"
            },
            {
                "type":"click",
                "name":"讲个笑话",
                "key":"笑话"
            }]
       

       }]
 }
 ';


$url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.ACCESS_TOKEN;
$result = https_request($url, $jsonmenu);
//var_dump($result);

$isCustomMenuOK = json_decode($result);
//var_dump($isCustomMenuOK);
if(($isCustomMenuOK->errcode)==0||($isCustomMenuOK->errmsg)=='ok')
echo '自定义菜单更新成功。';

