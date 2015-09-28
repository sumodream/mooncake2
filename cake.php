<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link type="text/css" rel="stylesheet" href="css/commonAnimations.css" />
	<title></title>
	<style>
		#percentWrap
		{
		    line-height: 20px;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    width: 40px;
		    margin-top: 48px;
		    margin-left: -20px;
		    text-align: center;
		}
		.background-img{
			width:100%;
			position:absolute;
			bottom:0;
			left:0;
			z-index: 1;
		}
		.zoom-page{
			width:810px;
			height:1316px;
			position:absolute;
			bottom:0;
			left:0;
			-webkit-transform-origin: 0% 100%;
			z-index: 2;
		}
		.black-cover{
			position: absolute;
			background-color:#000000;
			opacity: 0.9;
			width:100%;
			height:100%;
			top:0;
			left: 0;
			z-index: 9999;
		}
		.cake{
			width:328px;
			height:326px;
			position:absolute;
			left:50%;
			margin-left:-164px;
			top:550px;
			background-image: url('imgB/B1_1.png');
			z-index:1;
		}
		.cake-0{
			background-position-y: 0px;
		}
		.cake-1{
			background-position-y: 0px;
		}
		.cake-2{
			background-position-y: -326px;
		}
		.cake-3{
			background-position-y: -652px;
		}
		.cake-4{
			background-position-y: -978px;
		}
		.cake-5{
			background-position-y: -1304px;
		}
		.cake-box{
			width:628px;
			height:528px;
			position: absolute;
			top: 460px;
			left:98px;
			z-index:2;
			background-image: url('imgB/B1_3.png');
		}
		#btn11{
			width:628px;
			height:528px;
			position: absolute;
			top: 525px;
			left:98px;
			z-index:999;
		}
		.b-word{
			width:494px;
			height: 148px;
			position: absolute;
			background-image:url('imgB/B1_2.png');
			bottom:200px;
			right:40px;
			z-index: 3;
		}
		.b-word-1{
			background-position-y: 0;
		}
		.b-word-2{
			background-position-y: -148px;
		}
		.b-word-3{
			background-position-y: -296px;
		}
		#btn12{
			position: absolute;
			z-index: 999;
			width: 810px;
			height:200px;
			bottom:0;
			left:0;
		}
		.pt-page-moveToTopFade {
			-webkit-animation: moveToTopFade .7s ease both;
			animation: moveToTopFade .7s ease both;
		}
		
		@-webkit-keyframes moveToTopFade {
			from {
			}
		
			to {
				opacity: 0;
				-webkit-transform: translateY(-100%);
			}
		}
		
		@keyframes moveToTopFade {
			from {
			}
		
			to {
				opacity: 0;
				-webkit-transform: translateY(-100%);
				transform: translateY(-100%);
			}
		}
		.pt-page-up {
			-webkit-animation: pageUp .7s ease both;
			animation: pageUp .7s ease both;
		}
		
		@-webkit-keyframes pageUp {
			from {
				opacity: 0;
			}
		}
		
		@keyframes pageUp {
			from {
				opacity: 0;
			}
		}
		
		.damage{
			width:102px;
			height:66px;
			position: absolute;
			top: 317px;
			right:220px;
			background-image: url('imgB/B2_1.png');
			z-index: 2;
		}
		.damage-0{
			background-position-y: 0px;
		}
		.damage-1{
			background-position-y: -66px;
		}
		.damage-2{
			background-position-y: -132px;
		}
		.damage-3{
			background-position-y: -198px;
		}
		.damage-4{
			background-position-y: -264px;
		}
		.damage-5{
			background-position-y: -330px;
		}
		.b-gif{
			width: 250px;
			height: 250px;
			position: absolute;
			top:490px;
			right: 80px;
		}
		.b-gif-1{
			background-image: url('imgB/b1.gif');
		}
		.b-gif-2{
			background-image: url('imgB/b2.gif');
		}
		.b-gif-3{
			background-image: url('imgB/b3.gif');
		}
		.b-gif-4{
			background-image: url('imgB/b4.gif');
		}
		.b-gif-5{
			background-image: url('imgB/b5.gif');
		}
		.oh-yes{
			width:348px;
			height:115px;
			top:573px;
			position: absolute;
			left: 60px;
			background-image: url('imgB/B2_4.png');
		}
		.oh-no{
			background-image: url('imgB/B2_3.png');
		}
		
	</style>
	
	
</head>
<body style="overflow: hidden">
	<!-- 预加载 -->
	<div id="loading" style="background-color:#f7f5ea;font-size: 20px;color: #4c78a7;font-family: '黑体'; ">
		<div style="width: 128px;height: 128px;left: 50%;margin-left: -64px;top: 50%;position: absolute;margin-top: -94px;">
			<div id="loadingCover2" style="width: 128px;height: 0px;background-image:url('img/loading_img.png');background-size:128px 128px;position: absolute;top:0;left:0;z-index: 8;"></div>
			<div style="width: 128px;height: 128px;background-image:url('img/loading_cover.png');background-size:128px 128px;position: absolute;top:0;left:0;"></div>
		</div>
		<div id="percentWrap" >0%</div>
	</div>
	<!-- 预加载  end -->
	<!-- 手机竖屏提醒 -->
	<div id="orientLayer" class="mod-orient-layer">
		<div class="mod-orient-layer__content"> <i class="icon-wx mod-orient-layer__icon-orient"></i>
			<div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
		</div>
	</div>
	<!-- 手机竖屏提醒  end-->
	<!-- 页面内容-->
	<div id="pageWrap">
		<div class="page page-1-1 page-current">
			<img class="background-img" src="imgB/B1.jpg"/>
			<div class="zoom-page">
				<div class="cake"></div>
				<div class="cake-box"></div>
				<div id="btn11"></div>
				
				<div id="stage1" class="" style="z-index: 3;position: absolute;width: 810px;height: 1316px;left: 0;top: 0;">
					<img style="width: 810px;height: 1036px;position: absolute;bottom: 60px;left: 0;" src="imgB/B1_5.png"/>
				</div>
				<div id="stage2" class="hide" style="z-index: 3;position: absolute;width: 810px;height: 1316px;left: 0;top: 0;">
					<img style="width: 810px;height: 1316px;z-index: 1;position: absolute;left: 0;top: 0;" src="imgB/B1_6.png" />
					<div class="p3-star" style="z-index: 2;bottom: 787px;"></div>
					
					<div class="p3-item" style="left: 60px;top: 320px;"></div>
					<div class="p3-item" style="left: 160px;top: 320px;"></div>
					<div class="p3-item" style="left: 260px;top: 320px;"></div>
					<div class="p3-item" style="left: 360px;top: 320px;"></div>
					<div class="p3-item" style="left: 460px;top: 320px;"></div>
					<div class="b-word"></div>
					<div id="btn12"></div>
				</div>
			</div>
		</div>
		<div class="page page-2-1 hide">
			<img class="background-img" src="imgB/B2.jpg"/>
			<div class="zoom-page">
				<div class="damage"></div>
				<img id="btn21" style="width: 582px;height: 138px;position: absolute;bottom: 50px;left: 50%;margin-left: -291px;" src="imgB/B2_2.png" />
				<div class="b-gif"></div>
				<div class="oh-yes"></div>
				<img style="width: 218px;height: 218px;position: absolute;right: 45px;bottom: 254px;" src="imgB/QRcode.jpg" />
			</div>
		</div>
		<!-- 分享页 -->
	</div>
<!-- 页面内容  end-->
<!-- 统计访问量-->
	<audio id="music1" src="imgB/music1.mp3" style="display:none;"></audio>
	<audio id="music2" src="imgB/music2.mp3" style="display:none;"></audio>
	<audio id="soundYes" src="imgB/yes.mp3" style="display:none;"></audio>
	<audio id="soundNo" src="imgB/no.mp3" style="display:none;"></audio>

	<div style="display:none">
		<script src="http://s95.cnzz.com/z_stat.php?id=1256440423&web_id=1256440423" language="JavaScript"></script>
	</div>

	<script>
			var _czc = _czc || [];
			_czc.push(["_setAccount", "1256440423"]);
	</script>

</body>
<script src="js/zepto.min.js"></script>
<script src="js/pxloader-all.min.js"></script>
<script src="js/init2.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxcaf39b453c29c206", "8b21db2889cc803ad8ef09e09176b599");
$signPackage = $jssdk->GetSignPackage();
?>
<script>
	wx.config({
			debug: false,
			appId: '<?php echo $signPackage["appId"];?>',
			timestamp: <?php echo $signPackage["timestamp"];?>,
			nonceStr: '<?php echo $signPackage["nonceStr"];?>',
			signature: '<?php echo $signPackage["signature"];?>',
			jsApiList: [
			"onMenuShareTimeline",
			"onMenuShareAppMessage"
			]
		});
		wx.ready(function() {
			wx.hideOptionMenu();
		});
	
</script>
<script>
	var goodScore = 0;
	var badScore = 0;
	var stuff = '<?php echo $_GET["stuff"];?>' 
	var song = '<?php echo $_GET["song"];?>'
	var word = '<?php echo $_GET["word"];?>' 
	

		$(document).ready(function() {
			var loader = new PxLoader();
			var fileList = [
					"imgB/B1_1.png",
					"imgB/B1_2.png",
					"imgB/B1_3.png",
					"imgB/B1_4.png",
					"imgB/B1_5.png",
					"imgB/B1_6.png",
					"imgB/b1.gif",
					"imgB/B1.jpg",
					"imgB/B2_1.png",
					"imgB/B2_2.png",
					"imgB/B2_3.png",
					"imgB/B2_4.png",
					"imgB/b2.gif",
					"imgB/B2.jpg",
					"imgB/b3.gif",
					"imgB/b4.gif",
					"imgB/b5.gif",
					"imgB/music1.mp3",
					"imgB/music2.mp3",
					"imgB/no.mp3",
					"imgB/yes.mp3",
					"img/P3_2.png",
					"img/P3_1.png",
					"imgB/QRcode.jpg"
				];
			for (var i = 0; i < fileList.length; i++) {
				var pxImage = fileList[i];
				pxImage.imageNumber = i + 1;
				loader.addImage(pxImage);
			}
			loader.addCompletionListener(function() {
				$("#loading").remove();
				$("#pageWrap").css("display", "block");
			});
			loader.addProgressListener(function(e) {
				var percent = Math.round((e.completedCount / e.totalCount) * 100);
				$("#percentWrap").html(percent + "%");
				$("#loadingCover2").css("height",128-128*(e.completedCount/e.totalCount)+"px");
			});
			loader.start();
		});
</script>
</html>