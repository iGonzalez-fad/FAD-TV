<?php
/**
 * progression Theme Customizer
 *
 * @package progression
 */

function adding_progression_google_fonts_customizer( $wp_customize ) {
    
    $wp_customize->add_section( 'progression-studios-dashboard-search', array(
    	'title'          => esc_html__( 'Search Options', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_header_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    $wp_customize->add_section( 'progression-studios-navigation-font', array(
    	'title'          => esc_html__( 'Navigation', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_header_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    $wp_customize->add_section( 'progression-studios-sub-navigation-font', array(
    	'title'          => esc_html__( 'Sub-Navigation', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_header_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    $wp_customize->add_section( 'progression-studios-nav-btn-font', array(
        'title'       => esc_html__('Button in Navigation', 'vayvo-progression'),
    	'panel'          => 'progression_studios_header_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );

    
    $wp_customize->add_section( 'progression-studios-top-header-font', array(
    	'title'          => esc_html__( 'Top Header Options', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_header_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    $wp_customize->add_section( 'progression-studios-body-font', array(
    	'title'          => esc_html__( 'Body Main', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_body_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    $wp_customize->add_section( 'progression-studios-page-title', array(
    	'title'          => esc_html__( 'Page Title', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_body_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    $wp_customize->add_section( 'progression-studios-widgets-font', array(
    	'title'          => esc_html__( 'Footer Main', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_footer_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
	
    $wp_customize->add_section( 'progression-studios-footer-nav-font', array(
    	'title'          => esc_html__( 'Footer Navigation', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_footer_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    $wp_customize->add_section( 'progression-studios-default-headings', array(
    	'title'          => esc_html__( 'H1-H6 Headings', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_body_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    $wp_customize->add_section( 'progression-studios-sidebar-headings', array(
    	'title'          => esc_html__( 'Sidebar Options', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_body_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    

    
    $wp_customize->add_section( 'progression-studios-button-typography', array(
    	'title'          => esc_html__( 'Button/Input Styles', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_body_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    $wp_customize->add_section( 'progression-studios-blog-headings', array(
    	'title'          => esc_html__( 'Default Layout Styles', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_blog_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    $wp_customize->add_section( 'progression-studios-blog-post-title', array(
    	'title'          => esc_html__( 'Blog Post Page Title', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_blog_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    $wp_customize->add_section( 'progression-studios-blog-post-options', array(
    	'title'          => esc_html__( 'Blog Post Options', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_blog_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    
    
    $wp_customize->add_section( 'progression-studios-blog-post-styles', array(
    	'title'          => esc_html__( 'Blog Post Styles', 'vayvo-progression' ),
    	'panel'          => 'progression_studios_blog_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    

    $wp_customize->add_section( 'progression-studios-shop-index-styles', array(
    	'title'          => esc_html__( 'Shop Index Styles', 'vayvo-progression' ),
    	'panel'          => 'woocommerce', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    $wp_customize->add_section( 'progression-studios-shop-styles', array(
    	'title'          => esc_html__( 'Shop Post Styles', 'vayvo-progression' ),
    	'panel'          => 'woocommerce', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    
    $wp_customize->add_section( 'progression-studios-video-index-options', array(
        'title'       => esc_html__('Video Index Options', 'vayvo-progression'),
    	'panel'          => 'progression_studios_videos_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );
    
    $wp_customize->add_section( 'progression-studios-video-post-options', array(
        'title'       => esc_html__('Video Post Options', 'vayvo-progression'),
    	'panel'          => 'progression_studios_videos_panel', // Not typically needed.
        'priority'       => 50,
    	) 
    );

	
    

}
add_action( 'customize_register', 'adding_progression_google_fonts_customizer' );


/**
 * How to add a font control to your tab
 *
 * @see  parse_font_control_array() - in class EGF_Register_Options
 *       in includes/class-egf-register-options.php to see the full
 *       properties you can add for each font control.
 *
 *
 * @param   array $controls - Existing Controls.
 * @return  array $controls - Controls with controls added/removed.
 *
 * @since 1.0
 * @version 1.0
 *
 */
function progression_studios_add_control_to_tab( $controls ) {

    /**
     * 1. Removing default styles because we add-in our own
     */
    unset( $controls['tt_default_body'] );
    unset( $controls['tt_default_heading_1'] );
    unset( $controls['tt_default_heading_2'] );
    unset( $controls['tt_default_heading_3'] );
    unset( $controls['tt_default_heading_4'] );
    unset( $controls['tt_default_heading_5'] );
    unset( $controls['tt_default_heading_6'] );
	 
	 
    /**
     * 2. Now custom examples that are theme specific
     */
	 
	
    $controls['progression_studios_body_font_family'] = array(
        'name'       => 'progression_studios_body_font_family',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Body Font', 'vayvo-progression'),
        'tab'        => 'progression-studios-body-font',
        'properties' => array( 'selector'   => 'body,  body input, body textarea, select' ),
 		 
    );
	 
    $controls['progression_studios_heading_h1'] = array(
        'name'       => 'progression_studios_heading_h1',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Heading 1', 'vayvo-progression'),
        'tab'        => 'progression-studios-default-headings',
        'properties' => array( 'selector'   => 'h1' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	
    $controls['progression_studios_heading_h2'] = array(
        'name'       => 'progression_studios_heading_h2',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Heading 2', 'vayvo-progression'),
        'tab'        => 'progression-studios-default-headings',
        'properties' => array( 'selector'   => 'h2' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	
    $controls['progression_studios_heading_h3'] = array(
        'name'       => 'progression_studios_heading_h3',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Heading 3', 'vayvo-progression'),
        'tab'        => 'progression-studios-default-headings',
        'properties' => array( 'selector'   => 'h3' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	
    $controls['progression_studios_heading_h4'] = array(
        'name'       => 'progression_studios_heading_h4',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Heading 4', 'vayvo-progression'),
        'tab'        => 'progression-studios-default-headings',
        'properties' => array( 'selector'   => 'h4' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	 
    $controls['progression_studios_heading_h5'] = array(
        'name'       => 'progression_studios_heading_h5',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Heading 5', 'vayvo-progression'),
        'tab'        => 'progression-studios-default-headings',
        'properties' => array( 'selector'   => 'h5' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	 
    $controls['progression_studios_heading_h6'] = array(
        'name'       => 'progression_studios_heading_h6',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Heading 6', 'vayvo-progression'),
        'tab'        => 'progression-studios-default-headings',
        'properties' => array( 'selector'   => 'h6' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	 
	 
	 
    $controls['progression_studios_page_title_font_family'] = array(
        'name'       => 'progression_studios_page_title_font_family',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Page Title Font', 'vayvo-progression'),
        'tab'        => 'progression-studios-page-title',
        'properties' => array( 'selector'   => '#page-title-pro h1' ),
 		 
    );
	 
	 
    $controls['progression_studios_page_sub_title_font_family'] = array(
        'name'       => 'progression_studios_page_sub_title_font_family',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Page Sub-Title Font', 'vayvo-progression'),
        'tab'        => 'progression-studios-page-title',
        'properties' => array( 'selector'   => '#page-title-pro h4' ),
 		 
    );
	 
	 
	 
	 
    $controls['progression_studios_nav_font_family'] = array(
        'name'       => 'progression_studios_nav_font_family',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Navigation Font Family', 'vayvo-progression'),
        'tab'        => 'progression-studios-navigation-font',
        'properties' => array( 'selector'   => '#vayvo-landing-mobile-login-logout-header a.arm_form_popup_link, #vayvo-header-user-profile-login a.arm_form_popup_link, #header-user-profile-click, #main-nav-mobile, ul.progression-studios-call-to-action li a, #progression-studios-header-search-icon i.pe-7s-search span, #progression-studios-header-login-container a.progresion-studios-login-icon span, nav#site-navigation, nav#progression-studios-right-navigation' ),
 		 
    );

	 
    $controls['progression_studios_sub_nav_font_family'] = array(
        'name'       => 'progression_studios_sub_nav_font_family',
 	'type'        => 'font',
        'title'      =>  esc_html__('Sub-Navigation Font Family', 'vayvo-progression'),
        'tab'        => 'progression-studios-sub-navigation-font',
        'properties' => array( 'selector'   => '#header-user-profile-menu ul li a, ul#progression-studios-panel-login, .sf-menu ul, ul.mobile-menu-pro li a' ),
 	
    );
	 

	 



	 
    $controls['progression_studios_sidebar_heading'] = array(
        'name'       => 'progression_studios_sidebar_heading',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Sidebar Heading', 'vayvo-progression'),
        'tab'        => 'progression-studios-sidebar-headings',
        'properties' => array( 'selector'   => '.sidebar h4.widget-title, .sidebar h2.widget-title' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	 
	 
    $controls['progression_studios_sidebar_default'] = array(
        'name'       => 'progression_studios_sidebar_default',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Sidebar Default Text', 'vayvo-progression'),
        'tab'        => 'progression-studios-sidebar-headings',
        'properties' => array( 'selector'   => '.sidebar' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	 
	 
    $controls['progression_studios_sidebar_link'] = array(
        'name'       => 'progression_studios_sidebar_link',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Sidebar Default Link', 'vayvo-progression'),
        'tab'        => 'progression-studios-sidebar-headings',
        'properties' => array( 'selector'   => '.sidebar a' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	 
    $controls['progression_studios_sidebar_link_hover'] = array(
        'name'       => 'progression_studios_sidebar_link_hover',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Sidebar Link Hover', 'vayvo-progression'),
        'tab'        => 'progression-studios-sidebar-headings',
        'properties' => array( 'selector'   => '.sidebar ul li.current-cat, .sidebar ul li.current-cat a, .sidebar a:hover' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			
 			),
    );
	 
	 
	 
	 
    $controls['progression_studios_button_font_family'] = array(
        'name'       => 'progression_studios_button_font_family',
 	'type'        => 'font',
        'title'      =>  esc_html__('Button Font Family', 'vayvo-progression'),
        'tab'        => 'progression-studios-button-typography',
        'properties' => array( 'selector'   => '#all-reviews-button-progression, a#video-post-play-text-btn, #video-social-sharing-button, button.wishlist-button-pro, .wp-block-button a.wp-block-button__link, #boxed-layout-pro .form-submit input#submit, #boxed-layout-pro button.button, #boxed-layout-pro a.button, .progression-studios-shop-overlay-buttons a.added_to_cart, .infinite-nav-pro a, .progression-studios-blog-excerpt a.more-link, .tags-progression a, .tagcloud a, .post-password-form input[type=submit], #respond input.submit, .wpcf7-form input.wpcf7-submit' ),
 	'default' => array(
		'subset'                     => 'latin',
		
 		),
    );
    
	 
	 
	 
    $controls['progression_studios_blog_title_font'] = array(
        'name'       => 'progression_studios_blog_title_font',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Title', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-headings',
        'properties' => array( 'selector'   => 'h2.progression-blog-title' ),
 		 
    );
	 
    $controls['progression_studios_blog_byline_font'] = array(
        'name'       => 'progression_studios_blog_byline_font',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Meta', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-headings',
        'properties' => array( 'selector'   => 'ul.progression-post-meta li, ul.progression-post-meta li a' ),
 		 
    );
	 
    $controls['progression_studios_blog_byline_link_font_hover'] = array(
        'name'       => 'progression_studios_blog_byline_link_font_hover',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Meta Hover', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-headings',
        'properties' => array( 'selector'   => 'ul.progression-post-meta li a:hover' ),
 		 
    );
	 
	 
    $controls['progression_studios_post_title_font_family'] = array(
        'name'       => 'progression_studios_post_title_font_family',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Title Font', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-post-title',
        'properties' => array( 'selector'   => 'body.single-post #page-title-pro h1' ),
 		 
    );
	 
    $controls['progression_studios_post_title_meta'] = array(
        'name'       => 'progression_studios_post_title_meta',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Title Meta', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-post-title',
        'properties' => array( 'selector'   => 'ul.progression-single-post-meta li' ),
 		 
    );
	 
	 
	

	 
    $controls['progression_studios_post_title_navigation_left_right'] = array(
        'name'       => 'progression_studios_post_title_navigation_left_right',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Navigation Left/Right', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-post-options',
        'properties' => array( 'selector'   => '#progression-studios-next-previous-post h5' ),
 		 
    );
	 
    $controls['progression_studios_post_title_navigation_footer'] = array(
        'name'       => 'progression_studios_post_title_navigation_footer',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Navigation Title', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-post-options',
        'properties' => array( 'selector'   => '#progression-studios-next-previous-post h3' ),
 		 
    );
	 
	 
	 
    $controls['progression_studios_post_comment_heading'] = array(
        'name'       => 'progression_studios_post_comment_heading',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Comment Heading', 'vayvo-progression'),
        'tab'        => 'progression-studios-blog-post-options',
        'properties' => array( 'selector'   => '#comments h3' ),
 		 
    );
	 
	 
	 
	 
	 
    $controls['progression_studios_shop_index_title'] = array(
        'name'       => 'progression_studios_shop_index_title',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Shop Index Title', 'vayvo-progression'),
        'tab'        => 'progression-studios-shop-styles',
        'properties' => array( 'selector'   => '#content-pro ul.products h2.woocommerce-loop-product__title' ),
 		 
    );
	 
    $controls['progression_studios_shop_index_cat'] = array(
        'name'       => 'progression_studios_shop_index_cat',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Shop Index Category', 'vayvo-progression'),
        'tab'        => 'progression-studios-shop-styles',
        'properties' => array( 'selector'   => '#content-pro ul.products h2.woocommerce-loop-category__title' ),
 		 
    );

	 
    $controls['progression_studios_shop_index_price'] = array(
        'name'       => 'progression_studios_shop_index_price',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Shop Index Price', 'vayvo-progression'),
        'tab'        => 'progression-studios-shop-styles',
        'properties' => array( 'selector'   => '#content-pro ul.products span.price, #content-pro ul.products span.price span.amount' ),
 		 
    );
	 
	 
    $controls['progression_studios_shop_post_title'] = array(
        'name'       => 'progression_studios_shop_post_title',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Shop Post Title', 'vayvo-progression'),
        'tab'        => 'progression-studios-shop-styles',
        'properties' => array( 'selector'   => '#progression-studios-woocommerce-single-top h1.product_title' ),
 		 
    );
	 
    $controls['progression_studios_shop_post_price'] = array(
        'name'       => 'progression_studios_shop_post_price',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Shop Post Price', 'vayvo-progression'),
        'tab'        => 'progression-studios-shop-styles',
        'properties' => array( 'selector'   => '#progression-studios-woocommerce-single-top p.price, #progression-studios-woocommerce-single-top p.price span.amount' ),
 		 
    );
	 
	 
    $controls['progression_studios_shop_post_tab'] = array(
        'name'       => 'progression_studios_shop_post_tab',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Shop Post Tab', 'vayvo-progression'),
        'tab'        => 'progression-studios-shop-styles',
        'properties' => array( 'selector'   => '#progression-studios-woocommerce-single-bottom .woocommerce-tabs ul.wc-tabs li a' ),
 		 
    );
	 
	 
    $controls['progression_studios_video_index_title'] = array(
        'name'       => 'progression_studios_video_index_title',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Title', 'vayvo-progression'),
        'tab'        => 'progression-studios-video-index-options',
        'properties' => array( 'selector'   => 'h2.progression-video-title' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			'text_decoration'            => 'none',
 			),
    );
	 
	 $controls['progression_studios_video_index_excerpt'] = array(
        'name'       => 'progression_studios_video_index_excerpt',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Genre/Category', 'vayvo-progression'),
        'tab'        => 'progression-studios-video-index-options',
        'properties' => array( 'selector'   => 'ul.video-index-meta-taxonomy li' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			'text_decoration'            => 'none',
 			),
    );
 	
	 
	 
	 
	 
    $controls['progression_studios_video_post_title'] = array(
        'name'       => 'progression_studios_video_post_title',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Title', 'vayvo-progression'),
        'tab'        => 'progression-studios-video-post-options',
        'properties' => array( 'selector'   => 'h1.video-page-title' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			'text_decoration'            => 'none',
 			),
    );
	 
	 
    $controls['progression_studios_video_post_meta'] = array(
        'name'       => 'progression_studios_video_post_meta',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Post Meta', 'vayvo-progression'),
        'tab'        => 'progression-studios-video-post-options',
        'properties' => array( 'selector'   => 'ul#video-post-meta-list li, ul#video-post-meta-list li a' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			'text_decoration'            => 'none',
 			),
    );
	 
	 
    $controls['progression_studios_video_post_season_tab'] = array(
        'name'       => 'progression_studios_video_post_season_tab',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Season Tabs', 'vayvo-progression'),
        'tab'        => 'progression-studios-video-post-options',
        'properties' => array( 'selector'   => 'ul.dashboard-sub-menu li a, ul.vayvo-progression-video-season-navigation li.progression-video-season-title a' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			'text_decoration'            => 'none',
 			),
    );
	 
	 
	 
    $controls['progression_studios_video_post_sidebar_heading'] = array(
        'name'       => 'progression_studios_video_post_sidebar_heading',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Sidebar Heading', 'vayvo-progression'),
        'tab'        => 'progression-studios-video-post-options',
        'properties' => array( 'selector'   => '.content-sidebar-section h4.content-sidebar-sub-header' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			'text_decoration'            => 'none',
 			),
    );
	 
	 
    $controls['progression_studios_video_post_sidebar_meta'] = array(
        'name'       => 'progression_studios_video_post_sidebar_meta',
 		 'type'        => 'font',
        'title'      =>  esc_html__('Sidebar Text', 'vayvo-progression'),
        'tab'        => 'progression-studios-video-post-options',
        'properties' => array( 'selector'   => 'ul.video-director-meta-sidebar li, ul.video-director-meta-sidebar li a, .content-sidebar-section' ),
 		 'default' => array(
 	 			'subset'                     => 'latin',
 	 			'text_decoration'            => 'none',
 			),
    );
	 
	 
	 
	 
	// Return the controls.
    return $controls;
}
add_filter( 'tt_font_get_option_parameters', 'progression_studios_add_control_to_tab' );