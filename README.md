
#关于本项目
本项目基于[方倍工作室 微信开放平台SDK](http://www.cnblogs.com/txw1958/p/weixin-php-sdk.html)



#项目说明

#####test.php为响应地址。
#####custommenu.php为自定义菜单，修改其中的内容，直接在地址栏请求即可。


####数据库配置文件在/common/db/db_config.php

```php
$GLOBALS['db_conf'] =  array(
    	'type' => 'mysql',
		// 主数据库
		'master' => array(
			'host' => 'localhost',//MySQL服务器ip地址
			'user' => 'root',//用户名
			'password' => 'root',//密码
			'name' => 'jcd',//数据库的名称
			'charset' => 'utf8',//编码
			'tablepre' => 'tb_',//表前缀，目前没用
			'engine'=>'MyISAM')//数据库引擎
	);


```

####TOKEN、APPID、APPSECRET设置在/common/base.php
```php
define("TOKEN", "If985hike");
define("APPID", "wxe9828da2665d3b63");
define("APPSECRET","9098f1847820f42fd59b0d083761d4b1");
```
####jcd.sql为对应数据库脚本

##修改后上传到服务器即可




在使用中有任何问题，欢迎反馈给我，可以用以下联系方式跟我交流

* 邮件(hnnk--qq.com, 把--换成@)
* QQ: 527902958
* weibo: [@穿越异次元](http://weibo.com/73436303)
* [![可怜可怜我吧](https://img.alipay.com/sys/personalprod/style/mc/btn-index.png)](http://me.alipay.com/dusty)
