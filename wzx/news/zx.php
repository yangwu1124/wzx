<meta charset="utf-8">
<h3 style="font-family: Microsoft Yahei,Arial,Helvetica,sans-serif;border-bottom: 3px #555 solid; text-align:center;margin:0px auto;width:800px;">招&nbsp;贤&nbsp;纳&nbsp;士</h3>
<pre style="width:800px;margin:0px auto;font-size:18px;">
<?php 
	include "../config/db_db.php";
	include "../config/mysql.php";
	$sql = "select zhaopin from lc_zx limit 1";
	$xy = $res->fn_select($sql);
	echo $xy['0'];
 ?>
</pre>

