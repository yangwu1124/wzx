<?php @include '../config/main.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>五稡鲜</title>
	<link href="<?php echo localaddress.CSSPATH; ?>/demo.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo localaddress.CSSPATH; ?>/hexagons.css">
</head>
<style type="text/css">
	ul{text-align: center;}
	#zhong li{
		list-style: url("<?php echo localaddress.IMGPATH; ?>img/left.png") outside circle; 
		margin: 15px 0px 0px 20px;
		border: 1px solid #999;
		list-style-position:inside;
		width: 120px;
		height: 30px;
		background-color: #f1f1f1;
	}
	#zhong a{text-decoration: none;
		color: #333;
		font-size: 14px;
		line-height: 30px;}
	.neirong{
		background-color: #fff;
		width: 820px;
		min-height: 550px;
		border: 1px solid #999;
		margin: 20px 0px 20px 250px;

	}
	.qian{width:200px;min-height:500px;float:left;border:1px solid #999;background:#fff;}
	iframe{border: 0px;}
</style>
<body>
	<div class="top">
		<div style="margin:0 auto;width:1000px;height:80px;">	
			<div style="float:left;margin-left:-50px;heigth:100%;width:430px;background:red;height:80px;text-align:center;"><img src="<?php echo localaddress; ?>img/logo4.png" height="80px" style="margin-top:5px;" alt=""></div>
			<div style="float:left;heigth:100%;width:520px;margin-left:50px;">
				<ul>
					<li class="btn-7"><a href="<?php echo localaddress; ?>index.php">首页</a></li>
					<li class="btn" id="wzx"><a href="<?php echo localaddress.NEWSPATH; ?>/about_we.php">关于我们</a></li>
					<li class="btn-7" id="zx"><a href="<?php echo localaddress; ?>config/config.php?tag=zx">招贤纳士</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div style="width:1020px;margin:0 auto;" id="zhong">
		<div class="qian">
			<iframe src="left.php" width="100%;" height="500px"></iframe>
		</div>
		<div class="neirong">
			<iframe src="wzx.php" width="100%" id="main_right" name="main_right" onLoad="iFrameHeight()"></iframe>
		</div>
	</div>
	<?php include 'footer.php' ?>

</body>
<script src="<?php echo localaddress; ?>js/jquery.min.js"></script>
<script type="text/javascript" language="javascript">   
	$("#main_right").load(function(){   
        var iframeHeight = $(this).contents().find("pre").height()+100;     
        if( iframeHeight < 600){          
            $(this).attr("height",600)     
        }
        else{
        $(this).attr("height",iframeHeight)   
        }
    });
</script>

</html>

