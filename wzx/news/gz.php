<meta charset="utf-8">
<h3 style="font-family: Microsoft Yahei,Arial,Helvetica,sans-serif;border-bottom: 3px #555 solid; text-align:center;margin:0px auto;width:800px;">官&nbsp;方&nbsp;协&nbsp;议</h3>
<pre style="width:800px;margin:0px auto;font-size:18px;">
<?php 
	include "../config/db_db.php";
	include "../config/mysql.php";
	$sql = "select xieyi from lc_xy limit 1";
	$xy = $res->fn_select($sql);
	echo $xy['0'];
 ?>
</pre>
