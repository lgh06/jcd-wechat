<?php

//require_once 'db.interface.php';
require_once 'db_mysql.class.php';

$dbc = new db_mysql($GLOBALS['db_conf']);

$r = mysql_query('select * from tb_user ;',$dbc->wlink);
while($c = mysql_fetch_array($r)){
echo $c[0]."<br>".$c[1];


}
