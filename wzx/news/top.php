<?php @include '../config/main.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>五稡鲜</title>
	<link href="<?php echo localaddress; ?>css/demo.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo localaddress; ?>css/hexagons.css">
</head>
<script src="<?php echo localaddress; ?>js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	/*	$('#zx').click(function(){
			$('li').removeClass("btn");
			$('li').removeClass("btn-7");
			$('li').siblings().addClass("btn-7");
			$(this).removeClass("btn-7");
			$(this).addClass("btn");
		})
		$('#wzx').click(function(){
			$('li').removeClass("btn");
			$('li').removeClass("btn-7");
			$('li').siblings().addClass("btn-7");
			$(this).removeClass("btn-7");
			$(this).addClass("btn");
		})*/
		<?php if ($_GET['tag'] === 'zx') { ?>
			$("ul li:last-child").removeClass("btn-7");
			$("ul li:last-child").addClass("btn");
		<?php }else{ ?>
		
			$("ul li:last-child").removeClass("btn");
			$("ul li:last-child").addClass("btn-7");
		<?php } ?>

	})
</script>
<body>
	<div class="top">
		<div style="margin:0 auto;width:1000px;height:80px;">	
			<div style="float:left;margin-left:-50px;heigth:100%;width:430px;background:red;height:80px;text-align:center;"><img src="<?php echo localaddress; ?>img/logo4.png" height="80px" style="margin-top:5px;" alt=""></div>
			<div style="float:left;heigth:100%;width:520px;margin-left:50px;">
				<ul>
					<li class="btn-7"><a href="<?php echo localaddress; ?>news/index.php">首页</a></li>
					<li class="btn-7"><a href="<?php echo localaddress; ?>news/about_we.php">关于我们</a></li>
					<li class="btn-7"><a href="<?php echo localaddress; ?>config/config.php?tag=zx">招贤纳士</a></li>
				</ul>
			</div>
		</div>
	</div>