<?php
/**
 * Copyright (C) 2013-2014 www.kongphp.com All rights reserved.
 * Licensed http://www.gnu.org/licenses/lgpl.html
 * Author: wuzhaohuan <kongphp@gmail.com>
 */

require_once dirname(__FILE__).'/db_config.php';

class db_mysql {
	private $conf;
	public $wlink;		// 写(主)数据库
	//private $xlink;		// 分发数据库
	
	
	public function __construct(&$conf) {
		$this->conf = &$conf;
		$this->wlink = $this->getLink();
	}

	/**
	 * 创建 MySQL 连接
	 * 
	 * @return resource
	 */
	public function getLink() {
			$cfg = $this->conf['master'];
			empty($cfg['engine']) && $cfg['engine'] = '';
			$this->wlink = $this->connect($cfg['host'], $cfg['user'], $cfg['password'], $cfg['name'], $cfg['charset'], $cfg['engine']);
			return $this->wlink;

		
	}

	
	/**
	 * 连接 MySQL 服务器
	 * @param string $host		主机
	 * @param string $user		用户名
	 * @param string $pass		密码
	 * @param string $name		数据库名称
	 * @param string $charset	字符集
	 * @param string $engine	数据库引擎
	 * @return resource
	 */
	public function connect($host, $user, $pass, $name, $charset = 'utf8', $engine = '') {
		$link = mysql_connect($host, $user, $pass);
		if(!$link) {
			throw new Exception(mysql_error());
		}
		$result = mysql_select_db($name, $link);
		if(!$result) {
			throw new Exception(mysql_error());
		}
		if(!empty($engine) && $engine == 'InnoDB') {
			mysql_query("SET innodb_flush_log_at_trx_commit=no", $link);
		}

		// 不考虑 mysql 5.0.1 下以版本
		mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary, sql_mode=''", $link);
		//$this->query("SET names utf8, sql_mode=''", $link);
		return $link;
	}

	
	public function query($sql){
	
	
	
	}
	
	
	public function selectSQL($sql){
		$query = mysql_query($sql, $this->wlink);
		if($query==false) return false;
		return mysql_fetch_array($query);
	
	}


	/**
	 * 获取结果数据    行数
	 * @param resource $query	查询结果集
	 * @param int $row			第几列
	 * @return int
	 */
	public function result($query, $row) {
		return mysql_num_rows($query) ? intval(mysql_result($query, $row)) : FALSE;
	}

	/**
	 * 获取 mysql 版本
	 * @return string
	 */
	public function version() {
		return mysql_get_server_info($this->wlink);
	}

	/**
	 * 关闭读写数据库连接
	 */
	public function __destruct() {
		if(!empty($this->wlink)) {
			mysql_close($this->wlink);
		}
		
	}

}