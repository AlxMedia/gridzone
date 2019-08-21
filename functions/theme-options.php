<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'gridzone', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'gridzone' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'gridzone' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'gridzone' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'gridzone' ),
	'button_url'  => 'https://wordpress.org/support/theme/gridzone/reviews/?filter=5#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'gridzone' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'gridzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'gridzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'gridzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'gridzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'gridzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'gridzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'gridzone' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'gridzone' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Responsive Layout
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_html__( 'Responsive Layout', 'gridzone' ),
	'description'	=> esc_html__( 'Mobile and tablet optimizations (responsive.css)', 'gridzone' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'gridzone' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'gridzone' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'gridzone' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'gridzone' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'gridzone' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'gridzone' ),
	'description'	=> esc_html__( 'Your blog heading', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'gridzone' ),
	'description'	=> esc_html__( 'Your blog subheading', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'gridzone' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'gridzone' ),
	'description'	=> esc_html__( '2 columns of widgets', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'gridzone' ),
	'description'	=> esc_html__( '2 columns of widgets', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'gridzone' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'gridzone' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'gridzone' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'gridzone' ),
		'categories'=> esc_html__( 'Related by categories', 'gridzone' ),
		'tags'		=> esc_html__( 'Related by tags', 'gridzone' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'gridzone' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'gridzone' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'gridzone' ),
		'content'	=> esc_html__( 'Below content', 'gridzone' ),
	),
) );
// Header: Search
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'gridzone' ),
	'description'	=> esc_html__( 'Header search button', 'gridzone' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'gridzone' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'gridzone' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'gridzone' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'gridzone' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'gridzone' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'gridzone' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'gridzone' ),
	'description'	=> esc_html__( 'A short description of you', 'gridzone' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'gridzone' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'gridzone' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'gridzone' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'gridzone' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'gridzone' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'gridzone' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'gridzone' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'gridzone' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'gridzone' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'gridzone' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'gridzone' ),
	'description'	=> esc_html__( 'Footer credit text', 'gridzone' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'gridzone' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'gridzone' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'gridzone' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'gridzone' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'gridzone' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'gridzone' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'gridzone' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'gridzone' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'gridzone' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function gridzone_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'gridzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'gridzone' ),
		'description'	=> esc_html__( '(is_home) Primary', 'gridzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridzone' ),
	) );
	Kirki::add_field( 'gridzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'gridzone' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'gridzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridzone' ),
	) );
	Kirki::add_field( 'gridzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'gridzone' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'gridzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridzone' ),
	) );
	Kirki::add_field( 'gridzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'gridzone' ),
		'description'	=> esc_html__( '(is_category) Primary', 'gridzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridzone' ),
	) );
	Kirki::add_field( 'gridzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'gridzone' ),
		'description'	=> esc_html__( '(is_search) Primary', 'gridzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridzone' ),
	) );
	Kirki::add_field( 'gridzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'gridzone' ),
		'description'	=> esc_html__( '(is_404) Primary', 'gridzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridzone' ),
	) );
	Kirki::add_field( 'gridzone_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'gridzone' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'gridzone' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'gridzone' ),
	) );
	
 } 
add_action( 'init', 'gridzone_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'gridzone' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'gridzone' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'gridzone' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'gridzone' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'gridzone' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'gridzone' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'gridzone' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'gridzone' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'gridzone' ) . ' <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank"><strong>' . esc_html__( 'View All', 'gridzone' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'gridzone' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'gridzone' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'gridzone' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'gridzone' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'gridzone' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'gridzone' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Dark
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark',
	'label'			=> esc_html__( 'Dark Theme', 'gridzone' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'gridzone' ),
	'description'	=> esc_html__( 'Select font for the theme', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'gridzone' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'gridzone' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'gridzone' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'gridzone' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'gridzone' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'gridzone' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'gridzone' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'gridzone' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'gridzone' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'gridzone' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'gridzone' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'gridzone' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'gridzone' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'gridzone' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'gridzone' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'gridzone' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'gridzone' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'gridzone' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'gridzone' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'gridzone' ),
		'arial'					=> esc_html__( 'Arial', 'gridzone' ),
		'georgia'				=> esc_html__( 'Georgia', 'gridzone' ),
		'verdana'				=> esc_html__( 'Verdana', 'gridzone' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'gridzone' ),
	),
) );
// Styling: Border Radius
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'border-radius',
	'label'			=> esc_html__( 'Border Radius', 'gridzone' ),
	'description'	=> esc_html__( 'Change border radius of theme elements', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '10',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '30',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'gridzone' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Header Color
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Social Sidebar Color
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-social-sidebar',
	'label'			=> esc_html__( 'Social Sidebar Color', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Post Item Color
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-post-item',
	'label'			=> esc_html__( 'Post Item Color', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Link Color
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-link',
	'label'			=> esc_html__( 'Link Color', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '#000000',
) );
// Styling: Background Color
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '#f1f1f1',
) );
// Styling: Single Box Max-width
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'single-box-width',
	'label'			=> esc_html__( 'Single Box Max-width', 'gridzone' ),
	'description'	=> esc_html__( 'Max-width of the box around the content on single posts', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '940',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Single Content Max-width
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'single-content-width',
	'label'			=> esc_html__( 'Single Content Max-width', 'gridzone' ),
	'description'	=> esc_html__( 'Max-width of the content on single posts', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '740',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Page Box Max-width
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'page-box-width',
	'label'			=> esc_html__( 'Page Box Max-width', 'gridzone' ),
	'description'	=> esc_html__( 'Max-width of the box around the content on pages', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '940',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Page Content Max-width
Kirki::add_field( 'gridzone_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'page-content-width',
	'label'			=> esc_html__( 'Page Content Max-width', 'gridzone' ),
	'description'	=> esc_html__( 'Max-width of the content on pages', 'gridzone' ),
	'section'		=> 'styling',
	'default'		=> '740',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
