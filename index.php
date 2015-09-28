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
			<img class="background-img" src="img/P1.jpg"/>
			<div class="zoom-page">
				<img id="btn11" class="pt-page-shake" src="img/P1_1.png" style="width:378px;height:148px;position: absolute;bottom: 110px;left: 50%;margin-left: -189px;" />
			</div>
		</div>
		<div class="page page-2-1 hide">
			<img class="background-img" src="img/P2.jpg"/>
			<div class="zoom-page">
				<div class="p2-item p2-item-0 item-good" itemId="0" style="top:220px;"></div>
				<div class="p2-item p2-item-1 item-good" itemId="1" style="top:360px;"></div>
				<div class="p2-item p2-item-2 item-good" itemId="2" style="top:500px;"></div>
				<div class="p2-item p2-item-3 item-good" itemId="3" style="top:640px;"></div>
				<div class="p2-item p2-item-4 item-good" itemId="4" style="top:780px;"></div>
				<div class="p2-item p2-item-5 item-bad" itemId="5" style="top:220px;"></div>
				<div class="p2-item p2-item-6 item-bad" itemId="6" style="top:360px;"></div>
				<div class="p2-item p2-item-7 item-bad" itemId="7" style="top:500px;"></div>
				<div class="p2-item p2-item-8 item-bad" itemId="8" style="top:640px;"></div>
				<div class="p2-item p2-item-9 item-bad" itemId="9" style="top:780px;"></div>
				
				
				<div class="blood-good hide" style="left: 122px;"></div>
				<div class="blood-good hide" style="left: 165px;"></div>
				<div class="blood-good hide" style="left: 208px;"></div>
				<div class="blood-good hide" style="left: 251px;"></div>
				<div class="blood-good hide" style="left: 294px;"></div>
				
				<div class="blood-bad hide" style="right: 122px;"></div>
				<div class="blood-bad hide" style="right: 165px;"></div>
				<div class="blood-bad hide" style="right: 208px;"></div>
				<div class="blood-bad hide" style="right: 251px;"></div>
				<div class="blood-bad hide" style="right: 294px;"></div>
				
				
				<div class="p2-good" style="background-position-y: 0;"></div>
				<div class="p2-good hide" style="background-position-y: -70px;"></div>
				<div class="p2-good hide" style="background-position-y: -140px;"></div>
				<div class="p2-good hide" style="background-position-y: -210px;"></div>
				<div class="p2-good hide" style="background-position-y: -280px;"></div>
				<div class="p2-good hide" style="background-position-y: -350px;"></div>
				
				<div class="p2-bad" style="background-position-y: 0;"></div>
				<div class="p2-bad hide" style="background-position-y: -70px;"></div>
				<div class="p2-bad hide" style="background-position-y: -140px;"></div>
				<div class="p2-bad hide" style="background-position-y: -210px;"></div>
				<div class="p2-bad hide" style="background-position-y: -280px;"></div>
				<div class="p2-bad hide" style="background-position-y: -350px;"></div>
				
				<div style="position: absolute;width: 200px;height: 200px;bottom: 180px;left:70px;background-image: url('img/P2_4.png');"></div>
				<div style="position: absolute;width: 200px;height: 200px;bottom: 180px;right:70px;background-image: url('img/P2_5.png');"></div>
				
				<div id="bc21" class="black-cover hide">
					<img style="position: absolute;bottom: 50%;width: 100%;left: 0;opacity: 1;"  src="img/P2_6.png"/>
				</div>				
				<div id="bc22" class="black-cover hide">
					<img style="position: absolute;bottom: 300px;width: 600px;height:600px;left: 105px;opacity: 1;"  src="img/box.gif"/>
				</div>				
				
				<img id="btn21" src="img/P2_7.png" style="width: 244px;height: 124px;position: absolute;bottom: 10px;left: 50%;margin-left: -122px;"/>
				
			</div>
		</div>
		<!-- 形成月饼页 -->
		<div class="page page-3-1 hide">
			<img class="background-img" src="img/P3.jpg"/>
			<div class="zoom-page">
				<div class="p3-item" style="left: 140px;"></div>
				<div class="p3-item" style="left: 250px;"></div>
				<div class="p3-item" style="left: 360px;"></div>
				<div class="p3-item" style="left: 470px;"></div>
				<div class="p3-item" style="left: 580px;"></div>
				
				<div class="p3-cake pt-page-shake ani hide"></div>
				<div class="p3-star"></div>
				<div class="p3-good"></div>
				<div class="p3-bad"></div>
				<div class="p3-text"></div>
				<div id="btn31" style="z-index: 999;width: 600px;left:50%;margin-left: -300px;bottom: 100px;height: 100px;position: absolute;"></div>
			</div>
		</div>
		<!-- 捎句话 送首歌 -->
		<div class="page page-4-1 hide">
			<img class="background-img" src="img/P4.jpg"/>
			<div class="zoom-page">
				<div style="z-index: 1;">
					<div class="choose-show choose-show-1 song-show " songId="1"></div>
					<div class="choose-show choose-show-2 song-show" songId="2"></div>
					
					
					<div class="choose-show choose-show-3 word-show " wordId="1"></div>
					<div class="choose-show choose-show-4 word-show" wordId="2"></div>
					<div class="choose-show choose-show-5 word-show" wordId="3"></div>
				</div>
				<div style="z-index: 2;">
					<div class="choose choose-song" cid="0" style="top: 455px;"></div>
					<div class="choose choose-song" cid="1" style="top: 540px;"></div>
					
					<div class="choose choose-word" cid="0" style="top: 810px;"></div>
					<div class="choose choose-word" cid="1" style="top: 905px;"></div>
					<div class="choose choose-word" cid="2" style="top: 1000px;"></div>
				</div>
				<div id="btn41" style="z-index: 999;width: 400px;right:0px;bottom: 0px;height: 200px;position: absolute;"></div>
				
			</div>
		</div>
		<!-- 分享页 -->
		<div class="page page-5-1 hide">
			<img class="background-img" src="img/P5.jpg"/>
			<div class="zoom-page">
				<div id="btn51" style="width: 300px;height: 100px;position: absolute;bottom: 153px;left: 79px;"></div>
				<div id="btn52" style="width: 300px;height: 100px;position: absolute;bottom: 153px;right: 79px;"></div>
				<div id="btn53" style="width: 700px;height: 120px;position: absolute;bottom: 20px;right: 41px;"></div>
				<div id="zz2" class="hide" style="position: absolute;top: 0;height: 1316px;width: 810px;left: 0;z-index: 999;background-image:  url('img/P5_1.jpg');">
					<div id="zzz2" style="position: absolute;width: 700px;height:250px;left: 50%;margin-left: -350px;bottom: 0;"></div>
					<img style="width: 360px;height: 360px;position: absolute;right: 59px;bottom: 282px;" src="img/QRcode.jpg"/>
				</div>
			</div>
			<div id="zz1" class="hide" style="position: absolute;top: 0;height: 100%;width: 100%;left: 0;z-index: 999;background-color: #4c4c4c;">
				<img style="width: 40%;position: absolute;top: 0;right: 0;z-index: 1;" src="img/P5_3.png" />
				<img style="width: 100%;position: absolute;bottom: 5%;right: 0;z-index: 2;" src="img/P5_2.png" />
			</div>
		</div>
	</div>
	<audio id="audio" loop="loop" src="img/sound.mp3" style="display:none;"></audio>
<!-- 页面内容  end-->
<!-- 统计访问量-->
	<div style="display:none">
		<script src="http://s95.cnzz.com/z_stat.php?id=1256439916&web_id=1256439916" language="JavaScript"></script>
	</div>

	<script>
			var _czc = _czc || [];
			_czc.push(["_setAccount", "1256439916"]);
	</script>

</body>
<script src="js/zepto.min.js"></script>
<script src="js/pxloader-all.min.js"></script>
<script src="js/init.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxcaf39b453c29c206", "8b21db2889cc803ad8ef09e09176b599");
$signPackage = $jssdk->GetSignPackage();
?>
<script>
	var wxTitle = "我想请你来我家做...";
	var wxLink = "http:\/\/h5.whaledream.com/whalemccooking1/index.php";
	var imgUrl = "http:\/\/h5.whaledream.com/whalemccooking1/icon.jpg";
	var wxDesc = "月饼";
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
			wx.showOptionMenu();
			wx.onMenuShareTimeline({
				title : wxTitle, // 分享标题
				link : wxLink, // 分享链接
				imgUrl : imgUrl, // 分享图标
				cancel : function() {
					// 用户取消分享后执行的回调函数
				}
			});
			wx.onMenuShareAppMessage({
				title : wxTitle, // 分享标题
				desc : wxDesc, // 分享描述
				link : wxLink, // 分享链接
				imgUrl : imgUrl, // 分享图标
				cancel : function() {
					// 用户取消分享后执行的回调函数
				}
			});
		});
	
</script>
<script>
		var audio = document.getElementById("audio");
		$(document).ready(function() {
			var loader = new PxLoader();
			var fileList = [
					"img/loading_cover.png",
					"img/loading_img.png",
					"img/sound.mp3",
					"img/box.gif",
					"icon.jpg",
					"icon1.jpg",
					"img/P1_1.png",
					"img/P1.jpg",
					"img/P2_1.png",
					"img/P2_2.png",
					"img/P2_3.png",
					"img/P2_4.png",
					"img/P2_5.png",
					"img/P2_6.png",
					"img/P2_7.png",
					"img/P2.jpg",
					"img/P3_1.png",
					"img/P3_2.png",
					"img/P3_3.png",
					"img/P3_4.png",
					"img/P3_5.png",
					"img/P3_6.png",
					"img/P3.jpg",
					"img/P4_1.png",
					"img/P4.jpg",
					"img/P5_1.jpg",
					"img/P5_2.png",
					"img/P5_3.png",
					"img/P5.jpg",
					"img/QRcode.jpg"
				];
			for (var i = 0; i < fileList.length; i++) {
				var pxImage = fileList[i];
				pxImage.imageNumber = i + 1;
				loader.addImage(pxImage);
			}
			loader.addCompletionListener(function() {
				$("#loading").remove();
				$("#pageWrap").css("display", "block");
				audio.play();
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