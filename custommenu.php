<?php
header('Content-type:text/html;charset=utf-8');
//自定义菜单 JSON https curl post解决方案页
require_once dirname(__FILE__).'/common/base.php';


$jsonmenu = '{
      "button":[
      {
           "name":"我要理财",
           "sub_button":[
            {
               "type":"view",
               "name":"快速注册",
               "url":"http://www.jinchidai.com/index.action?user&q=going/getreg"
            },
			{
               "type":"view",
               "name":"标情速递",
               "url":"http://www.jinchidai.com/invest/index.html?order=account_up"
            },
            {
               "type":"click",
               "name":"充值方式",
               "key":"czfs"
            },
            {
               "type":"view",
               "name":"安全保障",
               "url":"http://m.jinchidai.com/html/aqbz.html"
            }]
      

       },
       {
           "name":"我要借款",
           "sub_button":[
		    {
               "type":"view",
               "name":"快速注册",
               "url":"http://www.jinchidai.com/index.action?user&q=going/getreg"
            },
            {
               "type":"view",
               "name":"产品介绍",
               "url":"http://www.jinchidai.com/borrow/index.html"
            },
            {
               "type":"view",
               "name":"借款流程",
               "url":"http://m.jinchidai.com/html/jklc.html"
            },
            {
                "type":"view",
                "name":"借款费用",
                "url":"http://m.jinchidai.com/html/jkfy.html"
            }]
       

       },{
           "name":"更多……",
           "sub_button":[
            {
               "type":"view",
               "name":"快速注册",
               "url":"http://www.jinchidai.com/index.action?user&q=going/getreg"
            },
            {
               "type":"view",
               "name":"招聘信息",
               "url":"http://m.jinchidai.com/html/zpxx.html"
            },
            {
               "type":"click",
               "name":"公司简介",
               "key":"gsjj"
            },
			{
               "type":"click",
               "name":"联系我们",
               "key":"lxwm"
            },
			{
               "type":"view",
               "name":"平台公告",
               "url":"http://www.jinchidai.com/gonggao/index.html"
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

