<?php
session_start();
$conn=@mysql_connect('localhost','root','heipi96977169') or die("error");
mysql_select_db('licai2',$conn);
mysql_query("set names gb2312");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");
date_default_timezone_set('PRC');
 ?>
