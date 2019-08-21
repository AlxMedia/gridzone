<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'gridzone_hex2rgb' ) ) {

	function gridzone_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	


/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'gridzone_enqueue_google_fonts' ) ) {

	function gridzone_enqueue_google_fonts () {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { wp_enqueue_style( 'titillium-web-ext', '//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }		
			if ( get_theme_mod( 'font' ) == 'droid-serif' )	{ wp_enqueue_style( 'droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' ); }				
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' )	{ wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'lato' ) { wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' ); }
			if ( get_theme_mod( 'font' ) == 'raleway' )	{ wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu' ) { wp_enqueue_style( 'ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) { wp_enqueue_style( 'ubuntu-cyr', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,cyrillic-ext' ); }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) ) { wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-cyr' ) { wp_enqueue_style( 'roboto-cyr', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed' ) { wp_enqueue_style( 'roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) { wp_enqueue_style( 'roboto-condensed-cyr', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab' ) { wp_enqueue_style( 'roboto-slab', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) { wp_enqueue_style( 'roboto-slab-cyr', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display' ) { wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) { wp_enqueue_style( 'playfair-display-cyr', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,cyrillic' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans' ) { wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) { wp_enqueue_style( 'open-sans-cyr', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif' ) { wp_enqueue_style( 'pt-serif', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) { wp_enqueue_style( 'pt-serif-cyr', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic-ext' ); }
		}
	}	
	
}
add_action( 'wp_enqueue_scripts', 'gridzone_enqueue_google_fonts' ); 	


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'gridzone_dynamic_css' ) ) {

	function gridzone_dynamic_css() {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
		
			// rgb values
			$color_1 = get_theme_mod('color-1');
			$color_1_rgb = gridzone_hex2rgb($color_1);
			
			// start output
			$styles = '';		
			
			// google fonts
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { $styles .= 'body { font-family: "Titillium Web", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'droid-serif' ) { $styles .= 'body { font-family: "Droid Serif", serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' ) { $styles .= 'body { font-family: "Source Sans Pro", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'lato' ) { $styles .= 'body { font-family: "Lato", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'raleway' ) { $styles .= 'body { font-family: "Raleway", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'ubuntu' ) || ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) ) { $styles .= 'body { font-family: "Ubuntu", Arial, sans-serif; }'."\n"; }	
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) || ( get_theme_mod( 'font' ) == 'roboto-cyr' ) ) { $styles .= 'body { font-family: "Roboto", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-condensed' ) || ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) ) { $styles .= 'body { font-family: "Roboto Condensed", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-slab' ) || ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) ) { $styles .= 'body { font-family: "Roboto Slab", Arial, sans-serif; }'."\n"; }			
			if ( ( get_theme_mod( 'font' ) == 'playfair-display' ) || ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) ) { $styles .= 'body { font-family: "Playfair Display", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'open-sans' ) || ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) )	{ $styles .= 'body { font-family: "Open Sans", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'pt-serif' ) || ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) ) { $styles .= 'body { font-family: "PT Serif", serif; }'."\n"; }	
			if ( get_theme_mod( 'font' ) == 'arial' ) { $styles .= 'body { font-family: Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'georgia' ) { $styles .= 'body { font-family: Georgia, serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'verdana' ) { $styles .= 'body { font-family: Verdana, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'tahoma' ) { $styles .= 'body { font-family: Tahoma, sans-serif; }'."\n"; }
			
			// content max-width
			if ( get_theme_mod('content-width','740') != '740' ) {
				$styles .= '
.entry-header,
.entry-content,
.entry-footer,
.pagination,
.page-title,
.page-title-inner,
.front-widgets { max-width: '.esc_attr( get_theme_mod('content-width') ).'px; }
				'."\n";
			}
			// single box max-width
			if ( get_theme_mod('single-box-width','940') != '940' ) {
				$styles .= '
.single .post-wrapper { max-width: '.esc_attr( get_theme_mod('single-box-width') ).'px; }
				'."\n";
			}
			// single content max-width
			if ( get_theme_mod('single-content-width','740') != '740' ) {
				$styles .= '
.single .entry-header,
.single .entry-footer,
.single .entry > *:not(.alignfull) { max-width: '.esc_attr( get_theme_mod('single-content-width') ).'px; }
				'."\n";
			}
			// page box max-width
			if ( get_theme_mod('page-box-width','940') != '940' ) {
				$styles .= '
.page .post-wrapper { max-width: '.esc_attr( get_theme_mod('page-box-width') ).'px; }
				'."\n";
			}
			// page content max-width
			if ( get_theme_mod('page-content-width','740') != '740' ) {
				$styles .= '
.page .entry-header,
.page .entry-footer,
.page .entry > *:not(.alignfull) { max-width: '.esc_attr( get_theme_mod('page-content-width') ).'px; }
				'."\n";
			}
			// header color
			if ( get_theme_mod('color-header','#ffffff') != '#ffffff' ) {
				$styles .= '
#header { background: '.esc_attr( get_theme_mod('color-header') ).'; border-bottom: 0; }
#wrapper { border-top-color: '.esc_attr( get_theme_mod('color-header') ).';  }
.site-title a { color: #fff; }
.site-description { color: rgba(255,255,255,0.6); }
@media only screen and (min-width: 720px) {
	#nav-header .nav > li > a { color: rgba(255,255,255,0.7); }	
	#nav-header .nav > li > a:hover, 
	#nav-header .nav > li:hover > a { color: #fff; }
	#nav-header .nav > li > a:hover, 
	#nav-header .nav > li:hover > a { color: #fff; } 
	#nav-header .nav > li.current_page_item > a, 
	#nav-header .nav > li.current-menu-item > a,
	#nav-header .nav > li.current-menu-ancestor > a,
	#nav-header .nav > li.current-post-parent > a { color: #fff; }
}
				'."\n";
			}
			// social sidebar color
			if ( get_theme_mod('color-social-sidebar','#ffffff') != '#ffffff' ) {
				$styles .= '
@media only screen and (min-width: 720px) {
	.s2,
	.toggle-search,
	.toggle-search.active,
	.search-expand { background: '.esc_attr( get_theme_mod('color-social-sidebar') ).'; }
	.search-expand { border: 1px solid rgba(255,255,255,0.2); border-left: 0; left: 69px; padding-top: 12px; padding-bottom: 12px; }
	.s2 .social-links .social-tooltip { color: rgba(255,255,255,0.75); }
	.s2 .social-links .social-tooltip:hover { color: #fff; }
	.toggle-search { border-color: rgba(255,255,255,0.2); color: #fff; }
	.toggle-search:hover, 
	.toggle-search.active { color: rgba(255,255,255,0.75); }
	.s2 .social-links li:before { background: rgba(255,255,255,0.15); }
}
				'."\n";
			}
			// post item color
			if ( get_theme_mod('color-post-item','#ffffff') != '#ffffff' ) {
				$styles .= '
.masonry-item .masonry-inner { background: '.esc_attr( get_theme_mod('color-post-item') ).'; }
.masonry-item .entry-title a { color: rgba(255,255,255,1); }
.masonry-item .entry-meta,
.masonry-item .entry-meta li a { color: rgba(255,255,255,0.6); }
				'."\n";
			}
			// link color
			if ( get_theme_mod('color-link','#000000') != '#000000' ) {
				$styles .= '
.entry a { color: '.esc_attr( get_theme_mod('color-link') ).'; }
				'."\n";
			}
			// background color
			if ( get_theme_mod('color-background','#f1f1f1') != '#f1f1f1' ) {
				$styles .= '
body { background: '.esc_attr( get_theme_mod('color-background') ).'; }
				'."\n";
			}
			// border radius
			if ( get_theme_mod('border-radius','10') != '10' ) {
				$styles .= '
.toggle-search,
#profile-image img,
.masonry-item .masonry-inner,
.masonry-item .entry-category a,
.pagination ul li a,
.post-wrapper,
.author-bio,
.sharrre-container,
.post-nav,
.comment-tabs li a,
#commentform,
.alx-tab img,
.alx-posts img,
.infinite-scroll #infinite-handle span { border-radius: '.esc_attr( get_theme_mod('border-radius') ).'px; }
.masonry-item img { border-radius: '.esc_attr( get_theme_mod('border-radius') ).'px '.esc_attr( get_theme_mod('border-radius') ).'px 0 0; }
.toggle-search.active,
.col-2cl .sidebar .widget { border-radius:  '.esc_attr( get_theme_mod('border-radius') ).'px 0 0 '.esc_attr( get_theme_mod('border-radius') ).'px; }
.search-expand,
.col-2cr .sidebar .widget { border-radius:  0 '.esc_attr( get_theme_mod('border-radius') ).'px '.esc_attr( get_theme_mod('border-radius') ).'px 0; }
#footer-bottom #back-to-top { border-radius: 0 0 '.esc_attr( get_theme_mod('border-radius') ).'px '.esc_attr( get_theme_mod('border-radius') ).'px; }
				'."\n";
			}
			// header logo max-height
			if ( get_theme_mod('logo-max-height','60') != '60' ) {
				$styles .= '.site-title a img { max-height: '.esc_attr( get_theme_mod('logo-max-height') ).'px; }'."\n";
			}
			// header text color
			if ( get_theme_mod( 'header_textcolor' ) != '' ) {
				$styles .= '.site-title a, .site-description { color: #'.esc_attr( get_theme_mod( 'header_textcolor' ) ).'; }'."\n";
			}
			if ( get_theme_mod('dark','off') == 'on' ) { 
				wp_add_inline_style( 'gridzone-dark', $styles );
			} else {
				wp_add_inline_style( 'gridzone-style', $styles );
			}
		}
	}
	
}
add_action( 'wp_enqueue_scripts', 'gridzone_dynamic_css' );
