<?php @include '../config/main.php'; ?>
<style type="text/css">
	ul{text-align: center;}
	 li{
		list-style: url("<?php echo localaddress; ?>img/right.png") outside circle; 
		margin: 10px 0px 0px -10px;
		border: 1px solid #999;
		list-style-position:inside;
		width: 120px;
		height: 30px;
		background-color: #f1f1f1;
	}
	 a{text-decoration: none;
		color: #333;
		font-size: 14px;
		line-height: 30px;}
		.xuanzhe{background-color: #F1C3C3;}
		li:hover{background-color: #F1C3C3;}
</style>
<meta charset="utf-8">
<h3 style="background:url(<?php echo localaddress; ?>img/dh.jpg);border:1px solid #999;text-align:center;height:35px;line-height:35px;margin-top:20px;font-family: Microsoft Yahei,Arial,Helvetica,sans-serif;">五&nbsp;&nbsp;稡&nbsp;&nbsp;鲜</h3>
<ul>
	<li class="xuanzhe"><a href="<?php echo localaddress; ?>news/wzx.php" target="main_right">五&nbsp;稡&nbsp;鲜</a></li>
	<li><a href="<?php echo localaddress; ?>news/fb.php" target="main_right">最新发布 <?php echo $_GET['tag']; ?></a></li>
	<li><a href="<?php echo localaddress; ?>news/zx.php" target="main_right">招贤纳士</a></li>
	<li><a href="<?php echo localaddress; ?>news/lx.php" target="main_right">联系我们</a></li>
	<li><a href="<?php echo localaddress; ?>news/gz.php" target="main_right">官方协议</a></li>
</ul>
<h3 style="background:url(<?php echo localaddress; ?>img/dh.jpg);border:1px solid #999;text-align:center;line-height:35px;font-family: Microsoft Yahei,Arial,Helvetica,sans-serif;">服&nbsp;&nbsp;务</h3>
<ul>
	<li><a href="<?php echo localaddress; ?>news/wt.php" target="main_right">常见问题</a></li>
	<li><a href="<?php echo localaddress; ?>news/fk.php" target="main_right">意见反馈</a></li>
	<li><a href="<?php echo localaddress; ?>news/lj.php" target="main_right">友情链接</a></li>
</ul> 
<script src="<?php echo localaddress; ?>js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.xuanzhe').css('list-style','url(<?php echo localaddress; ?>img/left.png) outside circle');
		$('.xuanzhe').css('list-style-position','inside');
		$('li a').click(function(){
			$('li').removeClass("xuanzhe");
			$('li').css('list-style','url(<?php echo localaddress; ?>img/right.png) outside circle');
			$('li').css('list-style-position','inside');
			$(this).parent().addClass("xuanzhe");
			$(this).parent().css('list-style','url(<?php echo localaddress; ?>img/left.png) outside circle');
			$(this).parent().css('list-style-position','inside');
			/*$(this).addClass("xuanzhe");
			$(this).siblings().removeClass("xuanzhe");
			$(this).parent().siblings().children().removeClass("xuanzhe");*/
		})
	})
</script>