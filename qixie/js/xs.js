jQuery(document).ready(function($) {
	var example = $('.sf-menu').superfish({
            //add options here if required
            delay:       100,
            speed:       'fast',
            autoArrows:  false  
        }); 
	$('.header-menu-con').slicknav({
		prependTo: '#slick-mobile-menu',
		allowParentLinks: true,
		label: '导航'
	}); 
	$('.single-pro-list li:first').addClass('on');
	$('.single-pro-list li').mouseover(function(){
		var liindex = $('.single-pro-list li').index(this);
		$(this).addClass('on').siblings().removeClass('on');
		$('.pro-wrap div.pro-item').eq(liindex).fadeIn(150).siblings('div.pro-item').hide();
	});
	
	$('#slider .owl-carousel').owlCarousel({
		loop:true,
		items: 1,
		autoplay:true,
		autoplayTimeout:5000,
		autoplayHoverPause:true,
	})
	$('.case-con .owl-carousel').owlCarousel({
		loop:true,
		items: 4,
		autoplay:true,
		autoplayTimeout:8000,
		autoplayHoverPause:true,
		margin:20,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:2,

			},
			1000:{
				items:4,

				loop:false
			}
		}
	})

	$('.entry-content img').parent("a").addClass("fancybox").attr("data-fancybox-group","gallery");
	$('.fancybox').fancybox();	

	$(function(){
		$(window).scroll(function(){
			if($(window).scrollTop()>120){
				$(".side-top .gotop").fadeIn();
			}
			else{
				$(".side-top .gotop").fadeOut();
			}
		});
		$(".side-top .gotop").click(function(){
			$('html,body').animate({'scrollTop':0},500);
		});
	});
	function tabs(tabTit,on,tabCon,event){
		$(tabTit).children().on(event,function(){
			$(this).addClass(on).siblings().removeClass(on);
			var index = $(tabTit).children().index(this);
			$(tabCon).children().eq(index).show().siblings().hide();
		});
	};
	tabs(".pro-cat .filters","on",".pro-list",'click'); 
	tabs(".news-cat .filters","on",".news-list",'click');
	$(".btno").click(function(){
		
		$(".btnc").show();
		$(".btno").hide();
		$(".box-right").show();
	});
	
	$(".btnc").click(function(){
		
		$(".btnc").hide();
		$(".btno").show();
		$(".box-right").hide();
	});
//设置新闻中心的on
$('.news-cat .filters li:first').addClass('on');
$('.news-list .news-con:first').addClass('on');

});