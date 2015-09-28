//定义当前页面和最后页面
var now = {row : 1,col : 1};
var last = {row : 0,col : 0};
var pageTimeout = null;
//定义常量 上右下左消失
const TOWORDS = {
	UP : 1,
	RIGHT : 2,
	DOWN : 3,
	LEFT : 4,
	FADEOUT:5,
};
//初始动画
var isAnimating = false;
//定义动画页面
var pageAnimations = {
	//页面计数 4页
	_page_count : 5,
	//页面动画时间600毫秒
	_animation_time : 600,
	//动画方法
	doAnimate : function(towards) {
		//定义前一个页面和当前页面类
		var lastPage = ".page-" + last.row + "-" + last.col;
		var nowPage = ".page-" + now.row + "-" + now.col;
		//做判断 行驶的方向
		switch(towards) {
		case TOWORDS.UP:
			outClass = 'pt-page-moveToTop';
			inClass = 'pt-page-moveFromBottom';
			break;
		case TOWORDS.RIGHT:
			outClass = 'pt-page-moveToRight';
			inClass = 'pt-page-moveFromLeft';
			break;
		case TOWORDS.DOWN:
			outClass = 'pt-page-moveToBottom';
			inClass = 'pt-page-moveFromTop';
			break;
		case TOWORDS.LEFT:
			outClass = 'pt-page-moveToLeft';
			inClass = 'pt-page-moveFromRight';
			break;
		case TOWORDS.FADEOUT:
			outClass = 'pt-page-scaleDown-slow';
			inClass = 'pt-page-scaleUp';
			break;
		case TOWORDS.NORMAL:
			outClass = 'pt-page-scaleDown-quick';
			inClass = 'pt-page-scaleUp';
			break;
		}
		//动画开始运行
		isAnimating = true;
		//当前页面动画隐藏
		$(nowPage).removeClass("hide");
		//前一个页面动画
		$(lastPage).addClass(outClass);
		//当前页面动画
		$(nowPage).addClass(inClass);
		//设定时间执行方法
		setTimeout(function() {
			$(lastPage).removeClass('page-current');
			$(lastPage).removeClass(outClass);
			$(lastPage).addClass("hide");
			$(nowPage).addClass('page-current');
			$(nowPage).removeClass(inClass);
			$(nowPage).find(".ani").removeClass("hide");
			isAnimating = false;
		}, this._animation_time);
	},
	pageUp : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.UP);
		}
	},
	pageLeft : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.LEFT);
		}
	},
	pageDown : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != 1) {
			now.row = last.row - 1;
			now.col = 1;
			this.doAnimate(TOWORDS.DOWN);
		}
	},
	pageRight : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.RIGHT);
		}
	},
	pageFadeOut : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.FADEOUT);
		}
	},
	pageFadeOutTwo : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 2;
			now.col = 1;
			this.doAnimate(TOWORDS.FADEOUT);
		}
	},
	pageNormal : function() {
		if (isAnimating)
			return;
		last.row = now.row;
		last.col = now.col;
		if (last.row != this._page_count) {
			now.row = last.row + 1;
			now.col = 1;
			this.doAnimate(TOWORDS.NORMAL);
		}
	}
};
function zoomResize(){
    var ratio = parseFloat(innerWidth / 810);
    $(".zoom-page").css("transform", "scale(" + ratio + "," + ratio + ")");
    $(".zoom-page").css("-webkit-transform", "scale(" + ratio + "," + ratio + ")");
}
$(window).resize(function(){
	zoomResize();
});
//under here is some page logic
$(document).ready(function() {
	zoomResize();	
	initBtn();
});

var goodScore = 0;
var badScore = 0;


function initBtn(){
	$("#btn11").click(function(){
		_czc.push(['_trackEvent', 'PAGE1', '点击', '下一页','1','']);
		pageAnimations.pageUp();
	});
	$(".p2-item").click(function(){
		if($(this).hasClass("item-selected")){
			$(this).removeClass("item-selected");
			if($(this).hasClass("item-good")){
				goodScore--;
			}else{
				badScore--;
			}
		}else{
			if($(".item-selected").length>=5)return;
			$(this).addClass("item-selected");
			if($(this).hasClass("item-good")){
				goodScore++;
			}else{
				badScore++;
			}
		}
		refreshP2();
	});
	
	//P2提交
	$("#btn21").click(function(){
		if($(".item-selected").length!=5){
			$("#bc21").removeClass("hide");
			return;
		}
		$("#bc22").removeClass("hide");
		pageTimeout = null;
		pageTimeout = setTimeout(function(){
			refreshP3();
			_czc.push(['_trackEvent', 'PAGE2', '点击', '下一页','2','']);
			pageAnimations.pageUp();
		},2000);
	});
	
	$("#bc21").click(function(){
		$(this).addClass("hide");
	});
	
	$("#btn31").click(function(){
		_czc.push(['_trackEvent', 'PAGE3', '点击', '下一页','3','']);
		pageAnimations.pageUp();
	});
	
	$(".choose-song").click(function(){
		$(".song-show").removeClass("selected-song");
		$(".song-show").eq(parseInt($(this).attr("cid"))).addClass("selected-song");
	});
	$(".choose-word").click(function(){
		$(".word-show").removeClass("selected-word");
		$(".word-show").eq(parseInt($(this).attr("cid"))).addClass("selected-word");
	});
	$("#btn41").click(function(){
		if($(".selected-song").length<1)return;
		if($(".selected-word").length<1)return;
		changeWxShare();
		_czc.push(['_trackEvent', 'PAGE4', '点击', '下一页','4','']);
		pageAnimations.pageUp();
	});
	//再来一次
	$("#btn51").click(function(){
		location.reload();	
	});
	//分享
	$("#btn52").click(function(){
		$("#zz1").removeClass("hide");
	});
	//大按钮
	$("#btn53").click(function(){
		_czc.push(['_trackEvent', 'PAGE5', '点击', '大按钮','5','']);
		$("#zz2").removeClass("hide");
	});
	$("#zz1").click(function(){
		$("#zz1").addClass("hide");
	});
	$("#zzz2").click(function(){
		$("#zz2").addClass("hide");
	});
		
}

function refreshP2(){
	//血槽
	$(".blood-good").addClass("hide");
	$(".blood-bad").addClass("hide");
	for(var i=0;i<goodScore;i++){
		$(".blood-good").eq(i).removeClass("hide");
	}
	for(var i=0;i<badScore;i++){
		$(".blood-bad").eq(i).removeClass("hide");
	}
	
	//字
	$(".p2-good").addClass("hide");
	$(".p2-bad").addClass("hide");
	$(".p2-good").eq(goodScore).removeClass("hide");
	$(".p2-bad").eq(badScore).removeClass("hide");
}

function refreshP3(){
	for(var i = 0;i<5;i++){
		$(".p3-item").eq(i).addClass("p3-item-"+$(".item-selected").eq(i).attr("itemId"));
	}
	var dscore = badScore-goodScore;
	if(dscore<0)dscore=0;
	$(".p3-cake").addClass("p3-cake-"+badScore);
	$(".p3-star").addClass("p3-star-"+badScore);
	$(".p3-good").addClass("p3-good-"+goodScore);
	$(".p3-bad").addClass("p3-bad-"+badScore);
	$(".p3-text").addClass("p3-text-"+badScore);
}

function changeWxShare(){
	var stuff = "";
	for(var i=0;i<10;i++){
		if($(".p2-item").eq(i).hasClass("item-selected")){
			stuff = stuff +"1";
		}else{
			stuff = stuff +"0";
		}
	}
	var song = 0;
	var song = parseInt($(".selected-song").eq(0).attr("songId"));
	var word = 0;
	var word = parseInt($(".selected-word").eq(0).attr("wordId"));
	
	
	wxTitle = "爱妃，这是朕为你打下的月饼啊！";
	wxLink = "http:\/\/h5.whaledream.com/whalemccooking1/cake.php?stuff="+stuff+"&song="+song+"&word="+word;
	imgUrl = "http:\/\/h5.whaledream.com/whalemccooking1/icon1.jpg";
	wxDesc = "吉时已到，打开发“馅”";
	
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
	
}
