<?php
 	session_start();
$piu='';
if(!isset($_SESSION["name"])){
//echo "<script>alert('请登录');window.location.href='entry.php'</script>";
}
else{
	$piu=$_SESSION["name"];
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>爸爸去哪儿官方网站</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

<script src="js/jquery-1.11.0.min.js"></script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Happy Pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/menu_jquery.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>

</head>
<body>
<script>$(document).ready(function(c) {
	$('.ban-main-cls').on('click', function(c){
		$('.bann-close').fadeOut('slow', function(c){
	  		$('.bann-close').remove();
		});
	});	  
});
</script>

<div class="header" id="home">
		<div class="header-main">
          <div class="top-nav">
			  	<span class="menu"> <img src="images/icon.png" alt=""/></span>
				<ul class="res">
					<li><a href="js/ger.php">首页</a></li>
					<li><a class="scroll" href="#about">关于我们</a></li>
					<li><a class="scroll" href="#team">图片集</a></li>
					<li><a class="scroll" href="#service">新闻</a></li>
					<li><a href="js/gerxx.php">数据中心</a></li>

					<li><a href="js/ger.php">个人中心</a></li>
				</ul>
				
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 
								  });
								 });
							</script>
		
			 </div>	
			 <div class="header-right">
			 <div class="search-box">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="震惊，某大学生上课....." type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
			   </div>
			</div>
			  
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					
					<div class="head-button">
					<div id="loginContainer"><a href="#" id="loginButton"><span>登录</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" >
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="name">姓名</label>
						                          <input type="text" name="name">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">密码</label>
						                            <input type="password" id="pwd">
						                     </fieldset>
						                    <input type="submit" name="submit" value="提交">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>记住密码</i></label>
						            	</fieldset>
						            <span><a href="#">已有账号的请登录没有账号请去个人中心登录</a></span>
							 </form>
				        </div>
					</div>
				</div>
		<div class="clearfix"> </div>
     </div>
     <div class="clearfix"> </div>
   </div>	

</div>

<div class="banner">
	<div class="container">
		<div class="banner-main">
			 <a href="index.html"><img src="images/logo.png" alt="" class="img-class"></a>
			 <div class="bann-close">
			 	<div class="ban-main-cls"><img src="images/close.png" alt="" class="img-responsive"></div>
			 	<h2>爸爸去哪儿</h2>
			 	<p>不是所有的爸爸都姓杨</p>
			 	<p>我们不生产子女</p>
			 	<p>我们只是大自然的搬运工</p>
			 </div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="bann-strip">
			 	<a class="scroll" href="#about"><img src="images/down.png" alt=""></a>
	</div>
</div>

<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>

<div class="about" id="about">
	<div class="container">
		<div class="about-main">
			<h3>信息介绍</h3>
			<div class="about-bottom">
			<div class="col-md-6 about-left">
				<p>这些年流行起来了一大波真人户外取景的综艺，比如《爸爸去哪儿》、《花儿与少年》、《中餐厅》...而这些综艺捧红的可不仅是明星，还有他们去到的旅行地，从平潭到泸沽湖，</p>
			    <p>从纳米比亚到泰国象岛，一旦综艺播出后，这个地方立马变成了必打卡的网红旅行地~
即将开播的《爸爸去哪儿 第六季》此次选择了近年超火的稻城亚丁，近日不少小伙伴纷纷晒出偶遇照...</p>
			   <div class="social-icons">
			   	<ul>
					<li><a class="facebook" href="#"><span> </span></a></li>
					<li><a class="twitter" href="#"><span> </span></a></li>
					<li><a class="gmail" href="#"><span> </span></a></li>
					<li><a class="dribble" href="#"><span> </span></a></li>
				</ul>
			   </div>
			</div>
			<div class="col-md-6 about-right">
			    <div class="about-grid">
			    	<div class="about-box">
			    		<h5><span class="ab-box">01</span></h5>
			    	</div>
			    	<div class="about-text">
			    		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任， </h4>
			    		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出。</p>
			    	</div>
			      <div class="clearfix">  </div>
			    </div>
			    <div class="about-grid ab-more">
			    	<div class="about-box">
			    		<h5><span class="ab-box">02</span></h5>
			    	</div>
			    	<div class="about-text">
			    		<h4>短短两天，将成为平日里很少有机会呆在一起的父子拉近距离的难忘时光。</h4>
			    		<p>
节目原版《爸爸我们去哪儿》1月6日在韩国首播，收视率节节攀升，</p>
			    	</div>
			      <div class="clearfix">  </div>
			    </div>
			    <div class="about-grid">
			    	<div class="about-box">
			    		<h5><span class="ab-box">03</span></h5>
			    	</div>
			    	<div class="about-text">
			    		<h4>
2月3日收视已经达到了10.6%，截至上周，收视再创17%的惊人战绩，超过韩国最大的选秀节目《KPOPSTAR》，</h4>
			    		<p>与《两天一夜》《RunningMan》等传统强势节目并行，接近韩国原版《我是歌手》</p>
			    	</div>
			       <div class="clearfix">  </div>
			    </div>
			</div>
		  </div>
		  <div class="clearfix">  </div>
		</div>
	</div>
</div>

<div class="team-member" id="team">
	<div class="container">
		<div class="team-main">
			<h3>爸爸去哪儿图片集</h3>
			<div class="team-bottom">
			   <div class="col-md-3 team-grid">
				<img src="images/bb.jpg" alt="" class="img-responsive">
				<div class="about-details">
					<h4><b>田亮父子</b></h4>
					<p>爸爸去哪儿第二期</p>
				</div>
			   </div>
			   <div class="col-md-3 team-grid">
				<img src="images/bb.jpg" alt="" class="img-responsive">
				<div class="about-details">
					<h4>石头父子</h4>
					<p>爸爸去哪儿第二期</p>
				</div>
			   </div>
			   <div class="col-md-3 team-grid">
				<img src="images/bb.jpg" alt="" class="img-responsive">
				<div class="about-details">
					<h4>林志颖父子</h4>
					<p>爸爸去哪儿第一期</p>
				</div>
			   </div>
			   <div class="col-md-3 team-grid">
				<img src="images/bb.jpg" alt="" class="img-responsive">
				<div class="about-details">
					<h4>吴镇宇儿子</h4>
					<p>爸爸去哪儿第三期</p>
				</div>
			   </div>
			</div>
		  <div class="clearfix">  </div>
		</div>
	</div>
</div>

<div class="services" id="service">
	<div class="container">
		<div class="services-main">
			 <h3>爸爸去哪儿遛狗新闻</h3>
			 <div class="service-bottom">
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="clearfix"> </div>
			 </div>
			 <div class="service1">
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 	<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="col-md-3 service-grid">
			 		<img src="images/s2.png" alt="">
			 		<h4>每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</h4>
			 		<p>节目组设置一系列由父子共同完成的任务，父子俩在不熟悉的环境下状况百出</p>
			 	</div>
			 	<div class="clearfix"> </div>
			 </div>
		</div>
	</div>
</div>

<div class="clients">
	<div class="container">
		<div class="clients-main">
        <div class="col-md-6 clients-left">
          <h3>爸爸去哪儿介绍</h3>
          <h4>
这些年流行起来了一大波真人户外取景的综艺，比如《爸爸去哪儿》、《花儿与少年》、《中餐厅》...而这些综艺捧红的可不仅是明星，</h4>
          <p >即将开播的《爸爸去哪儿 第六季》此次选择了近年超火的稻城亚丁，近日不少小伙伴纷纷晒出偶遇照...每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</p>
           <div class="client-btn">
           	  <a href="#">爸爸去哪儿</a>
           </div>
        </div>
        <div class="col-md-6 clients-right">
          <h3>爸爸去哪儿介绍</h3>
          <h4>这些年流行起来了一大波真人户外取景的综艺，比如《爸爸去哪儿》、《花儿与少年》、《中餐厅》...而这些综艺捧红的可不仅是明星，</h4>
          <p >即将开播的《爸爸去哪儿 第六季》此次选择了近年超火的稻城亚丁，近日不少小伙伴纷纷晒出偶遇照...每期五位明星爸爸跟子女48小时的乡村体验，爸爸单独肩负起照顾孩子饮食起居的责任，</p>
           	<div class="client-btn">
           	  <a href="#">爸爸去哪儿</a>
           </div>
           </div>
        </div>
    </div>
</div>

		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-bottom a').Chocolat();
		});
		</script>

<div class="gallery" id="gallery">
	<div class="container">
		<div class="gallery-main">
			<h3>爸爸去哪儿视频集</h3>
			<div class="gallery-bottom">
				<div class="gallery-1">
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/sb.jpg" rel="title">
							<img class="img-responsive" src="images/sb.jpg" alt="">
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

		 </div>
	</div>
</div>

<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<h3>留言板</h3>
			<div class="contact-right">
			  <form>
				<input type="text" value="你的名字" class="name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '你的名字';}">
				<input type="text" value="你的邮件"  onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = '你的邮件';}">
				<textarea onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '留言;}">留言</textarea>
			   	<input type="submit" value="提交">
			 </form>
		   </div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>

<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-5 footer-left">
	            <p>Copyright 2006-2017 mgtv.com Corporation,All Rights Reserved湖南快乐阳光互动娱乐传媒有限公司 版权所有信息网络传播视听节目许可证号：1805107   互联网新闻信息服务许可证号：4312006005</a></p>
			</div>
			
		  <div class="clearfix"> </div>
		</div>
	</div>
	<script type="text/javascript">
										$(document).ready(function() {
											
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--footer end here-->
</body>
</html>