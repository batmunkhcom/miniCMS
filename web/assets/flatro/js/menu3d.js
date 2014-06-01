(function ($) {
    var $this;
	var widthWindow = $(window).width();
	var responsive, clickable, skin, speed, vertical, easing, hoverIn, hoverOut;
	var heightOfMenu, widthOfMenu, topOfMenu, leftOfMenu, rightOfMenu, bottomOfMenu;

	$.cssEase = {
		'default':       'ease',
		'in':             'ease-in',
		'out':            'ease-out',
		'in-out':         'ease-in-out',
		'snap':           'cubic-bezier(0,1,.5,1)',
		// Penner equations
		'easeOutCubic':   'cubic-bezier(.215,.61,.355,1)',
		'easeInOutCubic': 'cubic-bezier(.645,.045,.355,1)',
		'easeInCirc':     'cubic-bezier(.6,.04,.98,.335)',
		'easeOutCirc':    'cubic-bezier(.075,.82,.165,1)',
		'easeInOutCirc':  'cubic-bezier(.785,.135,.15,.86)',
		'easeInExpo':     'cubic-bezier(.95,.05,.795,.035)',
		'easeOutExpo':    'cubic-bezier(.19,1,.22,1)',
		'easeInOutExpo':  'cubic-bezier(1,0,0,1)',
		'easeInQuad':     'cubic-bezier(.55,.085,.68,.53)',
		'easeOutQuad':    'cubic-bezier(.25,.46,.45,.94)',
		'easeInOutQuad':  'cubic-bezier(.455,.03,.515,.955)',
		'easeInQuart':    'cubic-bezier(.895,.03,.685,.22)',
		'easeOutQuart':   'cubic-bezier(.165,.84,.44,1)',
		'easeInOutQuart': 'cubic-bezier(.77,0,.175,1)',
		'easeInQuint':    'cubic-bezier(.755,.05,.855,.06)',
		'easeOutQuint':   'cubic-bezier(.23,1,.32,1)',
		'easeInOutQuint': 'cubic-bezier(.86,0,.07,1)',
		'easeInSine':     'cubic-bezier(.47,0,.745,.715)',
		'easeOutSine':    'cubic-bezier(.39,.575,.565,1)',
		'easeInOutSine':  'cubic-bezier(.445,.05,.55,.95)',
		'easeInBack':     'cubic-bezier(.6,-.28,.735,.045)',
		'easeOutBack':    'cubic-bezier(.175, .885,.32,1.275)',
		'easeInOutBack':  'cubic-bezier(.68,-.55,.265,1.55)'
	  };
    $.fn.menu3d = function (options) {

        $this = $(this);
        var opts = $.extend({}, $.fn.menu3d.defaults, options);
		opts.easing = $.cssEase[opts.easing];
		
		responsive = opts.responsive;
		clickable = opts.clickable;
		skin = opts.skin;
		speed = opts.speed;
		vertical = opts.vertical;
		easing = opts.easing;
		hoverIn = opts.hoverIn;
		hoverOut = opts.hoverOut;
		


		
		if (clickable) {
			$(document).click(function (e) {
				var liOpen = $(e.target).parents();
				if (!$(liOpen).hasClass('open')) {
					$.fn.menu3d.closeDropdown();	
				};
				
			});
		};



        if (opts.responsive) {
            $this.addClass('responsive');
        }
        else {
            $this.removeClass('responsive');
        }



        $.fn.menu3d.init($this);
        $.fn.menu3d.setVertical($this, opts.vertical, widthWindow);




        $this.removeClass(function (index, css) {
            return (css.match(/\bskin-\S+/g) || []).join(' ');
        });
        $this.addClass(opts.skin);


        //Sub menu
        heightOfMenu = $this.outerHeight();
        widthOfMenu = $this.outerWidth();
        topOfMenu = $this.offset().top;
        leftOfMenu = $this.offset().left;
        rightOfMenu = leftOfMenu + widthOfMenu;
        bottomOfMenu = topOfMenu + heightOfMenu;


        //$this.find('li > ul.sub').parent().prepend('<span class="arrow-icon"></span>');




        // Animate for all menu
		// Click feature
		if(opts.clickable){
			
			


			//main menu
			$this.find('> ul > li:not(.menu-non-dropdown):not(.no-link)').find('>a,>span').click(
				function(){			
					
					var li = $(this).parent();
					var isOpen = $(li).hasClass('open');
					
					
					// close li menu
					if(!isOpen){			
						$.fn.menu3d.closeDropdown(li);
						$.fn.menu3d.hoverIn(li);
						$(li).addClass('open');		

					 	return false;
					}	
					else{
						$.fn.menu3d.closeDropdown();
						return false;
					}					
				}
			);


			
			//Sub menu		
			$this.find('li > ul.sub').parent().click(
				function () {
					var li = $(this);
					var isOpenSub = $(li).hasClass('open');
					
					var dropdown = $(li).find('> ul');
					$(dropdown).click(function(){  isOpenSub = false; $(li).removeClass('open')  });
					
					if(isOpenSub){
						$.fn.menu3d.hoverOutSub(this);
						$(li).removeClass('open');
						$(li).find('ul.dropdown-menu').hide();	//close all sub menu
					}
					else{
						$.fn.menu3d.hoverInSub(this);
						$(li).addClass('open');
						
					}
				}
			);
			
		}
		else{
			// Hover feature
			//Sub menu
			$this.find('li > ul.sub').parent().hover(function () {
				$.fn.menu3d.hoverInSub(this);
			}, function () {
				$.fn.menu3d.hoverOutSub(this);
			});


			$this.find('> ul > li:not(.menu-non-dropdown):not(.no-link)').hover(
				function () {
					$.fn.menu3d.hoverIn(this);
				},
				function () {
					$.fn.menu3d.hoverOut(this);                
				}
			);
		}


    };
	
    $.fn.menu3d.init = function (obj) {
        $this = $(obj);
		

        $this.prepend('<div class="menuToggle">Menu <span style="float: right;">&#9776;</span></div>');
        $this.find(".txtSearch").focus(function () { $(this).val(''); }).blur(function () { $(this).val('Search...'); })
        $this.find('> ul > li:not(.menu-non-dropdown):not(.no-link):last').addClass('last');
        $this.find('> ul > li:first').addClass('first');

        //Mobile menu
        $this.find('.menuToggle').click(function () {
            $this.find('> ul').slideToggle();
        });
    };
	$.fn.menu3d.closeDropdown = function(notthis){				
		var menu = $this.find(' > ul > .open');
		if (notthis) {
			menu = $this.find(' > ul > .open').not(notthis);
		};
		
		$(menu).removeClass('open');
		$.fn.menu3d.hoverOut(menu);
		$(menu).find('.open').removeClass('open');
		$(menu).find('ul.dropdown-menu').hide();	//close all sub menu

	}
	$.fn.menu3d.hoverIn = function(li){
		var obj = $(li).find("> div:not(.movingout)");
		var hoverInOfMenu = hoverIn;
		var hoverOutOfMenu = hoverOut;

		
		//Animate custom for a menu
		if ($(obj).attr('animate-in') != undefined && $(obj).attr('animate-in').length != 0) {
			hoverInOfMenu = $(obj).attr('animate-in');
		}
		if ($(obj).attr('animate-out') != undefined && $(obj).attr('animate-out').length != 0) {
			hoverOutOfMenu = $(obj).attr('animate-in');
		}
		


		if (hoverInOfMenu == 'slideDown') {
			$(obj)
			.css('z-index', 100)
			.removeClass(hoverOutOfMenu)
			.slideDown(speed / 2)
			.addClass(hoverInOfMenu);
		}
		else {
			$(obj)
			.css('z-index', 100)
			.show().removeClass(hoverOutOfMenu)
			.css({
				'animation-fill-mode': 'both',
				'animation-duration': speed + 'ms',
				'animation-timing-function': easing
			})
			.addClass(hoverInOfMenu);


			var dropdownmenu = $(li).find('> .dropdown-menu');
			var width = $(dropdownmenu).outerWidth();
			var height = $(dropdownmenu).outerHeight();
			if (height){
			var left = $(dropdownmenu).parent().offset().left;
			
			var top = $(dropdownmenu).parent().offset().top;
			
			var bottom = top + height;
					};
			$(dropdownmenu).css('left', '');

			if (widthWindow > 768) {
				if (vertical) {
					if (bottom >= bottomOfMenu) {
						var newTop = bottom - bottomOfMenu + 1;
					/*	if (height > heightOfMenu) {							
							$(li).css('position', '');
							$(dropdownmenu).css('top', '0px');
						}
						else {
							$(dropdownmenu).css('top','0px' );
						} */
					}
				}
				else {
					if (right >= rightOfMenu) {
						$(dropdownmenu).css('right', '-1px');
					}
				}
			}
		}
	};

	$.fn.menu3d.hoverOut = function(li)
	{
		if($(li).length > 0){		
			var div = $(li).find("> div");
			var hoverInOfMenu = hoverIn;
			var hoverOutOfMenu = hoverOut;
			if ($(div).attr('animate-in') != undefined && $(div).attr('animate-in').length != 0) {
				hoverInOfMenu = $(div).attr('animate-in');
			}
			if ($(div).attr('animate-out') != undefined && $(div).attr('animate-out').length != 0) {
				hoverOutOfMenu = $(div).attr('animate-out');
			}
	
			var obj = $(li).find("> div." + hoverInOfMenu);
	
			if (hoverOutOfMenu == 'none') {
				$(obj).removeClass(hoverInOfMenu).hide((speed / 2));
			}
			else if (hoverOutOfMenu == 'slideUp') {
				$(obj).removeClass(hoverInOfMenu).slideUp((speed / 2));
			}
			else {
				$(obj).css('z-index', 1)
					.removeClass(hoverInOfMenu)
					.css({
						'animation-fill-mode': 'both',
						'animation-duration': (speed / 2) + 'ms',
						'animation-timing-function': easing
	
					})
					.addClass(hoverOutOfMenu + ' movingout');
			}
	
			animateRun(obj, hoverOutOfMenu, speed);
	
			var dropdownmenu = $(li).find('.dropdown-menu');
			var height2 = $(dropdownmenu).outerHeight();
			if (height2){
			var left = $(dropdownmenu).offset().left;
			var width = $(dropdownmenu).outerWidth();
			var right = left + width;
				}
			if (widthWindow > 768) {
				if (right >= widthWindow) {
					$(dropdownmenu).css('left', '-1px');
				}
			}
			$(dropdownmenu).parent().width('');
			$(dropdownmenu).width('');
		}
	};
   	
	$.fn.menu3d.hoverInSub = function(li){
		
		 $(li).find('> ul').stop(true, true).slideDown(100);

		var dropdownmenu = $(li).find('> ul');
		var left = $(li).offset().left;
		var width = $(li).outerWidth();
		var right = left + width + width + 80;
		var widthWindow = $(window).width();
		if (widthWindow > 768) {
			if (right > widthWindow) {
				$(dropdownmenu).css('left', 'auto');
				$(dropdownmenu).css('right', '100%');
			}
			else {
				$(dropdownmenu).css('left', '100%');
				$(dropdownmenu).css('right', 'auto');
			}
		}
	};
	
	$.fn.menu3d.hoverOutSub = function(li){
		$(li).find('> ul').stop(false, false).slideUp(100);
	}

    $.fn.menu3d.setVertical = function (obj, vertical, widthWindow) {
       // $this = $(obj);
      // if (vertical && widthWindow > 768) {
        //   $this.addClass('vertical');
        //   $this.find('> ul > li').css({ 'float': 'none', 'display': 'block' });
      // }
      // else {
      //     $this.removeClass('vertical');
      //  }
    };

    // Default options
    $.fn.menu3d.defaults = {
        //responsive in mobile devices
        responsive: true,
		
		//click or hover?
		clickable: false,

        skin: 'skin-blue-dark',

        // Duration per element
        speed: 300,

        //Horizontal or vertical
        vertical: true,
      
        // Animation curve
        easing: 'default',

        //Animation keyframe for hover in
        hoverIn: 'fadeIn',

        //Animation keyframe for hover out
        hoverOut: 'fadeOut'
    };
    
    function animateRun(obj, animateClass, s) {
        setTimeout(function () { $(obj).removeClass('movingout ' + animateClass).hide(); }, s / 2);
    }
})(jQuery);



