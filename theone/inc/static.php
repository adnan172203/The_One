<?php

/**
 * TheOne Font URL.
 */
if ( ! function_exists( 'theone_default_font' ) ):
    function theone_default_font(){
        $fonts_url = '';

        /*
         * Translators: If there are characters in your language that are not
         * supported by Libre Franklin, translate this to 'off'. Do not translate
         * into your own language.
         */
        $poppins = _x( 'on', 'Poppins font: on or off', 'theone' );

        if ( 'off' !== $poppins ) {
            $font_families = array();

            $font_families[] = 'Poppins:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );

            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }
        return esc_url_raw( $fonts_url );
    }
endif;
/**
 * Register custom fonts.
 */
if ( ! function_exists('theone_custom_font')) {
    function theone_custom_font() {
        // Checking Body Font
        $theone_body_fonts = fw_get_db_settings_option('theone_body_fonts');
        $theone_font_family = isset($theone_body_fonts['family']) ? $theone_body_fonts['family'] : '';
        $theone_font_family_subset = isset($theone_body_fonts['subset']) ? $theone_body_fonts['subset'] : '';

        // Checking Button Font
        $theone_button_font = fw_get_db_settings_option('theone_button_font');
        $theone_button_font_family = isset($theone_button_font['family']) ? $theone_button_font['family'] : '';
        $theone_button_subset = isset($theone_button_font['subset']) ? $theone_button_font['subset'] : '';

        // Checking Section Title Font
        $theone_section_font = fw_get_db_settings_option('theone_section_font');
        $theone_section_font_family = isset($theone_section_font['family']) ? $theone_section_font['family'] : '';
        $theone_section_subset = isset($theone_section_font['subset']) ? $theone_section_font['subset'] : '';

        // Checking Section Sub Title Font
        $theone_section_sub_title_font = fw_get_db_settings_option('theone_section_sub_title_font');
        $theone_section_sub_title_font_family = isset($theone_section_sub_title_font['family']) ? $theone_section_sub_title_font['family'] : '';
        $theone_section_sub_title_subset = isset($theone_section_sub_title_font['subset']) ? $theone_section_sub_title_font['subset'] : '';

        // Checking Widget Font
        $theone_widget_font = fw_get_db_settings_option('theone_widget_font');
        $theone_widget_font_family = isset($theone_widget_font['family']) ? $theone_widget_font['family'] : '';
        $theone_widget_subset = isset($theone_widget_font['subset']) ? $theone_widget_font['subset'] : '';

        // Checking Footer Widget Font
        $theone_footer_widget_font = fw_get_db_settings_option('theone_footer_widget_font');
        $theone_footer_widget_font_family = isset($theone_footer_widget_font['family']) ? $theone_footer_widget_font['family'] : '';
        $theone_footer_widget_subset = isset($theone_footer_widget_font['subset']) ? $theone_footer_widget_font['subset'] : '';

        // Checking Blog Title Font
        $theone_blog_font = fw_get_db_settings_option('theone_blog_font');
        $theone_blog_font_family = isset($theone_blog_font['family']) ? $theone_blog_font['family'] : '';
        $theone_blog_subset = isset($theone_blog_font['subset']) ? $theone_blog_font['subset'] : '';

        // Checking Heding Font
        //H1
        $theone_h1_font = fw_get_db_settings_option('theone_h1_font');
        $theone_h1_font_family = isset($theone_h1_font['family']) ? $theone_h1_font['family'] : '';
        $theone_h1_subset = isset($theone_h1_font['subset']) ? $theone_h1_font['subset'] : '';
        //H2
        $theone_h2_font = fw_get_db_settings_option('theone_h2_font');
        $theone_h2_font_family = isset($theone_h2_font['family']) ? $theone_h2_font['family'] : '';
        $theone_h2_subset = isset($theone_h2_font['subset']) ? $theone_h2_font['subset'] : '';
        //H3
        $theone_h3_font = fw_get_db_settings_option('theone_h3_font');
        $theone_h3_font_family = isset($theone_h3_font['family']) ? $theone_h3_font['family'] : '';
        $theone_h3_subset = isset($theone_h3_font['subset']) ? $theone_h3_font['subset'] : '';
        //H4
        $theone_h4_font = fw_get_db_settings_option('theone_h4_font');
        $theone_h4_font_family = isset($theone_h4_font['family']) ? $theone_h4_font['family'] : '';
        $theone_h4_subset = isset($theone_h4_font['subset']) ? $theone_h4_font['subset'] : '';
        //H5
        $theone_h5_font = fw_get_db_settings_option('theone_h5_font');
        $theone_h5_font_family = isset($theone_h5_font['family']) ? $theone_h5_font['family'] : '';
        $theone_h5_subset = isset($theone_h5_font['subset']) ? $theone_h5_font['subset'] : '';
        //H6
        $theone_h6_font = fw_get_db_settings_option('theone_h6_font');
        $theone_h6_font_family = isset($theone_h6_font['family']) ? $theone_h6_font['family'] : '';
        $theone_h6_subset = isset($theone_h6_font['subset']) ? $theone_h6_font['subset'] : '';

        // Checking Menu Font
        $theone_menu_font = fw_get_db_settings_option('theone_menu_font');
        $theone_menu_font_family = isset($theone_menu_font['family']) ? $theone_menu_font['family'] : '';  
        $theone_menu_family_subset = isset($theone_menu_font['subset']) ? $theone_menu_font['subset'] : '';  
        $fonts_url = '';

        // Checking Mobile Menu Font
        $theone_mobile_menu_font = fw_get_db_settings_option('theone_mobile_menu_font');
        $theone_mobile_menu_font_family = isset($theone_mobile_menu_font['family']) ? $theone_mobile_menu_font['family'] : '';
        $theone_mobile_menu_subset = isset($theone_mobile_menu_font['subset']) ? $theone_mobile_menu_font['subset'] : '';

        /*
         * Translators: If there are characters in your language that are not
         * supported by Libre Franklin, translate this to 'off'. Do not translate
         * into your own language.
         */
        $poppins = _x( 'on', 'Google font: on or off', 'theone' );

        if ( 'off' !== $poppins ) {
            $font_family = array();
            $font_families = array();
            $font_subset = array();
            //Body
            if (!empty($theone_font_family)){
                $font_family[] = $theone_font_family;
                $font_subset[] = $theone_font_family_subset;
                $font_families[] = $theone_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
            }
            //Button 
            if (!empty($theone_button_font_family) && !in_array($theone_button_font_family, $font_family)) {
                $font_family[] = $theone_button_font_family;
                $font_families[] = $theone_button_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_button_subset, $font_subset)){
                    $font_subset[] = $theone_button_subset;
                }
            }
            //Section Title
            if (!empty($theone_section_font_family) && !in_array($theone_section_font_family, $font_family)) {
                $font_family[] = $theone_section_font_family;
                $font_families[] = $theone_section_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_section_subset, $font_subset)){
                    $font_subset[] = $theone_section_subset;
                }
            }
            //Section sub Title
            if (!empty($theone_section_sub_title_font_family) && !in_array($theone_section_sub_title_font_family, $font_family)) {
                $font_family[] = $theone_section_sub_title_font_family;
                $font_families[] = $theone_section_sub_title_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_section_sub_title_subset, $font_subset)){
                    $font_subset[] = $theone_section_sub_title_subset;
                }
            }
            //Widgte Title
            if (!empty($theone_widget_font_family) && !in_array($theone_widget_font_family, $font_family)) {
                $font_family[] = $theone_widget_font_family;
                $font_families[] = $theone_widget_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_widget_subset, $font_subset)){
                    $font_subset[] = $theone_widget_subset;
                }
            }
            // Footer Widgte Title
            if (!empty($theone_footer_widget_font_family) && !in_array($theone_footer_widget_font_family, $font_family)) {
                $font_family[] = $theone_footer_widget_font_family;
                $font_families[] = $theone_footer_widget_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_footer_widget_subset, $font_subset)){
                    $font_subset[] = $theone_footer_widget_subset;
                }
            }
            //Blog Title
            if (!empty($theone_blog_font_family) && !in_array($theone_blog_font_family, $font_family)) {
                $font_family[] = $theone_blog_font_family;
                $font_families[] = $theone_blog_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_blog_subset, $font_subset)){
                    $font_subset[] = $theone_blog_subset;
                }
            }
            //H1
            if(!empty($theone_h1_font_family) && !in_array($theone_h1_font_family, $font_family) ){
                $font_family[] = $theone_h1_font_family;
                $font_families[] = $theone_h1_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_h1_subset, $font_subset)){
                    $font_subset[] = $theone_h1_subset;
                }
            } 
            //H2
            if(!empty($theone_h2_font_family) && !in_array($theone_h2_font_family, $font_family)){    
                $font_family[] = $theone_h2_font_family;
                $font_families[] = $theone_h2_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_h2_subset, $font_subset)){
                    $font_subset[] = $theone_h2_subset;
                }
            } 
            //H3
            if(!empty($theone_h3_font_family) && !in_array($theone_h3_font_family, $font_family)){
                $font_family[] = $theone_h3_font_family;
                $font_families[] = $theone_h3_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_h3_subset, $font_subset)){
                    $font_subset[] = $theone_h3_subset;
                }
            } 
            //H4
            if(!empty($theone_h4_font_family) && !in_array($theone_h4_font_family, $font_family)){
                $font_family[] = $theone_h4_font_family;
                $font_families[] = $theone_h4_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_h4_subset, $font_subset)){
                    $font_subset[] = $theone_h4_subset;
                }
            } 
            //H5
            if(!empty($theone_h5_font_family) && !in_array($theone_h5_font_family, $font_family)){
                $font_family[] = $theone_h5_font_family;
                $font_families[] = $theone_h5_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_h5_subset, $font_subset)){
                    $font_subset[] = $theone_h5_subset;
                }
            } 
            //H6
            if(!empty($theone_h6_font_family) && !in_array($theone_h6_font_family, $font_family)){
                $font_family[] = $theone_h6_font_family;
                $font_families[] = $theone_h6_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_h6_subset, $font_subset)){
                    $font_subset[] = $theone_h6_subset;
                }
            } 
            //Main Menu
            if (!empty($theone_menu_font_family) && !in_array($theone_menu_font_family, $font_family)) {
                $font_family[] = $theone_menu_font_family;
                $font_families[] = $theone_menu_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_menu_family_subset, $font_subset)){
                    $font_subset[] = $theone_menu_family_subset;
                }
            }
            //Mobile Menu
            if (!empty($theone_mobile_menu_font_family) && !in_array($theone_mobile_menu_font_family, $font_family)) {
                $font_family[] = $theone_mobile_menu_font_family;
                $font_families[] = $theone_mobile_menu_font_family.':100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
                if( !in_array( $theone_mobile_menu_subset, $font_subset)){
                    $font_subset[] = $theone_mobile_menu_subset;
                }
            }

            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( implode( ',', $font_subset ) ),
            );
            
            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }

        return esc_url_raw( $fonts_url );
    }
}

if(defined('FW')) :
    function theone_custom_font_load() {
        wp_enqueue_style( 'theone-custom-fonts-load', theone_custom_font(), array(), null );
    }
    add_action( 'wp_enqueue_scripts', 'theone_custom_font_load',90 );
else :
    function theone_default_font_load() {
        wp_enqueue_style( 'theone-default-fonts-load', theone_default_font(), array(), null );
    }
    add_action( 'wp_enqueue_scripts', 'theone_default_font_load',90);
endif;
/*
 * This theme styles the visual editor to resemble the theme style,
 * specifically font, colors, and column width.
 */
function theone_theme_add_editor_styles() {
    add_editor_style( array( 'assets/css/style.css', theone_default_font() ) );
}
add_action( 'admin_init', 'theone_theme_add_editor_styles' );
/**
* theone Custom Style
**/
if ( ! function_exists('theone_custom_style') && defined('FW') ) {
    function theone_custom_style(){
        if ( ! function_exists( 'theone_font_style' ) ):
        function theone_font_style($font_properties){
            $font_size = $font_properties['size'];
            $font_family = $font_properties['family'];
            $font_color = $font_properties['color'];
            $line_height = $font_properties['line-height'];
            
 
            if(!empty($font_properties['variation'])  && $font_properties['google_font']==1){
                $font_variation = $font_properties['variation'];
                if (strpos( $font_variation, 'italic' ) !== false) {
                    $font_style = 'italic';
                }elseif( strpos( $font_variation, 'oblique' ) !== false ){
                    $font_style = 'oblique';
                }else{
                    $font_style = 'normal';
                }
                $font_weight = (intval( $font_variation ) == 0) ? 400 : intval( $font_variation);
            } else {
                 $font_style = $font_properties['style'];
                 $font_weight = $font_properties['weight'];
            }

            $font_properties = "font-family : {$font_family};font-size : {$font_size}px; color : {$font_color}; font-weight : {$font_weight};font-style : {$font_style}; line-height: {$line_height};";
            return $font_properties;
        }
        endif;

        if (is_page()) {

            $theone_page_header_style_picker = fw_get_db_post_option( get_the_ID(), 'theone_page_header_style_picker');
            $theone_page_header_style_switch = $theone_page_header_style_picker['theone_page_header_style_switch'];
            if ($theone_page_header_style_switch == 'on'){
                
                     $theone_menu_bg_color = !empty($theone_page_header_style_picker['on']['theone_menu_bg_color']) ? $theone_page_header_style_picker['on']['theone_menu_bg_color'] : '';
                 $theone_menu_bg_color = '';
            }else{
                $theone_header_dependency = fw_get_db_settings_option('theone_header_dependency');
                $theone_menu_bg_color = !empty($theone_header_dependency['1']['theone_menu_bg_color']) ? $theone_header_dependency['1']['theone_menu_bg_color'] : '';
                $theone_menu_bg_color ='';
            } 
        }else{
                $theone_header_dependency = fw_get_db_settings_option('theone_header_dependency');
                $theone_menu_bg_color = !empty($theone_header_dependency['1']['theone_menu_bg_color']) ? $theone_header_dependency['1']['theone_menu_bg_color'] : '';
                $theone_menu_bg_color ='';
            } 
        $theone_theme_color = fw_get_db_settings_option('theone_theme_color');
        $theone_body_bg = fw_get_db_settings_option('theone_body_bg_color');
        //Geting Body Font
        $theone_body_fonts = fw_get_db_settings_option('theone_body_fonts'); 
        //Geting Button Font
        $theone_button_font = fw_get_db_settings_option('theone_button_font');
        $theone_button_text_tr = fw_get_db_settings_option('theone_button_text_tr');

        //Geting Widget Font
        $theone_widget_font = fw_get_db_settings_option('theone_widget_font');
        $theone_widget_font_tr = fw_get_db_settings_option('theone_widget_font_tr');

        //Geting Footer Widget Font
        $theone_footer_widget_font = fw_get_db_settings_option('theone_footer_widget_font');
        $theone_footer_widget_font_tr = fw_get_db_settings_option('theone_footer_widget_font_tr');

        //Geting Blog Title Font
        $theone_blog_font = fw_get_db_settings_option('theone_blog_font');
        $theone_blog_font_tr = fw_get_db_settings_option('theone_blog_font_tr');

        //Geting Header Fonts style 
        // H1 Fonts style
        $theone_h1_font = fw_get_db_settings_option('theone_h1_font');
        $theone_h1_text_tr = fw_get_db_settings_option('theone_h1_text_tr');

        // H2 Fonts style
        $theone_h2_font = fw_get_db_settings_option('theone_h2_font');
        $theone_h2_text_tr = fw_get_db_settings_option('theone_h2_text_tr');

        // H3 Fonts style
        $theone_h3_font = fw_get_db_settings_option('theone_h3_font');
        $theone_h3_text_tr = fw_get_db_settings_option('theone_h3_text_tr');

        // H4 Fonts style
        $theone_h4_font = fw_get_db_settings_option('theone_h4_font');
        $theone_h4_text_tr = fw_get_db_settings_option('theone_h4_text_tr');

        // H5 Fonts style
        $theone_h5_font = fw_get_db_settings_option('theone_h5_font');
        $theone_h5_text_tr = fw_get_db_settings_option('theone_h5_text_tr');

        // H6 Fonts style
        $theone_h6_font = fw_get_db_settings_option('theone_h6_font');
        $theone_h6_text_tr = fw_get_db_settings_option('theone_h6_text_tr');

        //Geting menu Font
        $theone_menu_font = fw_get_db_settings_option('theone_menu_font');  
        $theone_menu_text_tr = fw_get_db_settings_option('theone_menu_text_tr'); 
        

        //Geting mobile menu Font
        $theone_mobile_menu_font = fw_get_db_settings_option('theone_mobile_menu_font'); 
        $theone_mobile_menu_text_tr = fw_get_db_settings_option('theone__mobile_menu_text_tr'); 

        /**
        *   RGBA COLOR
        */

        $theme_color = $theone_theme_color;
        $rgb = theone_hex2rgba($theme_color);
        //banner BG
        $banner_bg_rgba = theone_hex2rgba($theme_color, 0.6);
        $overlay_effect_rgba = theone_hex2rgba($theme_color, 0.3);

        wp_enqueue_style(
            'custom-style', get_template_directory_uri() . '/assets/css/custom-style.css'
        );
        $custom_css = "

            body {".theone_font_style($theone_body_fonts)."}
            .menu-transparent .theone-menu{
                background: {$theone_menu_bg_color};
            }
            h1{
                ".theone_font_style($theone_h1_font)."
                text-transform: {$theone_h1_text_tr};
            }
            h2{
                ".theone_font_style($theone_h2_font)."
                text-transform: {$theone_h2_text_tr};
            }
            h3{
                ".theone_font_style($theone_h3_font)."
                text-transform: {$theone_h3_text_tr};
            }
            h4{
                ".theone_font_style($theone_h4_font)."
                text-transform: {$theone_h4_text_tr};
            }
            h5{
                ".theone_font_style($theone_h5_font)."
                text-transform: {$theone_h5_text_tr};
            }
            h6{
                ".theone_font_style($theone_h6_font)."
                text-transform: {$theone_h6_text_tr};
            }
            .header-menu .nav > li > a,
            .dropdown-menu > li > a,
            .menu-style-three li a,
            .navbar-default .navbar-nav > li > a{
                ".theone_font_style($theone_menu_font)."
                text-transform: {$theone_menu_text_tr};   
            }
            .mobile-menu ul li a,
            .mobile-menu > ul > li .sub-menu li a {
                ".theone_font_style($theone_mobile_menu_font)."
                text-transform: {$theone_mobile_menu_text_tr};  
            }
            a:focus,
            a:active,
            a:hover,
            .navbar-default .navbar-nav>.active>a,
            .navbar-default .navbar-nav>.active>a:hover,
            .navbar-default .navbar-nav>.active>a:focus,
            .navbar-default .navbar-nav>li>a:hover,
            .transparent-menu .navbar-brand h3,
            .transparent-menu .shopping-cart span, 
            .menu-fixed .navbar-default .navbar-nav>.active>a,
            .menu-fixed .navbar-default .navbar-nav>.active>a:hover,
            .menu-fixed .navbar-default .navbar-nav>.active>a:focus,
            .menu-fixed .navbar-default .navbar-nav>li>a:hover,
            .submenu-active,
            .theone-menu .sub-menu li a:hover,
            .theone-menu ul.sub-menu > li.active a,
            .custom-btn,
            .feature-thumb i,
            .feature-element:hover .feature-content h4,
            .counter,
            .count-span,
            .video-content i,
            .project-element:hover .project-content h5,
            .project.style-two .project-thumb a:before,
            .project.style-three .project-thumb a:before,
            .service-thumb .service-icon i,
            .service-element:hover .service-content h4,
            .team-element:hover .team-content h5,
            .pricing-heading h2,
            .pricing-heading span,
            .pricing-btn .custom-btn,
            .byline a:hover, .posted-on a:hover,
            .blog-element:hover .blog-content h4 a,
            .blog-element:hover .blog-content-extra span a,
            .count-heading h3,
            .service-list li,
            .service-list li:hover a,
            .dowload-zip-pdf:hover .zip-pdf-left p,
            .dowload-zip-pdf:hover .zip-pdf-left i,
            .dowload-zip-pdf:hover .zip-pdf-right,
            .post-type-content h4,
            ul.social-media li i:hover,
            .team-single .team-content h5,
            .category-list li:hover .category-list-left span,
            .post-type li:hover .post-type-right h6 a,
            .edit-link a:hover,
            .blog-single .entry-footer span.tags-links a:hover,
            .content-area .social-media li i:hover,
            .template-contact-left i,
            .list-view li a:hover,
            .showing-type:hover p,
            .shop-element:hover .shop-content h6,
            .panel-body .category-list li a:hover,
            .custom-panel-title a,
            .nst-slider-custom p,
            .shop-product-details>span,
            .discount-num input,
            .nav-tabs>li>a:after,
            .nav-tabs>li>a:hover,
            .post-navigation .nav-links a:hover,
            .widget a:hover,
            .blog-content h4:hover,
            .woocommerce .star-rating span,
            .woocommerce .star-rating::before,
            .woocommerce .widget_price_filter .price_slider_amount .price_label span,
            .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
            .shop-element:hover .shop-content h2,
            .cart-sub-menu ul.cart_list li a:hover,
            .service-list li .fa,
            .banner .item .banner-content a.custom-btn.btn-two:hover,
            .service-list li:hover span{
                color:{$theone_theme_color};
            }
            .banner .item .banner-content a.custom-btn:hover,
            .banner .item .banner-content a.custom-btn.btn-one{
            		color:{$theone_theme_color} !important;
            }
            .shopping-cart span.item-counter,
            .navbar-brand h3,
            .menu-fixed .navbar-brand h3,
            .feature .custom-btn,
            .button.is-checked,
            .project-btn .custom-btn,
            .tick-icon,
            .pricing-element:hover .pricing-heading,
            .pricing-element:hover .pricing-btn .custom-btn,
            .contact-btn .custom-btn,
            .footer-form .custom-btn:hover,
            .dowload-zip-pdf,
            .custom-button-next:hover i,
            .custom-button-prev:hover i,
            .page-links span,
            .custom-pagination span,
            .custom-pagination a:hover,
            .custom-pagination li a:hover,
            .category-list li:hover .category-list-right span,
            .newsletter a,
            .contact-form-area p.form-submit input,
            .comment-respond p.form-submit input,
            .custom-panel-title a .plus-minus-icon,
            .nstSlider .bar,
            .nstSlider .custom-btn,
            .flex-direction-nav a:before,
            .select-icon i,
            .shop-cart-btn a,
            .transparent-menu .menu-fixed{
                background:{$theone_theme_color} !important;
            }
            .woocommerce div.product form.cart .button,
            .woocommerce .widget_price_filter .price_slider_amount .button,
            .woocommerce nav.woocommerce-pagination ul li a:focus,
            .woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce nav.woocommerce-pagination ul li span.current,
            .sidebar-nl .mailpoet_paragraph input.mailpoet_submit,
            .woocommerce #respond input#submit,
            .woocommerce a.button,
            .woocommerce button.button,
            .woocommerce input.button{
                background:{$theone_theme_color};
            }
            .button.is-checked {
                border: 2px solid {$theone_theme_color};
            }
            .pricing-btn .custom-btn{
                border: 3px solid {$theone_theme_color};
            }
            .button:hover,
            .button:active,
            .button.is-checked,
            .nav-tabs>li>a:after,
            .scrollToTop span,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
            .woocommerce span.onsale,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
            .woocommerce #respond input#submit.alt,
            .woocommerce a.button.alt,
            .woocommerce button.button.alt,
            .woocommerce input.button.alt{
                background-color:{$theone_theme_color};
            }
            .overlay-effect {
                background:{$overlay_effect_rgba};
            }
            .button:hover,
            .pricing-element:hover .pricing-btn .custom-btn,
            .feature.style-three:hover .feature-thumb,
            .dowload-zip-pdf,
            .project-btn.project-extra .custom-btn,
            .custom-pagination span, .custom-pagination a:hover,
            .custom-pagination li a:hover,
            .select-icon i,
            .dowload-zip-pdf:hover{
                border-color:{$theone_theme_color};
            }
            .faq-list .nav-tabs > li.active{
                border-left-color:{$theone_theme_color};
            }
            .search-box a:before{
                border-top-color:{$theone_theme_color};
                border-bottom-color:{$theone_theme_color};
            }
            .woocommerce-message,
            .woocommerce-info{
                border-top-color:{$theone_theme_color};  
            }
            .widget-title h5 {
                ".theone_font_style($theone_widget_font)."
                text-transform: {$theone_widget_font_tr};
            }
            .footer-widget-heading h4{
                ".theone_font_style($theone_footer_widget_font)."
                text-transform: {$theone_footer_widget_font_tr};
            }
            .blog-content h4.entry-title{
                ".theone_font_style($theone_blog_font)."
                text-transform: {$theone_blog_font_tr};
            }
            .project-btn .custom-btn{
                ".theone_font_style($theone_button_font)."
                text-transform: {$theone_button_text_tr};  
            }
        ";
        wp_add_inline_style( 'custom-style', $custom_css );
    }
}

if( defined('FW') ) :
    add_action( 'wp_enqueue_scripts', 'theone_custom_style' );
endif;






