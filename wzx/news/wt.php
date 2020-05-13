<meta charset="utf-8">
<h3 style="font-family: Microsoft Yahei,Arial,Helvetica,sans-serif;border-bottom: 3px #555 solid; text-align:center;margin:0px auto;width:800px;">常&nbsp;见&nbsp;问&nbsp;题</h3>
<pre style="width:800px;margin:0px auto;font-size:18px;">
<?php 
	include "../config/db_db.php";
	include "../config/mysql.php";
	$sql = "select wenti from lc_wenti limit 1";
	$xy = $res->fn_select($sql);
	echo $xy['0'];
 ?>
</pre>
