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