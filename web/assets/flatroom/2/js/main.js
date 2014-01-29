
//Radio, Checkbox and Select
function formStylization() {
	var $ = jQuery;
	$('input[type="radio"]').wrap('<div class="new-radio"></div>');
	$('.new-radio').append('<span></span>');
	$('input[type="checkbox"]').wrap('<div class="new-checkbox"></div>');
	$('.new-checkbox').append('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><polygon fill="#41A3E1" points="9.298,13.391 4.18,9.237 3,10.079 9.297,17 17.999,4.678 16.324,3 "/></svg>');
	$('input[type="checkbox"]:checked').parent('.new-checkbox').addClass('checked');
	$('input[type="radio"]:checked').parent('.new-radio').addClass('checked');
	$('input[type="radio"]:disabled, input[type="checkbox"]:disabled').parent().addClass('disabled');
	$('html').click(function(){
		$('input[type="radio"]').parent('.new-radio').removeClass('checked');
		$('input[type="radio"]:checked').parent('.new-radio').addClass('checked');
		$('input[type="checkbox"]').parent('.new-checkbox').removeClass('checked');
		$('input[type="checkbox"]:checked').parent('.new-checkbox').addClass('checked');
		$('input[type="radio"], input[type="checkbox"]').parent().removeClass('disabled');
		$('input[type="radio"]:disabled, input[type="checkbox"]:disabled').parent().addClass('disabled');
	});
	$('select').selectbox();
	
	$('.home-filter .sbHolder, .ibr-properties-filter .sbHolder').each(function () {
		var element = $(this).find('ul.sbOptions li:first a');
		var text    = element.text();
		element.html('- Any -');
	});
	
	$('body').on('change', 'select', function() {
		$('#sbSelector_' + $(this).attr('sb')).text($(this).find('option:selected').text());
	});
}
	
//Home (Map)
function optionHomeMap() {
	var $                  = jQuery,
		filter             = $('#main .home-filter'),
		filterContent      = $('#main .home-filter .filter-content'),
		filterButton       = $('#main .home-filter .filter-button'),
		filterHeight       = $('#main .home-filter .filter-content').outerHeight(),
		filterWidth        = $('#main .home-filter .filter-content').outerWidth(),
		filterButtonWidth  = $('#main .home-filter .filter-button').outerWidth(),
		windowHeight       = $('body').height(),
		windowWidth        = $('body').width(),
		headerHeight       = $('#site-header').outerHeight(),
		tabHeight          = $('#main .home-tabs').outerHeight(),
		mapHeight          = windowHeight - headerHeight - tabHeight,
		marginTop;
	
	if ((filter.hasClass('filter-position-right')) || ( windowHeight < ( headerHeight + filterHeight + tabHeight + 60 ))) {
		marginTop = headerHeight + 30;
	} else {
		marginTop = ( mapHeight - filterHeight) / 2 +  headerHeight;
	}

	$('#map-canvas').css({
		height    : windowHeight,
		minHeight : headerHeight + filterHeight + tabHeight + 75,
	});
	
	$('.overlay-filter').css({
		top       : headerHeight,
		bottom    : filterHeight + tabHeight + 10,
		left      : filterWidth - filterButtonWidth
	});
	
	if (filter.hasClass('open')) {
		if (filter.hasClass('filter-position-right') && $('body').width() >= 768) {
			filter.css({
				left  : windowWidth - filterButtonWidth - 30,
				top   : headerHeight + 30
			});
		} else {
			filter.css({
				left  : (windowWidth / 2) + (filterWidth / 2) - filterButtonWidth,
				top   : marginTop
			});
		}
	} else {
		filterButton.html('Show filter <div class="flip"><span>+</span></div>');
		filter.css({
			left  : windowWidth - 136,
			top   : windowHeight - 109
		});
	}

	$(filterButton).click(function() {
		var windowHeight       = $('body').height(),
			windowWidth        = $('body').width();
		
		if (filter.hasClass('open')) {
			filterContent.fadeOut('400', function() {
				filter.animate({
				left  : windowWidth - 136,
				top   : windowHeight - 109
			}, 400);
				filterButton.html('Show filter <div class="flip"><span>+</span></div>');
				filter.removeClass('open', 400 );
			});
		} else {
			filterButton.html('Hide <div class="flip"><span>&#8211;</span></div>');
			if (filter.hasClass('filter-position-right')) {
				filter.animate({
					left  : windowWidth - filterButtonWidth - 30,
					top   : headerHeight + 30
				}, 400,
				function(){
					filterContent.fadeIn('400');
				});
			} else {
				filter.animate({
					left  : (windowWidth / 2) + (filterWidth / 2) - filterButtonWidth,
					top   : marginTop
				}, 400,
				function(){
					filterContent.fadeIn('400');
				});
			}
			$(filter).addClass('open', 400 );
		}
		return false;
	});
	
	if ($('body').width() >= 980 ) {
		$("#main .home-filter").draggable({
			containment: '.overlay-filter',
			cursor: 'move',
			handle: '.move',
		});
	}
}
	
//Home (Best Agents)
function optionHomeAgents() {
	var $              = jQuery,
		windowHeight   = $('body').height(),
		carouselWidth  = $('#main .home-agents .row').width(),
		siteHeader     = $('#site-header').outerHeight(),
		agentsSize     = $('#main .home-content .agent').length,
		gridMargim     = $('#main .home-content .span4').css('margin-left'),
		marginTop      = $('#main .home-agents .row'),
		contentHeight;

	if ($('body').hasClass('main-menu-visible') && $('body').width() >= 980 ) {
		contentHeight = windowHeight - siteHeader - 109;
	} else {
		contentHeight = windowHeight - siteHeader - 109;
	}
	var marginTop187 = ((contentHeight - 187) / 2) - 50,
		marginTop404 = ((contentHeight - 404) / 2) - 50,
		marginTop621 = ((contentHeight - 621) / 2) - 50;
	if (marginTop187 < 0) {
		marginTop187 = 0;
	}
	if (marginTop404 < 0) {
		marginTop404 = 0;
	}
	if (marginTop621 < 0) {
		marginTop621 = 0;
	}
	
	$('#main .home-content .home-agents').css('height', contentHeight);
	
	if (carouselWidth > 1199) {
		if ( contentHeight > 700) {
			if (agentsSize > 6) {
				$('#main .home-content .home-carousel .span4:nth-child(3n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev().prev());
					$(this).remove();
				});
				$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev());
					$(this).remove();
				});
				marginTop.css('marginTop', marginTop621);
			} else if (agentsSize < 7 && agentsSize > 3) {
				$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev());
					$(this).remove();
				});
				marginTop.css('marginTop', marginTop404);
			} else {
				marginTop.css('marginTop', marginTop187);
			}
		} else if (contentHeight < 701 && contentHeight > 483) {
			if (agentsSize > 3) {
				$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev());
					$(this).remove();
				});
				marginTop.css('marginTop', marginTop404);
			} else {
				marginTop.css('marginTop', marginTop187);
			}
		} else {
			marginTop.css('marginTop', marginTop187);
		}
	} else if (carouselWidth < 1200 && carouselWidth > 779) {
		if ( contentHeight > 700) {
			if (agentsSize > 4) {
				$('#main .home-content .home-carousel .span4:nth-child(3n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev().prev());
					$(this).remove();
				});
				$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev());
					$(this).remove();
				});
				marginTop.css('marginTop', marginTop621);
			} else if (agentsSize < 5 && agentsSize > 2) {
				$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev());
					$(this).remove();
				});
				marginTop.css('marginTop', marginTop404);
			} else {
				marginTop.css('marginTop', marginTop187);
			}
		} else if (contentHeight < 701 && contentHeight > 483) {
			if (agentsSize > 2) {
				$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
					$(this).children('.agent').appendTo($(this).prev());
					$(this).remove();
				});
				marginTop.css('marginTop', marginTop404);
			} else {
				marginTop.css('marginTop', marginTop187);
			}
		} else {
			marginTop.css('marginTop', marginTop187);
		}
	} else {
		if ( contentHeight > 700) {
			$('#main .home-content .home-carousel .span4:nth-child(3n)').each(function(){
				$(this).children('.agent').appendTo($(this).prev().prev());
				$(this).remove();
			});
			$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
				$(this).children('.agent').appendTo($(this).prev());
				$(this).remove();
			});
			marginTop.css('marginTop', marginTop621);
		} else if (contentHeight < 701 && contentHeight > 483) {
			$('#main .home-content .home-carousel .span4:nth-child(2n)').each(function(){
				$(this).children('.agent').appendTo($(this).prev());
				$(this).remove();
			});
			marginTop.css('marginTop', marginTop404);
		} else {
			marginTop.css('marginTop', marginTop187);
		}
	}
}

//Home (Best Properties)
function optionHomeProperties() {
	var $             = jQuery,
		windowHeight  = $('body').height(),
		carouselWidth = $('#main .properties .row').width(),
		siteHeader    = $('#site-header').outerHeight(),
		propertySize  = $('#main .home-content .property').length,
		gridMargim    = $('#main .home-content .span3').css('margin-left'),
		marginTop     = $('#main .home-content .properties .row'),
		contentHeight;
		
	if ($('body').hasClass('main-menu-visible') && $('body').width() >= 980 ) {
		contentHeight = windowHeight - siteHeader - 109;
	} else {
		contentHeight = windowHeight - siteHeader - 109;
	}
	var marginTop296 = ((contentHeight - 296) / 2) - 50,
		marginTop620 = ((contentHeight - 620) / 2) - 50;
	if (marginTop296 < 0) {
		marginTop296 = 0;
	}
	if (marginTop620 < 0) {
		marginTop620 = 0;
	}
	
	$('#main .home-content .properties').css('height', contentHeight);
	if (carouselWidth > 1199) {
		if ( contentHeight >= 698 && propertySize > 4) {
			$('.home-content .home-carousel .span3:odd').each(function(){
				$(this).children('.property').appendTo($(this).prev());
				$(this).remove();
			});
			marginTop.css('marginTop', marginTop620);
		} else {
			marginTop.css('marginTop', marginTop296);
		}
	} else if (carouselWidth < 1200 && carouselWidth > 869) {
		if ( contentHeight >= 698 && propertySize > 3) {
			$('.home-content .home-carousel .span3:odd').each(function(){
				$(this).children('.property').appendTo($(this).prev());
				$(this).remove();
			});
			marginTop.css('marginTop', marginTop620);
		} else {
			marginTop.css('marginTop', marginTop296);
		}
	} else if (carouselWidth < 870 && carouselWidth > 559) {
		if ( contentHeight >= 698 && propertySize > 2) {
			$('.home-content .home-carousel .span3:odd').each(function(){
				$(this).children('.property').appendTo($(this).prev());
				$(this).remove();
			});
			marginTop.css('marginTop', marginTop620);
		} else {
			marginTop.css('marginTop', marginTop296);
		}
	} else {
		if ( contentHeight >= 698) {
			$('.home-content .home-carousel .span3:odd').each(function(){
				$(this).children('.property').appendTo($(this).prev());
				$(this).remove();
			});
			marginTop.css('marginTop', marginTop620);
		} else {
			marginTop.css('marginTop', marginTop296);
		}
	}
	$('.tooltip-link').tooltip();
}

//Home (Best Property)
function optionHomeProperty() {
	var $                 = jQuery,
		windowHeight      = $('body').height(),
		siteHeader        = $('#site-header').outerHeight(),
		contentWidth      = $('body').width(),
		contentHeight     = windowHeight - siteHeader - 109;
	
	if (contentWidth/contentHeight > 1.8) {
		if ((contentHeight * 1.8) < 320) {
			$('#main .home-content .property-one .property').css('width', 320);
		} else {
			$('#main .home-content .property-one .property').css('width', contentHeight * 1.78);
		}
	}
	
	var propertyWidth  = $('.property-one .property').outerWidth(),
		propertyHeight = $('.property-one .property').outerHeight(),
		propertyClass,
		marginTop;
		
	if (((contentHeight - (propertyWidth/1.8) - 50) / 2) > 0) {
		marginTop = (contentHeight - (propertyWidth/1.8) - 50) / 2;
	} else {
		marginTop = 0;
	}
		
	if (propertyWidth/propertyHeight < 1.8) {
		$('#main .home-content .property-one .property').css({
			height    : propertyWidth/1.8,
			marginTop : marginTop
		});
	}
	
	$('#main .home-content .property-one').css({
		height    : contentHeight,
		minHeight : contentHeight
	});
	
	if (propertyWidth < 980 && propertyWidth > 768) {
		propertyClass = 'property-768';
	} else if (propertyWidth < 768) {
		propertyClass = 'property-320';
	}
	
	$('.property-one .property').addClass(propertyClass);
	
	$('.tooltip-link').tooltip();
}

//Video Pley
function playVideo() {
    var $ = jQuery;
    if ($('body').hasClass('ibr-tab-slider')) {
		$('.slider-slides .slide').each(function (i) {
			if ($(this).find('video').length) {
				if (i === 0) {
					$(this).find('video').get(0).play();
				}
				else {
					$(this).find('video').get(0).pause();
				}
			}
		});
    }
}

//Home (Sliders)
function optionHomeSliders() {
	var $                 = jQuery,
		windowHeight      = $('body').height(),
		siteHeader        = $('#site-header').outerHeight(),
		contentWidth      = $('body').width(),
		contentHeight     = windowHeight - siteHeader,
		slider            = $('#main .slider-content'),
		slide             = $('#main .home-slider .slide'),
		slideContent      = $('#main .home-slider.type-content .slide'),
		slideProperty     = $('#main .home-slider.type-property .slide');
	
	$('#main .home-content .home-slider').css({
		height : windowHeight,
	});
	
	if (windowHeight < 700) {
		$('#main .home-content .home-slider').addClass('mini');
	} else {
		$('#main .home-content .home-slider').removeClass('mini');
	}
	
	if (slideContent.length) {
		$('#main .home-slider.type-content .slider-slides').carouFredSel({
			responsive : true,
			auto       : false,
			pagination : slider.find('.pagination'),
			next       : slider.find('.next'),
			prev       : slider.find('.prev'),
			swipe : {
				onMouse: true,
				onTouch: true,
			},
			height     : 'auto',
			items : {
				visible: 1,
			},
			scroll : {
				onAfter :function () { playVideo(); }
			}
		});
	}

	if (slideProperty.length) {
		$('#main .home-slider.type-property .slider-slides').carouFredSel({
			responsive : true,
			auto : {
				progress : {
					bar  : slider.find('.timer'),
				},
				timeoutDuration : 4000,
			},
			next       : slider.find('.next'),
			prev       : slider.find('.prev'),
			swipe : {
				onMouse: true,
				onTouch: true,
			},
			height     : 'auto',
			items : {
				visible: 1,
			},
		});
		
		if ($('#main .home-slider.type-property .slide').length === 1) {
			$('#main .home-slider.type-property .timer').addClass('hidden');
		}
	}
	
	//Natural width/height images
	var props = ['Width', 'Height'],
		prop;

    while (prop = props.pop()) {
		(function (natural, prop) {
			$.fn[natural] = (natural in new Image()) ? 
			function () {
				return this[0][natural];
			} : 
			function () {
				var node = this[0],
					img,
					value;
					
				if (node.tagName.toLowerCase() === 'img') {
					img = new Image();
					img.src = node.src;
					value = img[prop];
				}
				return value;
			};
		}('natural' + prop, prop.toLowerCase()));
    }
	
	var slideHeight    = slide.outerHeight(),
		slideWidth     = slide.outerWidth();
	
	slide.each(function() {
		var slideImg          = $(this).children('.slide-image').children('img');
		
		if (slideImg.length) {
			var	slideImgWidthN    = slideImg.naturalWidth(),
				slideImgHeightN   = slideImg.naturalHeight(),
				slideImgWidth,
				imgMarginLeft;
	
			if ((slideWidth / slideHeight) < (slideImgWidthN / slideImgHeightN))
			{
				slideImg.css({
					height     : '100%',
					maxWidth   : 'inherit',
					minWidth   : '100%',
					width      : 'auto'
				});
				
				slideImgWidth    = slideImg.width();
				imgMarginLeft = (slideWidth - slideImgWidth) / 2;
				
				slideImg.css({
					marginLeft : imgMarginLeft
				});
			}
			else
			{
				slideImg.css({
					height     : 'auto',
					maxWidth   : '100%',
					width      : '100%'
				});
				
				slideImgWidth    = slideImg.width();
				imgMarginLeft = (slideWidth - slideImgWidth) / 2;
				
				slideImg.css({
					marginLeft : 0
				});
			}
		}
	});
	
	slide.each(function() {
		var slideVideo        = $(this).children('.slide-image').children('video'),
			slideVideoHeight  = slideVideo.height(),
			slideVideoWidth   = slideVideo.width(),
			videoMarginLeft;
		
		if (slideVideoWidth > slideWidth) {
			slideVideo.css({
				marginLeft : (slideWidth - slideVideoWidth) /2
			});
		}
		
		if (slideVideoWidth < slideWidth) {
			slideVideo.css({
				height     : 'auto',
				width      : '100%',
				marginLeft : 0
			});
		}
		else
		{
			slideVideo.css({
				height     : '100%',
				width      : 'auto',
			});
		}
	});
}

//Home Carousel
function homeCarousel() {
	var $ = jQuery;
	$('.home-content .home-carousel').each(function () {
		$(this).carouFredSel({
			scroll: 1,
			auto: false,
			infinite  : false,
			height: 'auto',
			next: $(this).closest('.home-content').find('.next'),
			prev: $(this).closest('.home-content').find('.prev'),
			items: {
				width : 'variable'
			},
			pagination: {
				container: $(this).closest('.home-content').find('.scroll'),
				deviation: 0,
				event: 'mouseenter',
			},
			swipe: {
				onMouse: true,
				onTouch: true,
				easing: 'linear'
			}
		}).css('maxHeight', 'inherit');
	});
}

//Sidebar Carousel
function carousel() {
	var $ = jQuery;
	$('.carousel-box .carousel').each(function () {
		var widget = $(this).parents('.carousel-box');
		
		if ($(widget).hasClass('features-first') && $('body').width() <= 979) {
			$(this).closest('.carousel-box').find('.next').hide();
			$(this).closest('.carousel-box').find('.prev').hide();
			$('.carousel-box.features-first .carousel').trigger("destroy", true);
		} else {
			$(this).carouFredSel({
				auto     : false,
				infinite : false,
				scroll   : 1,
				height   : 'auto',
				next     : $(this).closest('.carousel-box').find('.next'),
				prev     : $(this).closest('.carousel-box').find('.prev'),
				swipe : {
					onMouse: true,
					onTouch: true,
					easing: 'linear'
				}
			});
		}
	});
}

//Properties Carousel
function properties() {
	var $ = jQuery;
	$('.property .images').not('.property-one .property .images').each(function () {
		if (($(this).find('a').length > 1)) {
			$(this).carouFredSel({
				responsive: true,
				auto: false,
				infinite  : false,
				pagination: $(this).closest('.property').find('.pagination'),
			}).parents('.images-box').css("overflow", "visible");
		}
	});
}

//Property Carousel
function propertyCarousel(selector) {
    var $ = jQuery;

    if ((selector.find('a').length > 1) ){
		selector.carouFredSel({
			responsive: true,
			auto: false,
			infinite  : false,
			pagination: selector.closest('.property').find('.pagination'),
		});
    }
}

//Home Property
function homeProperty() {
	var $ = jQuery;
	$('.property-one .property .images').each(function () {
		$(this).carouFredSel({
			responsive: true,
			auto: false,
			infinite  : false,
			pagination: $(this).closest('.property').find('.pagination'),
			swipe: {
				onMouse: true,
				onTouch: true,
				easing: 'linear'
			},
			height : 'auto',
			items: {
				visible: 1,
			}
		}).children('img').css("height", "auto");
	});
}

//Property View Carousel
function propertyView() {
	var $ = jQuery,
		thumbsDirection,
		thumbsVisible;
	
	if ($('body').width() >= 980) {
		thumbsDirection = 'up';
		thumbsVisible = 4;
	} else {
		thumbsDirection = 'left';
		thumbsVisible = null;
	}
	
	if ( $('body').width() >= 980 ) {
		$('#thumbs > div:odd').each(function(){
			if ($(this).prev().find('a').length < 2) {
				$(this).children('a').addClass('two');
				$(this).children('a').appendTo($(this).prev());
				$(this).remove();
			}
		});
		
	}
	else
	{
		$('#thumbs > div').each(function(){
			if ($(this).find('a').length > 1) {
				$(this).children('a').removeClass('two');
				$(this).before('<div></div>');
				$(this).children('a:first').appendTo($(this).prev());
			}
		});
	}
	
	$('#thumbs a:first').addClass('selected');
	
	$('#thumbs a').click(function() {
		$('.property-view .galery .images').trigger('slideTo', '#' + this.href.split('#').pop() );
		$('#thumbs a').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	
	$('.property-view .galery .images').each(function () {
		$(this).carouFredSel({
			responsive: true,
			circular: false,
			auto: false,
			items: {
				visible: 1,
				width: 650,
				height: '58%'
			},
			scroll: {
				fx: 'crossfade'
			},
		}).parents('.galery').addClass('onload');
	});
	
	$('#thumbs').each(function () {
		$(this).carouFredSel({
			circular: false,
			infinite: false,
			auto: false,
			prev: $('.thumbs-box .prev'),
			next: $('.thumbs-box .next'),
			direction : thumbsDirection,
			items: {
				visible: thumbsVisible,
			},
			swipe: {
				onMouse: true,
				onTouch: true,
				easing: 'linear'
			}
		}).parents('.thumbs-box').addClass('onload');
	});
}

//Bg Sidebar
function bgSidebar() {
	var $              = jQuery,
		pageHeader     = $('.page-header').outerHeight(),
		windowWidth    = $('body').width(),
		containerWidth = $('.container').width(),
		sidebarWidth   = $('#sidebar').width();
		
	$('#sidebar .widget-area .aside-border').css('width', (windowWidth / 2) - (containerWidth / 2) + sidebarWidth);
	$('#sidebar .bg-sidebar').css({
		'top'   : pageHeader,
		'width' : (windowWidth / 2) - (containerWidth / 2) + sidebarWidth
	});
}
	
//Sidebar (width < 980)
function sidebar() {
	var $             = jQuery,
		pageHeader    = $('.page-header').outerHeight(),
		primaryHeight = $('#sidebar .widget-area').height();
	
	$('#primary').css('minHeight', primaryHeight - 50);
	if ($('body').width() <= 979 ) {
		$('#sidebar').css('marginTop', pageHeader);
	} else {
		$('#sidebar').css('marginTop', 0);
	}
}

function sidebarOpen() {
	var $             = jQuery,
		siteHeader    = $('#site-header').outerHeight(),
		pageHeader    = $('.page-header').outerHeight(),
		bodyHeight    = $('#page').outerHeight(),
		footerHeight  = $('#site-footer').outerHeight(),
		primaryHeight = $('#sidebar .widget-area').height();
	
	$('#primary').css('minHeight', primaryHeight - 50);
	if ($('body').width() <= 979 ) {
		$('#sidebar').css('marginTop', pageHeader);
	}
	
	$(window).scroll(function(){
		if ($('body').width() <= 979 ) {
			if ($(this).scrollTop() > siteHeader + pageHeader) {
				$('#sidebar .sidebar-button').addClass('scroll');
			} else {
				$('#sidebar .sidebar-button').removeClass('scroll');
			}
			if ($(this).scrollTop() > bodyHeight - footerHeight - 40) {
				$('#sidebar .sidebar-button').removeClass('scroll');
			}
		}
	});
	
	$('#sidebar .sidebar-button').click(function(){
		if ($('body').width() <= 979 ) {
			if ($('#sidebar').hasClass('open')) {
				$('#sidebar').removeClass('open');
				if ($('#primary').hasClass('right-sidebar')) {
					$('#sidebar').animate({	marginRight: '-292' }, 500 );
					if ($('body').width() >= 768 ) {
						$('#content').animate({	marginLeft: '20' }, 500 );
					} else {
						$('#content').animate({	marginLeft: '0' }, 500 );
					}
				} else {
					$('#sidebar').animate({	marginLeft: '-292' }, 500 );
					if ($('body').width() >= 768 ) {
						$('#content').animate({	marginRight: '0' }, 500 );
					} else {
						$('#content').animate({	marginRight: '0' }, 500 );
					}
				}
			} else {
				$('#sidebar').addClass('open');
				if ($('#primary').hasClass('right-sidebar')) {
					$('#sidebar').animate({	marginRight: '0' }, 500 );
					if ($('body').width() >= 768 ) {
						$('#content').animate({	marginLeft: '-292' }, 500 );
					} else {
						$('#content').animate({	marginLeft: '-312' }, 500 );
					}
				} else {
					$('#sidebar').animate({	marginLeft: '0'	}, 500 );
					if ($('body').width() >= 768 ) {
						$('#content').animate({	marginRight: '-292'	}, 500 );
					} else {
						$('#content').animate({	marginRight: '-312'	}, 500 );
					}
				}
			}
		}
		return false;
	});
	$('#sidebar > .close').click(function(){
		$("#sidebar .sidebar-button").click();
		return false;
	});
}

//Main Menu More
function moreMenu() {
	var $ = jQuery,
		moreWidth,
		menuWidth;
	
	if ($('body').width() >= 980) {
		var totalWidth = 0,
			closeWidth = $('#main-menu .close').outerWidth(),
			bodyWidth = $('body').width();

		if ($('body').hasClass('main-menu-visible')) {
			$('#second-menu .menu > li').each( function () {
				totalWidth = totalWidth + $(this).width();
				if (totalWidth > bodyWidth) {
					$(this).addClass('more-li');
					$('#second-menu .more').addClass('visible');
					$(this).appendTo('#second-menu .more-ul');
				}
			});
		} else {
			$('#main-menu .main-navigation .menu > li').each( function () {
				totalWidth = totalWidth + $(this).outerWidth();
				if (totalWidth > (bodyWidth - closeWidth)) {
					$(this).addClass('more-li');
					$('#main-menu .more').addClass('visible');
					$(this).appendTo('#main-menu .more-ul');
				}
			});
		}
		
		if ($('body').hasClass('main-menu-visible')) {
			moreWidth = $('#second-menu .more-a').outerWidth();
			menuWidth = $('#second-menu .menu').outerWidth();
			
			if (bodyWidth < (menuWidth + moreWidth)) {
				$('#second-menu .menu li:last').addClass('more-li');
				$('#second-menu .menu li:last').prependTo('#second-menu .more-ul');
			}
		} else {
			moreWidth = $('#main-menu .more-a').outerWidth();
			menuWidth = $('#main-menu .menu').outerWidth();
			
			if (bodyWidth < (menuWidth + moreWidth + closeWidth)) {
				$('#main-menu .main-navigation .menu li:last').addClass('more-li');
				$('#main-menu .main-navigation .menu li:last').prependTo('#main-menu .more-ul');
			}
		}
	} else {
		if ($('body').hasClass('main-menu-visible')) {
			$('#second-menu .more-ul .more-li').each( function () {
				$('#second-menu .more').removeClass('visible');
				$(this).appendTo('#second-menu .menu');
				$(this).removeClass('more-li');
			});
		} else {
			$('#main-menu .more-ul .more-li').each( function () {
				$('#main-menu .more').removeClass('visible');
				$(this).appendTo('#main-menu .menu');
				$(this).removeClass('more-li');
			});
		}
	}
	$('#second-menu').css('overflow', 'visible');
}

function imgProperies() {
	var $           = jQuery,
		imgBox      = $('.properties-list .property .images-box'),
		imgBoxWidth = imgBox.width(),
		img         = $('.properties-list .property .images-box .images img'),
		imgWidth    = img.width();
		
	if (imgWidth > imgBoxWidth) {
		img.each( function () {
			img.css('marginLeft', (imgBoxWidth - imgWidth) / 2);
		});
	}
}

//Home Map
function geocodePosition(pos, element) {
	var $ = jQuery;
  
	geocoder = new google.maps.Geocoder();
	geocoder.geocode(
		{latLng: pos},
		function(results, status) {
			if (status == google.maps.GeocoderStatus.OK)  {
				var key = Math.floor(results['length'] / 2);
	  
				$(element).parent().attr('title', results[key].formatted_address);
	  
				$(element).replaceWith(results[key].formatted_address);
			} 
			else  {
				$(element).replaceWith(ibr.adressError + ' ' + status);
			}
	
		}
	);
}
	
jQuery(document).ready(function() {
    "use strict";
    var $ = jQuery;
	
	$('body').on('click', 'video.slide-video', function () {
		if (this.paused) {
			this.play();
		}
		else {
			this.pause();
		}
	});
	if ($('body').width() <= 1198 ) {
		$('#main .home-slider .slide .slide-image video').remove();
	}
	
	//Functions
	/* Radio, Checkbox and Select */
	formStylization();
	
	/* Home Tabs */
	optionHomeMap();
	optionHomeAgents();
	optionHomeProperties();
	optionHomeProperty();
	optionHomeSliders();
	
	/* Carousel */
	$(window).bind({
		load : function() {
			carousel();
			properties();
			homeProperty();
			propertyView();
			homeCarousel();
			imgProperies();
			playVideo();
		}
	});

	$(window).load(function() {
		$('.home-tabs-overlay').css('display', 'none');
	});
	
	//Bootstrap Elements
	$('.tooltip-demo a').tooltip();
	$('.tooltip-link').tooltip();
	
	$('.nav-tabs a').click(function () {
		e.preventDefault();
		$(this).tab('show');
	});
	
	$('.btn-loading').click(function () {
		var btn = $(this);
		btn.button('loading');
		setTimeout(function () {
			btn.button('reset');
		}, 3000);
	});
	$('.disabled').click(function () {
		return false;
	});
	
	if ($('body').width() >= 980) {
		$('.fancybox').fancybox({
			openEffect	: 'fade',
			closeEffect	: 'fade',
			prevEffect	: 'fade',
			nextEffect	: 'fade',
			helpers :  {
				title : {
					type : 'inside'
				},
			}
		});
	} else {
		$('.property-view #content .galery .images a').click(function(){
			return false;
		});
	}
	
	//Accordion
	$('.accordion-group .accordion-body.in').parent().addClass('active');
	$('.accordion-group .accordion-heading').click( function(e){
		var accordion = $(this).parent();
		
		if ( accordion.hasClass('active')) {
			accordion.removeClass('active');
		} else {
			$('.accordion-group').removeClass('active');
			accordion.addClass('active');
		}
	}).dblclick(function(){
		$(this).trigger( "click" );
		return false;
	});

	$('.accordion-toggle').bind('touchstart', function(){
		$(this).addClass('not-hover');
	});
	
	//Properties Options
	$('#main .property .options .bedrooms').each(function(){
		$(this).css('right', $(this).next().width() + 40);
	});
	
	$('#main .properties-list .property .options .bedrooms').each(function(){
		$(this).css('right', $(this).next().width() + 50);
	});
	
	// Scroll to Top
	$('#up').click(function() {
		$('html, body').animate({
			scrollTop: $('body').offset().top
		}, 500);
		return false;
	});
	
	//Header Icons
	$('#site-header .header-icons-buttons a').click(function(){
		$(this).effect('pulsate', { times: 1 }, 5);
		var $class    = $(this).attr('href'),
			iconCount = $('#site-header .header-icons-buttons > a').length;
			
		if ($(this).hasClass('active')) {
			return false;
		} else {
			$('#site-header .header-icons-buttons a').removeClass('active prev');
			$(this).addClass( 'active', 10, 'easeOutBounce');
			if (iconCount < 3) {
				$(this).next().addClass( 'prev', 10, 'easeOutBounce');
				$(this).prev().addClass( 'prev', 10, 'easeOutBounce');
			} else {
				if ($(this).hasClass('email')) {
					$('#site-header .header-icons-buttons .phone').addClass( 'prev', 10, 'easeOutBounce');
				} else {
					$(this).prev().addClass('prev');
				}
			}
			$('#site-header .header-icons-body > div').css('display', 'none');
			$('#site-header .header-icons-body > div').removeClass('active');
			$('#site-header .header-icons-body .' +$class).fadeIn('15000');
			$('#site-header .header-icons-body .' +$class).addClass('active');
			return false;
		}
	});
	
	//Main Menu
	$('#site-header .menu-button').click(function(){
		$('#main-menu .main-navigation, #second-menu').show('500');
		$('#main-menu .bg-color, .second-bg').fadeIn('1000');
		return false;
	});
	$('#main-menu .close, #main-menu .bg-color').click(function(){
		$('#main-menu .main-navigation').hide('500');
		$('#main-menu .bg-color').fadeOut('1000');
		return false;
	});
	$('#second-menu .close, .second-bg').click(function(){
		$('#second-menu').hide('500');
		$('.second-bg').fadeOut('1000');
		return false;
	});
	
	$('#main-menu .sub-menu, #second-menu .sub-menu').parent('li').addClass('parent');
	
	if ($('body').width() <= 979 ) {
		$('#main-menu .sub-menu, #second-menu .sub-menu').prev('a').append('<span class="open-sub">+</span>');
	}
	
	//Main Menu More
	moreMenu();
	if (!$('body').hasClass('main-menu-visible')) {
		$('#site-header .menu-button').click(function(){
			moreMenu();
		});
	}
	
	$('#main-menu .open-sub , #second-menu .open-sub').toggle(function(){
		if ($('body').width() <= 979 ) {
			if ($(this).parent().next().hasClass('sub-menu') && $(this).parents('.parent').not('active')) {
				$(this).html('&#8211;');
				$(this).parent().next('.sub-menu').slideDown(600);
				$(this).parents('.parent').addClass('active');
			}
		}
		return false;
	}, function(){
		if ($('body').width() <= 979 ) {
			if ($(this).parent().next().hasClass('sub-menu')) {
				$(this).html('+');
				$(this).parent().next('.sub-menu').slideUp(600);
				$(this).closest('.parent').removeClass('active');
			}
		}
		return false;
	});
	
	//Sidebar menu
	$('#sidebar .sub-menu, #sidebar .children').prev('a').append('<span class="open-sub">+</span>');
	$('#sidebar .sub-menu, #sidebar .children').parent('li').addClass('parent');
	$('#sidebar a > .open-sub').toggle(function(){
		if ($(this).parent().next().hasClass('sub-menu') && $(this).parents('.parent').not('active')) {
			$(this).html('&#8211;');
			$(this).parent().next('.sub-menu').slideDown(600);
			$(this).parents('.parent').addClass('active');
		}
		if ($(this).parent().next().hasClass('children') && $(this).parents('.parent').not('active')) {
			$(this).html('&#8211;');
			$(this).parent().next('.children').slideDown(600);
			$(this).parents('.parent').addClass('active');
		}
		return false;
	}, function(){
		if ($(this).parent().next().hasClass('sub-menu')) {
			$(this).html('+');
			$(this).parent().next('.sub-menu').slideUp(600);
			$(this).parents('.parent').removeClass('active');
		}
		if ($(this).parent().next().hasClass('children')) {
			$(this).html('+');
			$(this).parent().next('.children').slideUp(600);
			$(this).parents('.parent').removeClass('active');
		}
		return false;
	});
	
	bgSidebar();
	sidebar();
	sidebarOpen();
	
	//Meta Head
	if (document.width > 768) {
        $('.viewport').remove();
	}
	
	//Team
	$('body').bind('touchstart', function(e){
		if (!$(e.target).closest('.team-shortcode .team-member .worker-info').length) {
			$('.team-shortcode .team-member .worker-info').removeClass('hover');
		}
	});
	
	$('.team-shortcode .team-member .worker-info').bind('touchstart', function(){
		if ($(this).hasClass('hover')) {
			$(this).removeClass('hover');
		} else {
			$('.team-shortcode .team-member .worker-info').removeClass('hover');
			$(this).addClass('hover');
		}
	});
	
	$('.team-shortcode .team-member .worker-info').mouseenter(function(){
		$(this).addClass('hover');
    }).mouseleave(function(){
		$(this).removeClass('hover');
    });

	
	//Carousel next/prev button (not active)
	$('.prev-next').bind('touchstart', function(){
		$(this).removeClass('not-hover');
	});
	$('.prev-next').bind('touchend', function(){
		$(this).addClass('not-hover');
	});
	
	//Chart
	if ($('.graph-params .praph-param').length) {
		var line,
			lineX,
			lineY;
	
		var lineOne = [];
			
		$('.graph-params .praph-param').each( function () {
			lineX = $(this).attr('id');
			lineY = $(this).attr('value');
			lineOne.push([lineX, parseFloat(lineY)]);
		});
		
		line = lineOne;
		
		var xtitle = $('#chart-param .title-x').attr('value'),
			ytitle = $('#chart-param .title-y').attr('value'),
			lineColor = $('#chart-param .linecolor').attr('value');
		var plot1 = $.jqplot('chart', [line], {
			axes : {
				xaxis : {
					renderer      : $.jqplot.DateAxisRenderer,
					label         : xtitle,
					labelRenderer : $.jqplot.CanvasAxisLabelRenderer,
					tickOptions   : {
						formatString:'%b.'
					}
				},
				yaxis : {
					tickOptions : {
						formatString : ''
					},
					label : ytitle,
					labelRenderer : $.jqplot.CanvasAxisLabelRenderer,
				}
			},
			highlighter : {
				show          : true,
				sizeAdjust    : 10
			},
			cursor : {
				show          : false
			},
			series : [
				{
					lineWidth : 1,
					color     : lineColor,
				},
			],
			grid : {
				drawGridLines : false,
				gridLineColor : 'none',
				background    : 'none',
				borderColor   : '#999999',
				borderWidth   : 2,
				shadow        : false,
				renderer      : $.jqplot.CanvasGridRenderer,
			},
		});
	}
	
	//Resize Window
	$( window ).resize(function() {
		delay( function() {			
			if (document.width > 768) {
				$('.viewport').remove();
			} else {
				$('head').append('<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">');
			}
			
			//Chart
			if ($('.graph-params .praph-param').length) {
				plot1.replot( { resetAxes: true } );
			}
			
			//Sidebar
			sidebar();
			bgSidebar();
			if ($('body').width() >= 979 ) {
				$('#content').removeAttr('style', 'margin-left');
				$('#sidebar').removeClass('open');
				$('#sidebar').removeAttr('style', 'margin-right');
			}
			
			//Home restructured carousel
			$('#main .home-content .home-carousel .span4').each(function(){
				$(this).children('.agent').each( function(){
					$(this).appendTo($(this).parent().parent()).wrap('<div class="span4"></div>');
				});
			});
			$('#main .home-content .home-carousel .span4').each(function(){
				if ($(this).children('.agent').length == 0) {
					$(this).remove();
				}
			});
	
			$('#main .home-content .home-carousel .span3').each(function(){
				$(this).children('.property').each( function(){
					$(this).appendTo($(this).parent().parent()).wrap('<div class="span3"></div>');
				});
			});
			$('#main .home-content .home-carousel .span3').each(function(){
				if ($(this).children('.property').length == 0) {
					$(this).remove();
				}
			});
			
			//Home Tabs
			optionHomeMap();
			optionHomeAgents();
			optionHomeProperties();
			optionHomeProperty();
			optionHomeSliders();
			
			//Carousel
			carousel();
			properties();
			homeProperty();
			propertyView();
			homeCarousel();
			imgProperies();
			
			//Menu
			if ($('body').width() >= 979 ) {
				$('#second-menu').removeAttr('style', 'display');
				$('.second-bg').css('display', 'none');
			}
			moreMenu();
			if (!$('body').hasClass('main-menu-visible')) {
				$('#site-header .menu-button').click(function(){
					moreMenu();
				});
			}
			
			$('#main-menu .open-sub, #second-menu .open-sub').remove();
			if ($('body').width() <= 979 ) {
				$('#main-menu .sub-menu, #second-menu .sub-menu').prev('a').append('<span class="open-sub">+</span>');
			}
			
			$('#main-menu .open-sub , #second-menu .open-sub').toggle(function(){
				if ($('body').width() <= 979 ) {
					if ($(this).parent().next().hasClass('sub-menu') && $(this).parents('.parent').not('active')) {
						$(this).html('&#8211;');
						$(this).parent().next('.sub-menu').slideDown(600);
						$(this).parents('.parent').addClass('active');
					}
				}
				return false;
			}, function(){
				if ($('body').width() <= 979 ) {
					if ($(this).parent().next().hasClass('sub-menu')) {
						$(this).html('+');
						$(this).parent().next('.sub-menu').slideUp(600);
						$(this).closest('.parent').removeClass('active');
					}
				}
				return false;
			});
			
		}, 'resize' );
		
	});
	
	var delay = ( function() {
		var timeout = { };
		
		return function( callback, id, time ) {
			if( id !== null ) {
				time = ( time !== null ) ? time : 100;
				clearTimeout( timeout[ id ] );
				timeout[ id ] = setTimeout( callback, time );
			}
		};
	})();
});