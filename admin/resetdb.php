<?php
header('Content-Type:text/html;charset=utf-8');
$parentdir = dirname(dirname(__FILE__));
require_once $parentdir.'/common/db/db_mysql.class.php';

$s = file_get_contents($parentdir.'/jcd.sql');
$dbc = new db_mysql($GLOBALS['db_conf']);


$sqls = $dbc->split_sql($s);

foreach($sqls as $sql) {
		$sql = str_replace("\n", '', trim($sql));
		@$ret = mysql_query($sql);
		
		if(substr($sql, 0, 6) == 'CREATE') {
			$name = preg_replace("/CREATE TABLE ([`a-z0-9_]+) .*/is", "\\1", $sql);

			if($ret) {
				echo('创建数据表 '.$name.' ... <i>成功</i><br>');
			}else{
				echo('创建数据表 '.$name.' ... <u>失败</u> (您的数据库没有写权限？)<br><u>'.mysql_error().'</u><br>');
			}
		}

		if(!$ret) {
			echo('创建数据表失败</u> (您的数据库没有权限？)<br><u>'.mysql_error().'</u><br>');
		}
		
		
		
		
}
	echo "<h2>请返回后台<a href=\"./\">返回</a></h2>";