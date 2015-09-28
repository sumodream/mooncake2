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
	_page_count : 2,
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
			if(badScore>1){
				document.getElementById("soundNo").play();
			}else{
				document.getElementById("soundYes").play();
			}
			
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
	initData();
	initBtn();
});

function initData(){
	if(stuff.length !=10)stuff="0000011111";
	if(song.length !=1)song="1";
	if(word.length !=1)word="1";
	
	var _s = 0;
	for(var i = 0;i<10;i++){
		if(i<5){
			if(stuff[i]=="1"){
				goodScore++;
				$(".p3-item").eq(_s).addClass("p3-item-"+i);
				_s++;
			}
		}else{
			if(stuff[i]=="1"){
				badScore++;
				$(".p3-item").eq(_s).addClass("p3-item-"+i);
				_s++;
			}
		}	
	}
	
	$(".b-word").addClass("b-word-"+word);
	
	$(".p3-star").addClass("p3-star-"+badScore);
	$(".damage").addClass("damage-"+badScore);
	$(".cake").addClass("cake-"+badScore);
	
	if(badScore>0){
		$(".b-gif").addClass("b-gif-"+badScore);
	}else{
		$(".b-gif").addClass("b-gif-1");
	}
	if(badScore>1){
		$(".oh-yes").addClass("oh-no");
	}
	
	
}

function initBtn(){
	$("#btn11").click(function(){
		$("#stage1").remove();
		$("#btn11").remove();
		$(".cake-box").addClass("pt-page-moveToTopFade");
		
		if(song=="1"){
			document.getElementById("music1").play();
		}else{
			document.getElementById("music2").play();
		}
		_czc.push(['_trackEvent', 'PAGE1', '打开', '礼盒','1','']);
		
		pageTimeout = setTimeout(function(){
			$("#stage2").removeClass("hide");
			$(".cake-box").remove();
		},700);
	});
	
	$("#btn12").click(function(){
		_czc.push(['_trackEvent', 'PAGE1', '跳转', '下一页','1','']);
		pageAnimations.pageUp();
	});
	
	$("#btn21").click(function(){
		_czc.push(['_trackEvent', 'PAGE2', '跳转', '制作页面','1','']);
		var timelast = setTimeout(function(){
			window.location.href='http://h5.whaledream.com/whalemccooking1/';
		},100);
	});
};
