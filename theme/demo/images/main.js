//订阅

$(function(){
	$('#subscribe').ajaxForm({
		beforeSubmit: checkForm,
		success: complete,
		dataType: 'json',//html(默认),xml, script, json...接受服务端返回的类型
		url: '/subscribe.php?act=subscribe',//默认是form的action， 如果申明，则会覆盖  
		type: 'post',               //默认是form的method（get or post），如果申明，则会覆盖  
		//clearForm: true,          //成功提交后清除所有表单元素的值
		//resetForm: true,          //成功提交后重置所有表单元素的值  
		timeout:30000//限制请求的时间当请求大于30秒后跳出请求
	});
	function checkForm(){
             var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
             if(!myreg.test($("#email").val()))
             {
				layer.msg('Please enter your email address.', function(index){
				layer.close(index);
				$('#email').focus(); 
				});
                  return false;
             }
	}	
	function complete(data){
		if(data.status==1){
				layer.msg('Congratulations, Request successful.',{icon: 6}, function(index){
				layer.close(index);
				});

		}else{
				layer.msg('The email address you entered is linked to an existing account. Please register with a different one.', function(index){
				layer.close(index);
				$('#email').focus(); 
				});
			return false;	
		}
	}

        var sangar = $('#sangar-example').sangarSlider({
			        timer :  false, // true or false to have the timer
			        pagination : 'content-horizontal', // bullet, content, none
			        paginationContent : ["images/thumb/thumb-slide-1.jpg", "images/thumb/thumb-slide-2.jpg", "images/thumb/thumb-slide-3.jpg", "images/thumb/thumb-slide-4.jpg", "images/thumb/thumb-slide-5.jpg"], // can be text, image, or something			        
			        paginationContentType : 'image', // text, image
			        paginationContentWidth : 120, // pagination content width in pixel
			        paginationImageHeight : 90, // pagination image height
			        width : 850, // slideshow width
        			height : 500, // slideshow height
			        fixedHeight: true,
			        scaleSlide : true // slider will scale to the container size
				});
        

});

//The email address you entered is linked to an existing account. Please register with a different one.

//Congratulations, Request successful.


/*侧边栏显示切换*/
$(".navigator .menu").on("click",function(){
	$(".module-container").toggleClass("show");
	});
$(".mask").on("click",function(){
	$(".module-container").removeClass("show");
	});
	
/*底部显示切换*/
$(".links .iconfont").on("click",function(){
	console.log();
	$(this).parent().parent().toggleClass("show");
	});


/*轮播图代码*/
//var picOuter=$(".picbox");
//var picInner=$(".picbox a");
//var ContrlBox=$(".Carousel-point li");
//
//var nowPid=0;
//var maxPid=picInner.length;
//var picWidth=$(window).width();
//var removeSecond=200;
//var picTimeInt;
//$(window).on("resize",function(){
//	clearInterval(picTimeInt);
//	setParam();
//	});
//$(window).on("load",function(){setParam();});
//
//function setParam(){
//	nowPid=0;
//	picWidth=$(window).width();
//	picOuter.width(picWidth*(picInner.length)+"px");
//	picInner.width(picWidth+"px");
//	for(var i=0;i<picInner.length;i++){
//		$(picInner[i]).css("left",(i*picWidth)+"px");
//		}
//	picTimeInt=setInterval(function(){nextPic();},removeSecond);
//	}
//$(".Carousel,.picbox,.Carousel-point,.Carousel-ctrl").on({
//	mouseover:function(){
//		clearInterval(picTimeInt);
//		}
//	});
//$(".Carousel").on({mouseout:function(){
//		picTimeInt=setInterval(function(){nextPic();},removeSecond);
//		}});	
//for(var i=0;i<ContrlBox.length;i++){
//	(function(n){
//		$(ContrlBox[n]).on("click",function(){
//			gotoPic(n);
//			});
//		}
//		)(i);
//	}
//function gotoPic(nowid){
//	clearInterval(picTimeInt);
//	nowPid=nowid;
//	picOuter.animate({"left":(nowPid)*picWidth*-1+"px"},removeSecond);
//	QsetCtlClass();
//	}
//	
//$(".next").on("click",function(){QnextPic();});
//function QnextPic(){	//后一张
//	clearInterval(picTimeInt);
//	if(nowPid==maxPid-1){
//		nowPid=0;	//向右去最后一张
//		picOuter.animate({"left":"0px"},removeSecond);
//		}
//	else{
//		picOuter.animate({"left":(nowPid+1)*picWidth*-1+"px"},removeSecond);
//		nowPid++;
//		}
//	QsetCtlClass();
//	}
//function nextPic(){	//后一张
//	clearInterval(picTimeInt);
//	if(nowPid==maxPid-1){
//		nowPid=0;	//向右去最后一张
//		picOuter.animate({"left":"0px"},removeSecond);
//		}
//	else{
//		picOuter.animate({"left":(nowPid+1)*picWidth*-1+"px"},removeSecond);
//		nowPid++;
//		}
//	setCtlClass();
//	}
//$(".prev").on("click",function(){QprePic();});
//function QprePic(){	//前一张
//	clearInterval(picTimeInt);
//	if(nowPid==0){
//		nowPid=maxPid-1;	//向右去最后一张
//		picOuter.animate({"left":(maxPid-1)*picWidth*-1+"px"},removeSecond);
//		}
//	else{
//		picOuter.animate({"left":(nowPid-1)*picWidth*-1+"px"},removeSecond);
//		nowPid--;
//		}
//	QsetCtlClass();		
//	}
//	
//function setCtlClass(){
//	setTimeout(
//		function(){
//			ContrlBox.removeClass("cur");
//			$(ContrlBox[nowPid]).addClass("cur");
//			},
//		5000);
//	picTimeInt=setInterval(function(){nextPic();},5000);		
//	}	
//function QsetCtlClass(){
//	ContrlBox.removeClass("cur");
//	$(ContrlBox[nowPid]).addClass("cur");
//	}

//回到顶部
$(".backTop").on("click",function(){document.documentElement.scrollTop = document.body.scrollTop =0;})





/**
 +----------------------------------------------------------
 * 更新购物车数量
 +----------------------------------------------------------
 */
function changeNumberp(calculate) {
    var item_id = document.getElementById("number");
    if (calculate == 'add') {
        item_id.value++;
    } else {
        if (item_id.value > 1) {
            item_id.value--;
        }
    }

    if (item_id.value == 0) {
        document.getElementById("number").value = 1;
    }
}


//在触屏上为按钮实现激活效果
//$(function () {
//   $(".items a").attr('ontouchstart', 'hover(this)');
////hover效果
//   $(".items a").attr('ontouchend', 'mouseout(this)');
////秒除hover
//})
// 
//function mouseout(obj) {
//var className ="hover";
//var _ecname = obj.className;
//if (_ecname.length == 0) return;
//if (_ecname == className) {
// obj.className ="";return;
//}
//if (_ecname.match(new RegExp("(^|\s)"+ className +"(\s|$)")))
// obj.className = _ecname.replace((new RegExp("(^|\s)"+ className +"(\s|$)")),"");
// 
//}function hover(obj) {
//if (!obj) return;
//var className ="hover"
//  var _ecname = obj.className;
//if (_ecname.length == 0) {
// obj.className = className;return;
//}
//if (_ecname == className || _ecname.match(new RegExp("(^|\s)"+ className +"(\s|$)")))
//   return;
//obj.className = _ecname +""+ className;
//} 