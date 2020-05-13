<meta charset="utf-8">
<style type="text/css">
	
	#submit{height: 35px;width: 100px;margin: 30px 0px 0px 330px;border: 0px;background-color: #F1C3C3;color: }
</style>
<h3 style="font-family: Microsoft Yahei,Arial,Helvetica,sans-serif; text-align:center;width:740px;margin:0px auto;">意&nbsp;见&nbsp;反&nbsp;馈</h3>
<form action="" method="post" style="margin:0px auto;width:740px;">
<textarea name="text" placeholder="有了您的宝贵意见，我们会越来越优质。" style="width:740px;height:380px;"></textarea>
<input type="text" name="lixi" placeholder="请输入您的联系方式" style="margin-top:30px;height:35px;width:740px;">
<input type="submit" name="submit" value="提&nbsp;&nbsp;交" id="submit">
</form>
<?php 	
	include "../config/db_db.php";
	include "../config/mysql.php";
	if ($_POST['submit']) {
		unset($_POST['submit']);

		$neirong = htmlentities($_POST['text']);
		$lixi = htmlentities($_POST['lixi']);
		$xy = $res->fn_insert('lc_fk','`fankui`,`lianxi`',"'".$neirong."'".','."'".$lixi."'");
		if ($xy) {
			echo '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">';
			echo "<script language=javascript>alert('提交成功，非常感谢您的建议。');window.history.go(-1);</script>";
		}
	}

/*function _get_ip_dizhi($ip=null){
		$opts = array(
			'http'=>array(
			'method'=>"GET",
			'timeout'=>5,)
		);
		$context = stream_context_create($opts);


		if($ip){
			$ipmac = $ip;
		}else{
			$ipmac=_get_ip();
			if(strpos($ipmac,"127.0.0.") === true)return '';
		}

		$url_ip='http://ip.taobao.com/service/getIpInfo.php?ip='.$ipmac;
		$str = @file_get_contents($url_ip, false, $context);
		if(!$str) return "";
		$json=json_decode($str,true);
		if($json['code']==0){

			$json['data']['region'] = addslashes(_htmtocode($json['data']['region']));
			$json['data']['city'] = addslashes(_htmtocode($json['data']['city']));

			$ipcity= $json['data']['region'].$json['data']['city'];
			$ip= $ipcity.','.$ipmac;
		}else{
			$ip="";
		}
		return $ip;
}
function _get_ip(){
		if (isset($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], "unknown"))
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], "unknown"))
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if (isset($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
			$ip = $_SERVER['REMOTE_ADDR'];
		else if (isset($_SERVER['REMOTE_ADDR']) && isset($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
			$ip = $_SERVER['REMOTE_ADDR'];
		else $ip = "";
		return ($ip);
}*/
 ?>

