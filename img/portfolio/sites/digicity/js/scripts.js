$(function() {

	// Menu dropdown
	$('html').click(function(e) {
		var target = $( e.target );
		if( target.is( ".submenuinner" ) || target.is( ".submenuinner li" ) || target.is( ".submenuinner li a" ) || target.is('#header-nav-sub>ul>li>a')){
			
		}else{
			$('.showBlock').removeClass("showBlock");
		}
	});
	
	$('#header-nav-sub>ul>li>a').click(function(e){
		e.preventDefault();
		$('#header-nav-sub>ul>li').not(this).find('.showBlock').removeClass("showBlock");
		$(this).parent().find('.submenu').toggleClass("showBlock");
	});

	// Slide menu
	$('#menu-btn').click(function(){
		$('#menu-wrapper').toggleClass("menu-push");
		$('#content-wrapper').toggleClass("content-push");
	});

	if($('.link-slider').length !== 0){
		$(".link-slider").smoothDivScroll({
			autoScrollingMode: "always",
			autoScrollingDirection: "endlessLoopLeft",
			autoScrollingStep: 1,
			autoScrollingInterval: 50,
			mousewheelScrolling: "horizontal",
			hotSpotScrolling: false,
			manualContinuousScrolling: true,
			touchScrolling: true
		});
	}

	// Masonry tiles
	var $container = $('#getMasonry');

	// initialize
	var isActive = true;


	if ($("#masonryEnable").css("float") !== "left" ){
		$container.masonry({
			itemSelector: '.masonryblock',
		});
		isActive = true;
	}else{
		isActive = false;
	}


	// Category title Affix
	if($('#search-bar').length !== 0){
		var affixOffset = $('#search-bar').offset().top;

		$(window).resize(function(){
			if ($("#masonryEnable").css("float") !== "left" ){
				$container.masonry({
					itemSelector: '.masonryblock',
				});
				isActive = true;
			}else{
				if( isActive ){
					$container.masonry('destroy');
					isActive = false;
				}
			}
			affixOffset = $('#search-bar').offset().top;
		});
		 
		$('#categorie-title').affix({
			offset: {
				top: affixOffset
			}
		});
	}
	
		
	// Type Ahead location image
	$(function() {
		var availableTags = [
		"Amasterdam",
		"Arnhem",
		"Breda",
		"Cuijk",
		"Delft",
		"Den Bosch",
		"Den Haag",
		"Druten",
		"Eindhoven",
		"Ewijk",
		"Groesbeek",
		"Groningen",
		"Haarlem",
		"Hoogezand-Sappemeer",
		"Leeuwarden",
		"Malden",
		"Nijmegen",
		"Putten",
		"Ridderkerk",
		"Schijndel",
		"Wijchen",
		"Zwolle"
	];
	$( ".citySelect" ).autocomplete({
		source: availableTags,
		messages: {
			noResults: '',
			results: function() {}
		}
		});
	});
	
	// Typewriter
	if($('#citySelect').length !==0){
		$("#citySelect").typed({
			strings: ["Welkom op DiGiCity", "Typ hier een stadsnaam"," "],
			typeSpeed: 50,
			backDelay: 2000,
			callback: function(){
				$("#citySelect").focus();
			}
		});
	}
});