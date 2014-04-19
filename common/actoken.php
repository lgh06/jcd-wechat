<?php
function returnAccessToken()
{
	@$c = file_get_contents('ac.php');

	if(	!file_exists('ac.php') || (time()-filemtime('ac.php')>7100)||empty($c))
		{
			
			$temp = getAccessToken();
			file_put_contents('ac.php',$temp);//用ac.php文件内的字符串做缓存
			clearstatcache();
			return trim($temp);
		}
		
	
	return trim($c);
}

function getAccessToken()
{ 	
	$info=http_request("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".APPSECRET);
	$token=json_decode($info);
	return $token->{'access_token'};
}