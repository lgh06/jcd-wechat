<?php
function returnAccessToken()
{

	if(	!file_exists('ac.php') || (time()-filemtime('ac.php')>7100))
		{
			$temp = getAccessToken();
			file_put_contents('ac.php',$temp);//用ac.php文件内的字符串做缓存
			clearstatcache();

		}
		
	$ac = trim(file_get_contents('ac.php'));
	return $ac;
}

function getAccessToken()
{ 	
	$info=http_request("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APPSECRET);
	$token=json_decode($info);
	return $token->{'access_token'};
}




















































// //微信公众平台 获取Access Token 全局包含页
// class AccessToken{
	// private static $obj = null; 		//声明一个私有的，静态的成员属性$obj
	// public static  $accessToken;
	// public static  $accessTokenCreateTime;


	// private function __construct() {
			// /* 构造方法， 使用private 封装后则只能在类的内部使用new去创建对象 */
			
		// }

	// //强制使本类不能new，只能从以下方法获取一个实例，且只会有一个此类的实例。
	// static function getInstance() {
			// if(is_null(self::$obj))			//如果本类中的$obj为空,说明还没有被实例化过
				// self::$obj = new self();	//实例化本类对象
				
			// return self::$obj;				//返回本类的对象
		// }	

	// public static function getAccessToken(){
		// if(isset(self::$accessToken)||!self::isTokenGuoqi( self::$accessTokenCreateTime )){
		// return self::$accessToken; 
	
	// }else{
	// $info=http_request("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APPSECRET);
		// $token=json_decode($info);
		// self::$accessTokenCreateTime = time();
		// return $token->{'access_token'};
		
	// }
		
	// }
	
	
	// //判断accesstoken是否过期
	// public static function isTokenGuoqi($create){
	
	// //用户请求任何一个页面，获取当前时间，和之前的token过期时间对比
	// if( time()- $create > 7100 ){
		// return true;
	// }else{
		// return false;
	// }

	// }


// }

// //定义常量
// define("ACCESS_TOKEN",AccessToken::getAccessToken());
// //define("ACCESS_TOKEN_CREATION_TIME",AccessToken::getInstance()->getAccessTokenCreateTime());