<?php
$GLOBALS['db_conf'] =  array(
		'type' => 'mysql',
		// 主数据库
		'master' => array(
			'host' => 'localhost',
			'user' => 'root',
			'password' => 'root',
			'name' => 'jcd',
			'charset' => 'utf8',
			'tablepre' => 'tb_',
			'engine'=>'MyISAM')
	);