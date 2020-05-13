<?php @include '../config/main.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>五稡鲜</title>
	<link href="<?php echo localaddress.CSSPATH; ?>/demo.css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo localaddress.CSSPATH; ?>/hexagons.css">
	<meta name="keywords" content="五稡鲜,5稡鲜,30min,稡仙,稡侠,社区服务"/>
	<meta name="description" content="五稡鲜,专注于商城,快递收发,社区服务"/>
</head>
<body>
	<div class="top">
		<div style="margin:0 auto;width:1000px;height:80px;">	
			<div style="float:left;margin-left:-50px;heigth:100%;width:430px;background:red;height:80px;text-align:center;"><img src="<?php echo localaddress.IMGPATH; ?>/logo4.png" height="80px" style="margin-top:5px;" alt=""></div>
			<div style="float:left;heigth:100%;width:520px;margin-left:50px;">
				<ul>
					<li class="btn"><a href="<?php echo localaddress.NEWSPATH; ?>/index.php">首页</a></li>
					<li class="btn-7"><a href="<?php echo localaddress.NEWSPATH; ?>/about_we.php">关于我们</a></li>
					<li class="btn-7"><a href="<?php echo localaddress; ?>config/config.php?tag=zx">招贤纳士</a></li>
				</ul>
			</div>
		</div>
	</div>
	<ul id="nav">
		<li class="current"><a href="#intro">下载APP</a></li>
		<li><a href="#usage">微信商城</a></li>
		<li><a href="#options">平台服务</a></li>
		<li><a href="#examples">购物攻略</a></li>
	</ul>
	<div id="container">
		<div class="section" id="intro">
			<div style="width:50%;float:left;">
				<div class="gong" style="margin-top:50px;">
					<img src="<?php echo localaddress.IMGPATH; ?>/logo1.png"  height="250px" style="float:right;margin-right:70px;" alt="">
				</div>
				<div class="gon">
					<div style="width:102px;float:right;height:122px;text-align:center;border:1px solid #CC0000;margin-top:10px;">
						<img src="<?php echo localaddress.IMGPATH; ?>/ewm.png" width="100px" height="100px" style="margin-top:0px;" alt=""><br>
						<p style="width:100px;height:24px;line-height:24px;background:red;font-size:12px;margin-top:-10px;">扫描二维码下载</p>
					</div>
					<div style="width:270px;float:right;">
						<a href=""><div class="button button1"><img src="<?php echo localaddress.IMGPATH; ?>/xz.png" style="margin-top:0px;float:left;" alt=""/><span style="float:left;">下载Android app</span></div></a><br />
						<a href=""><div class="button button2"><img src="<?php echo localaddress.IMGPATH; ?>/xz2.png" style="margin-top:0px;float:left;" alt=""/><span style="float:left;">下载iPhone app</span></div></a>
					</div>
					
				</div>
			</div>
			<div style="width:50%;float:left;">
				<div class="pho">
					<div class="nei">
					 <iframe src="http://m.rhcom.cn" width="100%;" height="100%"></iframe>
					</div>
				</div>
				
			</div>
		</div>
		<div class="section2" id="usage">
			<div class="section22">
				<img src="<?php echo localaddress.IMGPATH; ?>/ewmx.png" height="600px" class="x_img" alt=""/>
				<p>扫一扫关注五稡鲜~<h2 style="margin-top:-60px;">关注就能下单购物</h2><h2>享受各种社区服务</h2><img src="<?php echo localaddress.IMGPATH; ?>/sys.jpg" width="150px" height="150px" class="xx_img" alt=""/></p>
				
			</div>
		</div>
		<div class="section3" id="options">
			
<ul id="hexGrid">
  <li class="hex"> <a class="hexIn" href="javascript:(0);"> <img src="<?php echo localaddress.IMGPATH; ?>/111.png" alt="" />
    <h1 style="background-color:#AF4B43;">下单购物</h1>
    <p style="background-color:#AF4B43;">&nbsp;&nbsp;&nbsp;&nbsp;稡超市有各种各样的商品供您选择，物美价廉，赶快下载安装或者微信关注五稡鲜公众号购物吧！</p>
    </a> </li>
  <li class="hex"> <a class="hexIn" href="javascript:(0);"> <img src="<?php echo localaddress.IMGPATH; ?>/222.png" alt="" />
    <h1 style="background-color:#81939D;">商品配送</h1>
    <p  style="background-color:#81939D;">&nbsp;&nbsp;&nbsp;&nbsp;您在稡超市购买的任何商品，都会有人亲手并快速的送达到您的手中哦~</p>
    </a> </li>
  <li class="hex"> <a class="hexIn" href="javascript:(0);"> <img src="<?php echo localaddress.IMGPATH; ?>/333.png" alt="" />
    <h1 style="background-color:#2D758E;">快递收发</h1>
    <p  style="background-color:#2D758E;">&nbsp;&nbsp;&nbsp;&nbsp;五稡鲜有许许多多的社区店，如果您有什么东西要邮寄，您可以选择任何一家社区店上门收取您要邮寄的货品。</p>
    </a> </li>
  <li class="hex"> <a class="hexIn" href="javascript:(0);"> <img src="<?php echo localaddress.IMGPATH; ?>/444.png" alt="" />
    <h1 style="background-color:#247918;">居家生活</h1>
    <p  style="background-color:#247918;">&nbsp;&nbsp;&nbsp;&nbsp;五稡鲜还提供了健康医疗，汽车服务，房产置业，消费金融等等多种社区服务，贴心的生活从不排队等候~</p>
    </a> </li>

</ul>
		</div>
		<div class="section4" id="examples">
			<div style="width:1170px;margin:0px auto;height:550px;;">
			<img src="<?php echo localaddress.IMGPATH; ?>/lc1.png" style="position:absolute;margin-left:5px;margin-top:90px;" onMouseenter="lcfunx(1)"  id="lc1" alt=""/>
			<img src="<?php echo localaddress.IMGPATH; ?>/lc2.png" style="position:absolute;margin-left:305px;margin-top:90px;" onMouseenter="lcfunx(2)"  id="lc2" alt=""/>
			<img src="<?php echo localaddress.IMGPATH; ?>/lc3.png" style="position:absolute;margin-left:600px;margin-top:90px;" onMouseenter="lcfunx(3)"  id="lc3" alt=""/>
			<img src="<?php echo localaddress.IMGPATH; ?>/lc4.png" style="position:absolute;margin-left:893px;margin-top:90px;" onMouseenter="lcfunx(4)"  id="lc4" alt="/">
				<hr style="margin-top:475px;float:left;width:115px;">
				<canvas id="myCanvas" width="55" height="55" style="float:left;margin-top:450px;">
				</canvas>
				<hr style="margin-top:475px;float:left;width:240px;" />
				<canvas id="myCanvas1" width="55" height="55" style="float:left;margin-top:450px;">
				</canvas>
				<hr style="margin-top:475px;float:left;width:240px;" />
				<canvas id="myCanvas2" width="55" height="55" style="float:left;margin-top:450px;">
				</canvas>
				<hr style="margin-top:475px;float:left;width:240px;" />
				<canvas id="myCanvas3" width="55" height="55" style="float:left;margin-top:450px;">
				Your browser does not support the canvas element.
				</canvas>
				
				<hr style="margin-top:475px;float:left;width:115px;" />
				
				<div style="color:#fff; position:absolute;margin-left:138px;margin-top:465px;">1</div>
				<div style="color:#fff; position:absolute;margin-left:432px;margin-top:465px;">2</div>
				<div style="color:#fff; position:absolute;margin-left:728px;margin-top:465px;">3</div>
				<div style="color:#fff; position:absolute;margin-left:1023px;margin-top:465px;">4</div>
			</div>
			
			<script type="text/javascript">
			var a=document.getElementById("myCanvas");
			var cxta=a.getContext("2d");
			cxta.fillStyle="#000000";
			cxta.beginPath();
			cxta.arc(27,28,25,0,Math.PI*2,true);
			cxta.closePath();
			cxta.fill();
			
			var b=document.getElementById("myCanvas1");
			var cxtb=b.getContext("2d");
			cxtb.fillStyle="#000000";
			cxtb.beginPath();
			cxtb.arc(27,28,25,0,Math.PI*2,true);
			cxtb.closePath();
			cxtb.fill();
			
			var c=document.getElementById("myCanvas2");
			var cxt=c.getContext("2d");
			cxt.fillStyle="#000000";
			cxt.beginPath();
			cxt.arc(27,28,25,0,Math.PI*2,true);
			cxt.closePath();
			cxt.fill();
			
			var d=document.getElementById("myCanvas3");
			var cxtd=d.getContext("2d");
			cxtd.fillStyle="#000000";
			cxtd.beginPath();
			cxtd.arc(27,28,25,0,Math.PI*2,true);
			cxtd.closePath();
			cxtd.fill();
			

			</script>
			
		</div>
		<?php include 'footer.php' ?>
		<!-- <div style="border-top: 5px #fc0 solid;min-height: 30vh;background-color:#F1F1F1;width:100%;" id="se5">
				<div style="width:1200px;height:200px;margin:0 auto;">
					<div style="width:600px;height:200px;float:left;margin-left:50px;">
						<div style="height:200px;width:150px;float:left;">
							<h3 style="margin-top:20px;">五稡鲜</h3>
						<a href="<?php echo localaddress; ?>config/config.php?tag=wzx" >关于五稡鲜</a><br/>
						<a href="<?php echo localaddress; ?>config/config.php?tag=lx" >联系我们</a><br/>
						<a href="<?php echo localaddress; ?>config/config.php?tag=zx" >招贤纳士</a><br/>
						<a href="<?php echo localaddress; ?>config/config.php?tag=fb" >最新发布</a>
					</div>
					<div style="height:200px;width:150px;float:left;">
						<h3 style="margin-top:20px;">服务</h3>
						<a href="<?php echo localaddress; ?>config/config.php?tag=wt" >常见问题</a><br/>
						<a href="<?php echo localaddress; ?>config/config.php?tag=fk" >意见反馈</a><br/>
						<a href="<?php echo localaddress; ?>config/config.php?tag=lj" >友情链接</a><br/>
							
						</div>
						<div style="height:200px;width:240px;float:left;">
							<h3 style="margin-top:20px;">扫描二维码</h3>
							<div style="width:240px;height:100px;margin:5px;">
								<div style="width:110px;height:100px;float:left;">
									<h5>APP</h5>
									<img src="<?php echo localaddress.IMGPATH; ?>/ewm.png" alt="" width="80px" height="80px" />
								</div>
								<div style="width:110px;height:100px;float:left;">
									<h5>微信公众号</h5>
									<img src="<?php echo localaddress.IMGPATH; ?>/ewm.png" alt="" width="80px" height="80px" />
								</div>
							</div>
						</div>
					</div>
					<div style="width:550px;height:200px;float:left;">
						<div style="width:340px;margin-left:130px;">
							<h4 style="font-size:22px;margin-top:25px;">版权所有  广州睿皓国际有限公司</h4>
							<a href="javascript:(0);">粤ICP备14063533号-1</a><a href="">营业执照</a>
							<h4 style="font-size:26px;margin-top:25px;margin:5px;">座机号码： 400-4141244</h4>
							<span>广州省番禺区洛浦街道沙滘中路2巷4号</span>
						</div>
					</div>
				</div>
				<div style="width:400px;height:50px;margin:0 auto;line-height:50px;">版权所有-广州睿皓国际有限公司  粤ICP备14063533号-1</div>	
				<style type="text/css">
					#se5 a{margin:10px;
					text-decoration:none;
					color:#555;
					cursor: pointer;}
					h3{margin:10px;}
				</style>
		</div> -->
	</div>



	<!--[if lte IE 8]><script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script><![endif]-->

	<!--[if gt IE 8]><!--><script src="<?php echo localaddress.JSPATH; ?>/jquery.min.js"></script><!--<![endif]-->

	<script src="<?php echo localaddress.JSPATH; ?>/jquery.nav.js"></script>

	<script>

		$(document).ready(function() {

			$('#nav').onePageNav();
			
			
		 $("#lc1").mouseleave(function(){
			$("#lc1").animate({
			  opacity:'15',
			  width:'260px'
			});
		  });
		  $("#lc2").mouseleave(function(){
			$("#lc2").animate({
			  opacity:'15',
			  width:'260px'
			});
		  });
		  $("#lc3").mouseleave(function(){
			$("#lc3").animate({
			  opacity:'15',
			  width:'260px'
			});
		  });
		  $("#lc4").mouseleave(function(){
			$("#lc4").animate({
			  opacity:'15',
			  width:'260px'
			});
		  });

		});

	</script>
	<script type="text/javascript">
		
		function lcfunx(j){
			$('#lc'+j).animate({
				 //left:'10px',
				  opacity:'0.6',
				 // height:'110%',
				  width:'270px'
			})
		}
	</script>
</body>

</html>

