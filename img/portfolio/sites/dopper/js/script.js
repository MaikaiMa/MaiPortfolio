$(document).ready(function(){
	//--------------
	//	!Global		
	//--------------
	
	var body = $('html, body');
	var scrollSpeed = 1500;
	
	//--------------
	//	!Menu transformation & Back to top		
	//--------------
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.backTop').addClass('show');
			$('.mainMenuWrapper').addClass('smallHeader');
		} else {
			$('.backTop').removeClass('show');
			$('.mainMenuWrapper').removeClass('smallHeader');
		}
	});
	
	$('.backTop').click(function(){
		body.animate({
			scrollTop : 0
			},
			scrollSpeed
		);
		return false;
	});
	
	//--------------
	//	!Menu		
	//--------------
	
	$('.page1 a').click(function(){
		event.preventDefault();
		
		body.stop().animate({
			scrollTop: $('.page.home').offset().top
			},
			scrollSpeed,
			'swing'
		);
	});
	
	$('.page2 a').click(function(){
		event.preventDefault();
		
		body.stop().animate({
			scrollTop: $('.page.about').offset().top
			},
			scrollSpeed,
			'swing'
		);
	});
	
	$('.page3 a').stop().click(function(){
		event.preventDefault();
		
		body.animate({
			scrollTop: $('.page.environment').offset().top
			},
			scrollSpeed,
			'swing'
		);
	});
	
	$('.page4 a').stop().stop().click(function(){
		event.preventDefault();
		
		body.animate({
			scrollTop: $('.page.design').offset().top
			},
			scrollSpeed,
			'swing'
		);
	});
	
	$('.page5 a').stop().stop().click(function(){
		event.preventDefault();
		
		body.animate({
			scrollTop: $('.page.team').offset().top
			},
			scrollSpeed,
			'swing'
		);
	});
	
	$('.page6 a').stop().stop().click(function(){
		event.preventDefault();
		
		body.animate({
			scrollTop: $('.page.id').offset().top
			},
			scrollSpeed,
			'swing'
		);
	});
	
	//--------------
	//	!Slider		
	//--------------
	
	$('ul.homeSlider').css({'margin-left' : '-100%'});
	$('ul.homeSlider li:last').before( $('ul.homeSlider li:first') );
	
	function slider(){
		setTimeout(function sliderAuto(){
			var itemWidth = $('ul.homeSlider').offsetParent().width();
			var leftMargin = parseInt( $('ul.homeSlider').css('margin-left') ) - itemWidth;
		
			$('ul.homeSlider').animate({'margin-left': leftMargin},{queue: false, duration: scrollSpeed, complete: function(){
					$('ul.homeSlider li:last').after( $('ul.homeSlider li:first') );
					$('ul.homeSlider').css({'margin-left' : '-100%'});
				}
			});
			
			slider();
		}, 10000);
	}
	
	slider();
	
	$('.arrow.arrowright').click(function(){
		if ($('ul.homeSlider').is(':animated')){
			return false;
		}
		
		var itemWidth = $('ul.homeSlider').offsetParent().width();
		var leftMargin = parseInt( $('ul.homeSlider').css('margin-left') ) - itemWidth;
	
		$('ul.homeSlider').animate({'margin-left': leftMargin},{queue: false, duration: scrollSpeed, complete: function(){
				$('ul.homeSlider li:last').after( $('ul.homeSlider li:first') );
				$('ul.homeSlider').css({'margin-left' : '-100%'});
			}
		});
	});
	
	$('.arrow.arrowleft').click(function(){
		if ($('ul.homeSlider').is(':animated')){
			return false;
		}
		
		var itemWidth = $('ul.homeSlider').offsetParent().width();
		var leftMargin = parseInt( $('ul.homeSlider').css('margin-left') ) + itemWidth;
	
		$('ul.homeSlider').animate({'margin-left': leftMargin},{queue: false, duration: scrollSpeed, complete: function(){
				$('ul.homeSlider li:first').before( $('ul.homeSlider li:last') );
				$('ul.homeSlider').css({'margin-left' : '-100%'});
			}
		});
	});
	
	//--------------
	//	!Sector Scrolling		
	//--------------
	
	var windowHeight = $( window ).height();
	var scrollAmount = 0;
	
	function MouseWheelHandler() {
		return function (e) {
			e = window.event || e;
			var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
			var scrollPos = $(document).scrollTop();
			
			// Prevent Scrolling
			if(body.is(':animated')){
				event.preventDefault();
			}
			
			// Scroll up
			else if (delta < 0) {
				scrollAmount = windowHeight;
				body.animate({
					scrollTop: (scrollPos + scrollAmount)
					},
					scrollSpeed
				);
			}
			
			// Scroll Down
			else if (delta > 0) {
				scrollAmount = windowHeight;
				body.animate({
					scrollTop: (scrollPos - scrollAmount)
					},
					scrollSpeed
				);
			}
			return false;
		};
	}
	
	if (document.addEventListener) {
		document.addEventListener("mousewheel", new MouseWheelHandler(), false);
		document.addEventListener("DOMMouseScroll", new MouseWheelHandler(), false);
	}
	else {
		document.attachEvent("onmousewheel", new MouseWheelHandler());
	}
	
	
	//--------------
	//	!Accordion		
	//--------------
	
	var accordion = $('.accordion');
	
	accordion.find('dd').hide();
	accordion.find('dt').on('click', function(){
		$(this).toggleClass('open').next('dd').slideToggle().siblings('dd:visible').slideUp().prev('dt').removeClass('open');
	});
	
	
	//--------------
	//	!Customizer		
	//--------------	
	
	var rotate = -180;
	
	var rotateButtons = $("#next").on("click", function(){
		rotate = rotate  -500;
		
		event.preventDefault();
		//$('.dopper').fadeTo(150,0.7).fadeTo(150,1).css('background-position',rotate + 'px -42px');
		//$('.dopperLogo').fadeTo(150,0.7).fadeTo(150,1).css('background-position',rotate + 'px -42px');
		$('.dopper').css('background-position',rotate + 'px -42px');
		$('.dopperLogo').css('background-position',rotate + 'px -42px');
	});
	
	$("#previous").on("click", function(){
		rotate = rotate + 500;
		
		event.preventDefault();
		//$('.dopper').fadeTo(150,0.7).fadeTo(150,1).css('background-position',rotate + 'px -42px');
		//$('.dopperLogo').fadeTo(150,0.7).fadeTo(150,1).css('background-position',rotate + 'px -42px');
		$('.dopper').css('background-position',rotate + 'px -42px');
		$('.dopperLogo').css('background-position',rotate + 'px -42px');
	});
	
	// Default
	$('.chosenOption').text(("Mat rood"),rotateButtons);
	
	// Glossy Colors
	$('.glossRed').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_gloss_red.png')");
		$('.chosenOption').text(("Glanzend rood"),rotateButtons);
	});
	
	$('.glossGreen').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_gloss_green.png')");
		$('.chosenOption').text(("Glanzend groen"),rotateButtons);
	});
	
	$('.glossOrange').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_gloss_orange.png')");
		$('.chosenOption').text(("Glanzend oranje"),rotateButtons);
	});
	
	$('.glossBlue').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_gloss_blue.png')");
		$('.chosenOption').text(("Glanzend blauw"),rotateButtons);
	});
	
	$('.glossWhite').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_gloss_white.png')");
		$('.chosenOption').text(("Glanzend wit"),rotateButtons);
	});
	
	// Matte Colors
	$('.red').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_red.png')");
		$('.chosenOption').text(("Mat rood"),rotateButtons);
	});
	
	$('.green').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_green.png')");
		$('.chosenOption').text(("Mat groen"),rotateButtons);
	});
	
	$('.orange').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_orange.png')");
		$('.chosenOption').text(("Mat oranje"),rotateButtons);
	});
	
	$('.blue').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_blue.png')");
		$('.chosenOption').text(("Mat blauw"),rotateButtons);
	});
	
	$('.white').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_white.png')");
		$('.chosenOption').text(("Mat wit"),rotateButtons);
	});
	
	// Metals
	$('.gold').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_gold.png')");
		$('.chosenOption').text(("24k Goud"),rotateButtons);
	});
	
	$('.bronze').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_bronze.png')");
		$('.chosenOption').text(("Brons"),rotateButtons);
	});
	
	$('.silver').on('click', function(){
		$('.dopper').css("background-image", "url('img/config/dopper_silver.png')");
		$('.chosenOption').text(("Zilver"),rotateButtons);
	});
	
	
	// Logo
	$('.imgUpload').on('click', function(){
		event.preventDefault();
		$('.dopperLogo').css('background-image', 'url("img/config/audi.png")');
	});
	
});