jQuery(function ($) {
	$('.search-box').focus(function(){
		$(this).parent().find('.search-box-label').hide();
	}).blur(function(){
		$(this).parent().find('.search-box-label').show();
	});

	setTimeout(function(){
		
		$('.center-column').show();	
	}, 500)
	

	/*
	 * Main menu hover animation
	 * ==========================================================*/
	 $('.main-nav').hover(function(){

	 });
	


	/*
	 * Navigation
	 * ==========================================================*/
	 /*
$('.nav-num').jRandomText({
	 	randomRange : "0123456789".split('')
	 });
*/ // comment by orange

	 $('.nav-department a').hover(function(){
	 	$('.nav-department a').removeClass('current');
	 	$(this).addClass('current');
	 });

	 /*
	 function showSubNavigation() {
	 	if ($(this).find('.nav-submenu').size() > 0) {
	 		$(this).find('.nav-submenu').stop(false, false).animate({'width' : '254px'}, 400);
		 	$('.center-column').stop(false, false).animate({'left' : '254px'}, 400);
		 	$('.row .column-left').stop(false, false).animate({'left' : '546px'}, 500);
		 	if ($(this).attr('subnav') == 'dir4-our-service') $('.right-solid-bar').stop(false, false).animate({'width' : '0', 'right' : '18px'}, 400);
	 	} else {

	 	}
	 }

	 function hideSubNavigation() {
	 	
	 	$('.nav-submenu').stop(false, false).animate({'width' : '0'}, 400);
	 	$('.center-column').stop(false, false).animate({'left' : '0'}, 400);
		$('.right-solid-bar').stop(false, false).animate({'width' : '18px', 'right' : 0}, 400);
		$('.row .column-left').stop(false, false).animate({'left' : '312px'}, 300);
		 	
	 }

	 $('.main-nav > .subnav').hover(showSubNavigation, hideSubNavigation);
	*/

	/*
	 * Left side Showreels
	 * ==========================================================*/
	 var _leftColumn = $('.left-column');
	 var _leftColumnWrapper = $('.left-column-wrapper');
	 var _centerColumn = $('.center-column');
	 var _leftSuperColumn = $('.left-super-column');
	 
	 var _pageSummary = $('.page-summary');

	 if($('#page-dir4-home').length > 0){
	 	console.log('home page');
	 	//_leftColumn.animate({'width' : '290px'}, 400);// comment by orange
		//_centerColumn.stop().animate({'margin-left' : '250px', 'margin-right' : '-110px'}, 400);
		/*
		_pageSummary.animate({'left' : '290px'}, 400, function(){
			$(this).animate({'opacity' : 0}, 300);
		});*/ // comment by orange
		_leftSuperColumn.addClass('border');

		_leftColumn.find('.main-nav .nav-title').each(function(k){
			$(this).delay(k*100).stop().animate({'left' : 0, 'opacity' : 1}, 300); // comment by orange
			//$(this).find('.nav-num').delay(k*100).animate({'left' : 0}, 300);
		});
		setTimeout(function(){
			//hideNav(); // comment by orange
		}, 5000)
	 }else{
	 	hideNav();
	 }

	_leftColumn.hover(function(){
		/* _leftColumn.stop().animate({'width' : '290px'}, 400); */
		//_centerColumn.stop().animate({'margin-left' : '250px', 'margin-right' : '-110px'}, 400);
		/*
_pageSummary.stop().animate({'left' : '290px'}, 400, function(){
			$(this).animate({'opacity' : 0}, 300);
		});
*/ // comment by orange
		
		_leftSuperColumn.addClass('border');

		_leftColumn.find('.main-nav .nav-title').each(function(k){
			$(this).delay(k*100).stop().animate({'left' : 0, 'opacity' : 1}, 300); // comment by orange
			//$(this).find('.nav-num').delay(k*100).animate({'left' : 0}, 300);
		});

		//$('.company-nav-wrapper').fadeOut(); //comment by orange

		//_leftColumn.find('.column-label').fadeOut(); //comment by orange



	}, function(){
		/* _leftColumn.stop().animate({'width' : '40px'}, 400); */
		//_centerColumn.stop().animate({'margin-left' : '40px', 'margin-right' : '50px'}, 400);
		/* _pageSummary.stop().animate({'left' : '40px', 'opacity' : 1}, 400); *///comment by orange
		
		_leftSuperColumn.removeClass('border');
		
		
		_leftColumn.find('.main-nav .nav-title').each(function(k){
			$(this).stop().animate({'left' : '0px', 'opacity' : 0}, 300);
			//$(this).find('.nav-num').animate({'left' : '-50px'}, 300);
		});

		//$('.company-nav-wrapper').fadeIn(); //comment by orange


		//_leftColumn.find('.column-label').fadeIn(); //comment by orange
			});


	function hideNav() {
		//alert('hide nav');
		/* _leftColumn.stop().animate({'width' : '40px'}, 400); */
		//_centerColumn.stop().animate({'margin-left' : '40px', 'margin-right' : '80px'}, 400);
		_centerColumn.stop().animate({'margin-left' : '40px', 'margin-right' : '70px'}, 400);
		/* _pageSummary.stop().animate({'left' : '40px', 'opacity' : 1}, 400); *///comment by orange
		
		_leftSuperColumn.removeClass('border');
		
		
		_leftColumn.find('.main-nav .nav-title').each(function(k){
			$(this).stop().animate({'left' : '30px', 'opacity' : 0}, 300);
			//$(this).find('.nav-num').animate({'left' : '-50px'}, 300);
		});

		//_leftColumn.find('.column-label').fadeIn(); //comment by orange
	}
	
	
	/*
	 * Right side Showreels
	 * ==========================================================*/
	 var _showreelColumn = $('.showreel-column');
	 
	 /*
	 _showreelColumn.find('.showreel-row').each(function(k){
			$(this).delay(k*100).animate({'left' : '50px'}, 300);
	});*/

	/*
	_showreelColumn.hover(function(){
		_showreelColumn.stop().animate({'right' : 0}, 400);
		_showreelColumn.find('.showreel-row').each(function(k){
			//$(this).delay(k*100).animate({'left' : 0}, 300);
			//$(this).find('.showreel-row-header').stop().delay(k*100).animate({'left' : '0px'}, 300);
		});

		//_showreelColumn.find('.column-label').fadeOut();

	}, function(){
		_showreelColumn.stop().animate({'right' : '-230px'}, 400);
		_showreelColumn.find('.showreel-row').each(function(k){
			//$(this).stop().animate({'left' : '50px'}, 300);
			//$(this).find('.showreel-row-header').stop().delay(k*100).animate({'left' : '-50px'}, 300);
		});

		//_showreelColumn.find('.column-label').fadeIn();
		
	});
	*/
	
	/*
	$('.showreel-list-wrapper').jScrollPane({
		'horizontalDragMaxWidth ' : 44
	});*/

	$('.showreel-nav').hover(function(){
		//Show Directors
		$(this).find('.category-list-wrapper').stop().show().animate({
			'width': '270px'
			
		},500);
	}, function(){
		//Hide Directors
		$(this).find('.category-list-wrapper').stop().animate({
			'width': '0px'
		},500, function(){
			$(this).hide();
		});
	});

	
	var thumbnailHeight;
	var currentSlidePosition = 0;
	$(window).on('resize', function(){
		getThumbnailSize();
	});
	getThumbnailSize();
	if($('.single-people').length > 0){

		console.log('set current position');
		currentSlidePosition = 124;
	}
	function getThumbnailSize(){

		//console.log($('.showreel-list').children().get(0));
		thumbnailHeight = $('.showreel-list li').eq(2).height();
		console.log(thumbnailHeight);
	}
	$('.showreel-arrow .arrow').click(function(){
		if($(this).hasClass('up')){
			currentSlidePosition -= thumbnailHeight;
			if(currentSlidePosition < 0){

					currentSlidePosition = 0;
				
			}
				
		}else if($(this).hasClass('down')){
			currentSlidePosition += thumbnailHeight;
			console.log(currentSlidePosition, $(document).height());
			if((currentSlidePosition + $(window).height()) > ($(document).height() +  + thumbnailHeight))
				currentSlidePosition -= thumbnailHeight;
		}
		$('body').scrollTo(currentSlidePosition, 200);
		if($('.single-people').length > 0 && currentSlidePosition == 0){
					currentSlidePosition = 124;
		}
	});

	/*
	var wrapperWidth = 0;
	var currentPage = 0;
	var rows = 2;
	
	var $grids = $('.grid');
	updateLayout();

	var wrapperWidth,
	    wrapperHeight,
	    pageHeight;
	function updateLayout(){
		if($('#pageWrapper').length == 0){
			return;
		}
		var myScroll = new iScroll('pageWrapper', {
		snap: false,
		momentum: false,
		hScrollbar: true,
		vScrollbar: false,
	    lockDirection: true});
		wrapperWidth = $('#pageWrapper').width();
    	wrapperHeight = $('#pageWrapper').height();
		if(wrapperHeight > 300 && wrapperHeight < 500){
		    rows = 2;
		}else if(wrapperHeight > 500 && wrapperHeight < 650){
		    rows = 3;
		}else if(wrapperHeight > 650 && wrapperHeight < 800){
		    rows = 4;
		}else if(wrapperHeight > 800){
		    rows = 5;
		}
		var pagesPerRow = Math.ceil($('.grid').length/rows);
		pageHeight = Math.ceil(wrapperHeight/rows);
		pageWidth = Math.ceil(pageHeight * 1.88);
		scrollerWidth = pageWidth * pagesPerRow;
		console.log(pageWidth, pagesPerRow, scrollerWidth);
		$('#pageScroller').css('width', scrollerWidth + 80);
		$('.grid').css({
		    'height': pageHeight,
		    'width': pageWidth
		});
		myScroll.refresh();
    	myScroll.scrollToPage(currentPage, 0, 0);
	}
	*/

	/*
	 * Our team
	 * ==========================================================*/
	
	/*
	var _width = $('.team-item').size() * 250;

	$('.our-team-list').width(_width);

	$('.our-team-container').jScrollPane({
		'horizontalDragMaxWidth ' : 44
	});*/

	/*
	 * Sub Navigation
	 * ==========================================================*/
	
	 
	 $('.nav-submenu > li').hover(function(){
	 	$(this).stop(false, false).animate({'opacity' : 1}, 200);
	 	$(this).siblings('.subnav-item').stop(false, false).animate({'opacity' : 0.3}, 200);
	 }, function(){
	 	$('.nav-submenu > li ').stop(false, false).animate({'opacity' : 1}, 200);
	 });


	 /*
	  *
	  * ==========================================================*/
	  var itemsWidth = 0;
	  var items = $('.reel-photos-wrapper img');
		items.imagesLoaded(function(){
			itemsWidth = 0;
            for (var i = 0; i < items.size() ; i++ ) {
                var img = items.eq(i);
                img.attr('index', i);
                itemsWidth += img.width();  
            }

            itemsWidth += 50;

            $('.reel-photos-wrapper').css({'width' : itemsWidth + 'px'});
		});


	/*
	 * Landing Page
	 * ==========================================================*/
	 $('#department-landingpage > li > a').hover(function(){
		 $(this).siblings('.popover').show();
	 }, function(){
		 $(this).siblings('.popover').hide();
	 });
	







	/*
	 * Our People
	 * ==========================================================*/
	 /*
	 $('#our-people-filter a').click(function(){
	 	var key = $(this).attr('href');
	 	key = key.substr(1);

	 	console.log(key);
	 });

	 var _qswHeight =  $('.quote-slider-wrapper').height();
	 */

	/*
	 * Responsive Slider
	 * ==========================================================*/
	
	/*
	 $(".rslides").responsiveSlides({
	 	'auto': false,
	 	'nav' : true,
	 	'prevText': "",   // String: Text for the "previous" button
  		'nextText': ""
  	  });
	*/
	$('#quote-people').bxSlider({
		'pager' : false
	});

	/*
	 * Our Clients
	 * ==========================================================*/
	 
	 $('.client-filter-item').click(function(e){
		 e.preventDefault();
		 var key = $(this).attr('href');
		 key = key.substr(1);
		 
		 $('.client-list li').animate({'opacity' : 0, 'height' : '0'}, 600);
		 $('.client-list li[department*="'+key+'"]').stop().animate({'opacity' : 1, 'height' : '18px'}, 600);
		 		 
	 });
	 
	 var numVideo = $('.playlist .playbox').size();
	 var playBoxWidth = $('.playlist .playbox img').width();
  
	 
	$('#single-client-playlist').bxSlider({
		pager : false
	});

	$('#single-people-playlist').bxSlider({
		pagerCustom: '#bx-pager'
	});
	
	
	
	var relX;
	var relY;
	var currentX;
	var currentY;
	var clicking = false;
	var moving = false;
	
	$('.showreel-overlay').click(function(){
		console.log('click');
		if(moving){
			console.log('on move');
			//return false;
		}
		return false;
	});
	$('.showreel-overlay').mousedown(function(e) {
   		//or $(this).offset(); if you really just want the current element's offset
   		console.log('moudedown');
   		clicking = true;
		/*
		*/
		return true;
	});
	$('.showreel-overlay').mousemove(function(e){
		if(!clicking)
			return;
		console.log('move');
		moving = true;
		return true;
	});

	if($(window).width() < 400){
		$.each($('.showreel-overlay'), function(){
			var a = $(this).attr('href').split('/');
			var vimeoId = a[a.length-1];
			console.log(vimeoId);
			var vimeoWidth = $(this).parent().width();
			var vimeoHeight = vimeoWidth * 480 / 640;
			//$(this).parent().parent().append('<iframe src="http://player.vimeo.com/video/'+vimeoId+'?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="'+vimeoWidth+'" height="'+showreelheight+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		});
	}

	var showreelheight = $('.showreel-list li').eq(0).height();
	$('.showreel-list li').css({
		//'height': showreelheight
	});
	$('.showreel-overlay').mouseup(function(e){
		if(moving){
			console.log('on move');

		}else{
			//this.href.replace(new RegExp("([0-9])","i")
			if($(window).width() < 400){

				var height = $('showreel-list li').eq(0).height();
				console.log(height);
				var a = $(this).attr('href').split('/');
				var vimeoId = a[a.length-1];

				var vimeoWidth = $(this).parent().width();
				var vimeoHeight = vimeoWidth * 480 / 640;

				//console.log(this.href.replace(new RegExp("([0-9])","i")));

				$(this).parent().parent().html('<iframe src="http://player.vimeo.com/video/'+vimeoId+'?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="'+vimeoWidth+'" height="'+showreelheight+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
				
			}else{
				console.log(this.href.replace(new RegExp("([0-9])","i")));
				$.fancybox({
							'overlayColor'  : '#000',
							'padding'		: 0,
							'autoScale'		: true,
							'transitionIn'	: 'fade',
							'transitionOut'	: 'fade',
							'title'			: this.title,
							'width'			: 800,
							'height'		: 480,
							'href'			: this.href.replace(new RegExp("([0-9])","i"),'moogaloop.swf?autoplay=1&color=fb5220&clip_id=$1'),
							'type'			: 'iframe'
						});
			}
			return false;
		}
		
		clicking = false;
    	moving = false;
    	return true;
	});
	$(document).mouseup(function(){
    	clicking = false;
    	moving = false;
    	console.log('mouse up on document');
	})
	
	$('.featured-work-overlay').click(function() {
		
		var vimeoId = $(this).attr('vimeo');
		var vimeoWidth = $(this).parent().width();
		var vimeoHeight = vimeoWidth * 480 / 640;
		$(this).parent().html('<iframe src="http://player.vimeo.com/video/'+vimeoId+'?color=fb5220&show_title=0&show_portrait=0&byline=0&autoplay=1&rel=0" width="'+vimeoWidth+'" height="'+vimeoHeight+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
	
	});
	
	
	/* NEW!!! */
	/*
	var $container = $('.client-list');
	// initialize
	$container.masonry({
	  columnWidth: 240,
	  itemSelector: '.list-item'
	});
	*/

	/*
	$('.showreel-featured-landing').masonry({
		itemSelector : '.showreel-item-landing',
		columnWidth : 100,
		gutter : 2
	});
	*/
	
	/*
	 *
	 * =========================================================== */
	 
	
	
		
	//.parallax(xPosition, adjuster, inertia, outerHeight) options:
	//xPosition - Horizontal position of the element
	//adjuster - y position to start from
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	var slideHeight;
	$('.slide').each(function(){
		
		if($(window).width() > 320){
			console.log('>');
			$(this).height($('body').height());
		}else{
			console.log('<');
			console.log($('body').height());
			$(this).height($('body').height());
		}
		if($('#page-dir4-about').length > 0){
			$(this).height($('body').height());
		}
	});
	
	$(window).on('resize', function(){
		$('.slide').each(function(){
			if($(window).width() <= 320){
				console.log(this);
				$(this).height($('body').height());		
			}
			if($('#page-dir4-about').length > 0){
			$(this).height($('body').height());
		}
		//$(this).height($(window).height());
		});
	});



	//$('#service-dir4films').parallax("50%", 0, 0.1, true);
	//$('#service-dir4tv').parallax("50%", 0, 0.1, true);
	//$('#service-4by4').parallax("50%", 0, 0.4, true);
	//$('#third').parallax("50%", 2750, 0.3, true);
	
	
	/*
	var deck = new $.scrolldeck({
		slides: '.page-content-service .slide',
		buttons: '#subnav-our-service li a',
		easing: 'easeInOutExpo'
	});
	*/
	
	$('#subnav-our-service li a').hover(function(){
		var href = $(this).attr('key');
		var el = $(href);
		$('body').scrollTo(el, 200);
	});
	$('#subnav-our-service li a').click(function(){
		var href = $(this).attr('key');
		var el = $(href);
		$('body').scrollTo(el, 200);
		if($(window).width() <= 320)
			return false;
	});

	var currentScrollPosition = 0;
	$('#about-us-arrows #arrow-up').click(function(){
		$('body').scrollTo(currentScrollPosition - $(window).height(), 200);
		currentScrollPosition -= $(window).height();
	});

	$('#about-us-arrows #arrow-down').click(function(){
		//= $('body').offset().top;
		$('body').scrollTo(currentScrollPosition + $(window).height(), 200);
		currentScrollPosition += $(window).height();
		console.log(currentScrollPosition, $(window).height());
	});
	/*
	 *  About
	 * =========================================================== */
	 
	

	
	
	$('#idea').parallax("50%", 0, 0.1, true);
	$('#imagine').parallax("50%", 0, 0.1, true);
	$('#produce').parallax("50%", 0, 0.4, true);
	$('#viola').parallax("50%", 0, 0.4, true);
	
	var aboutdeck = new $.scrolldeck({
		slides: '.page-content-about .slide',
		buttons: '#subnav-about li a',
		easing: 'easeInOutExpo'
	});
	

	/*
	 * Contacts
	 * ==========================================================*/
	 var _formPanel = $('.contact-form-panel');
	 var _btnToggle = $('.btn-toggle-form');
	 var _mapForeground = $('#map-foreground');
	 if($('.contact-form-panel').length > 0){
	 	_formPanel.addClass('show').animate({'width' : '647px'}, 500);
		_btnToggle.addClass('show').animate({'right' : '-647px'}, 500);
		_mapForeground.animate({
			'opacity': 0.7
		},1000)
	 }

	 _btnToggle.click(function(e){

		e.preventDefault();
		
		if (_formPanel.hasClass('show')) {
			//Hide
			_formPanel.removeClass('show').animate({'width' : 0}, 500);
			_btnToggle.removeClass('show').animate({'right' : 0}, 500);
			_mapForeground.animate({
			'opacity': 0.4
		},1000)
		} else {
			_formPanel.addClass('show').animate({'width' : '647px'}, 500);
			_btnToggle.addClass('show').animate({'right' : '-647px'}, 500);
			_mapForeground.animate({
			'opacity': 0.7
		},1000)
		}

	 });


	/*
	 * Featured Works
	 * ==========================================================*/
	 
	 $('#featured-work-playlist').bxSlider();

	/*
	 * Showreels
	 * ==========================================================*/

	 
	 
	 $('.reel-item').hover(function(){
	 	var _height = $(this).height();

	 	$(this).css({'overflow' : 'visible', 'z-index' : '100'})
	 			.stop(false, false).animate({'top' : (-.5 * _height) + 'px'}, 400);
	 	$(this).find('.reel-detail').stop(false, false).animate({'top' : '100%', 'opacity' : 1}, 400);
	 	$(this).find('img').stop(false, false).animate({'opacity' : 1}, 400);
	 	
	 	
	 }, function(){
	 	$(this).find('.reel-detail').stop(false, false).animate({'top' : '0%', 'opacity' : 0}, 400);
		$(this).stop(false, false).animate({'top' : '0px'}, 400, function(){
			$(this).css({'overflow' : 'hidden', 'z-index' : 0});
		});

		$(this).find('img').stop(false, false).animate({'opacity' : 0.5}, 400);
	 	
	 	
	 });
	
	$('.category-list-wrapper').hover(function(){
		console.log($(this).parent());
		$(this).parent().addClass('current');
	},function(){
		$(this).parent().removeClass('current');
	});

	$('.reel-item .btn-play').click(function() {
		$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'width'			: 800,
			'height'		: 480,
			'href'			: this.href.replace(new RegExp("([0-9])","i"),'moogaloop.swf?autoplay=1&clip_id=$1'),
			'type'			: 'swf'
		});

		return false;
	});
	/*
	 * DIR4 Films Team
	 * ==========================================================*/
	 $('#dir4films-team-slider li').height($(window).height());
	 $('#dir4films-team-slider').bxSlider({'pager' : false});

});