/*
	scripts.js
	
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	
	Copyright: (c) 2013 Alexander "Alx" Agnarson, http://alx.media
*/

"use strict";

jQuery(document).ready(function($) {

/*  Toggle header search
/* ------------------------------------ */
	$('.toggle-search').on('click', function() {
		$('.toggle-search').toggleClass('active');
		$('.search-expand').fadeToggle(250);
            setTimeout(function(){
                $('.search-expand input').focus();
            }, 300);
	});

/*  Scroll to top
/* ------------------------------------ */
	$('a#back-to-top').on('click', function() {
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});
	
/*  Tabs widget
/* ------------------------------------ */	
	(function() {
		var $tabsNav       = $('.alx-tabs-nav'),
			$tabsNavLis    = $tabsNav.children('li'),
			$tabsContainer = $('.alx-tabs-container');

		$tabsNav.each(function() {
			var $this = $(this);
			$this.next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).show();
			$this.children('li').first().addClass('active').stop(true,true).show();
		});

		$tabsNavLis.on('click', function(e) {
			var $this = $(this);

			$this.siblings().removeClass('active').end()
			.addClass('active');
			
			$this.parent().next().children('.alx-tab').stop(true,true).hide()
			.siblings( $this.find('a').attr('href') ).fadeIn();
			e.preventDefault();
		}).children( window.location.hash ? 'a[href="' + window.location.hash + '"]' : 'a:first' ).trigger('click');

	})();
	
/*  Comments / pingbacks tabs
/* ------------------------------------ */	
	$('.comment-tabs li').on('click', function() {
		$('.comment-tabs li').removeClass('active');
		$(this).addClass('active');
		$('.comment-tab').hide();
		var selected_tab = $(this).find('a').attr('href');
		$(selected_tab).fadeIn();
		return false;
	});

/*  Table odd row class
/* ------------------------------------ */
	$('table tr:odd').addClass('alt');

/*  Fitvids
/* ------------------------------------ */
	function responsiveVideo() {
			if ( $().fitVids ) {
				$('#wrapper').fitVids();
			}	
		}
		
	responsiveVideo();
	
/*  Header Sticky
/* ------------------------------------ */	
	$('.logged-out #header-sticky').stickThis({
		top:            0,
		minscreenwidth: 1081,
		maxscreenwidth: 999999,
		zindex:         99,
		debugmode:      false,
		pushup:         ''
	});
	
	$('.admin-bar #header-sticky').stickThis({
		top:            32,
		minscreenwidth: 1081,
		maxscreenwidth: 999999,
		zindex:         99,
		debugmode:      false,
		pushup:         ''
	});

/*  Masonry
/* ------------------------------------ */
	$('.masonry').imagesLoaded( function() {
		
		$('.masonry').masonry({
			// options
			itemSelector: '.masonry-item'
		});
		
	});

/*  Jetpack infinite scroll
/* ------------------------------------ */
	var infiniteCount = 2;
	$( document.body ).on( 'post-load', function () {
		var elements = $('.infinite-wrap.infinite-view-' + infiniteCount + ' article');		
		
		$('#masonry').imagesLoaded().done( function(){
			$('#masonry').masonry( 'appended', elements );
			infiniteCount++;
		});
	});
	
/*  Hide on scroll down
/* ------------------------------------ */
	var scrollTimeOut = true,
		lastYPos = 0,
		yPos = 0,
		yPosDelta = 5,
		nav = $('.hide-on-scroll-down'),
		navHeight = nav.outerHeight(),
		setNavClass = function() {
			scrollTimeOut = false;
			yPos = $(window).scrollTop();

			if(Math.abs(lastYPos - yPos) >= yPosDelta) {
				if (yPos > lastYPos && yPos > navHeight){
					nav.addClass('hide-scroll');
				} else {
					nav.removeClass('hide-scroll');
				}
				lastYPos = yPos;
			}
		};

	$(window).scroll(function(e){
		scrollTimeOut = true;
	});

	setInterval(function() {
		if (scrollTimeOut) {
			setNavClass();
		}

	}, 250);

/*  Slick image slide
/* ------------------------------------ */	
	$('.slick-image-slide').each( function() {
        $( this ).slick( {
            dots: true,
			adaptiveHeight: true,
            appendArrows: $(this).parents('.slick-image-slide-wrapper').find('.slick-image-slide-nav'),
			appendDots: $(this).parents('.slick-image-slide-wrapper').find('.slick-image-slide-dots')
        } );
    } );

/*  Trap focus
/* ------------------------------------ */	
	// add all the elements inside modal which you want to make focusable
	const  focusableElements =
		'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';
	const modal = document.querySelector('.search-trap-focus'); // select the modal by it's id

	if ( modal ) { 
		const firstFocusableElement = modal.querySelectorAll(focusableElements)[0]; // get first element to be focused inside modal
		const focusableContent = modal.querySelectorAll(focusableElements);
		const lastFocusableElement = focusableContent[focusableContent.length - 1]; // get last element to be focused inside modal


		document.addEventListener('keydown', function(e) {
		  let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

		  if (!isTabPressed) {
			return;
		  }

		  if (e.shiftKey) { // if shift key pressed for shift + tab combination
			if (document.activeElement === firstFocusableElement) {
			  lastFocusableElement.focus(); // add focus for the last focusable element
			  e.preventDefault();
			}
		  } else { // if tab key is pressed
			if (document.activeElement === lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
			  firstFocusableElement.focus(); // add focus for the first focusable element
			  e.preventDefault();
			}
		  }
		});	
	}
	
});