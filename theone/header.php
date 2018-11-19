<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheOne
 */
    $theone_transparent_menu_switch = '';
    $theone_braeadcrumb_switch = '';
    $theone_menu_bg_color = '';
    $theone_preloader_switch = 'off';
    $theone_scrol_to_top_switch = 'on';
    $theone_braeadcrumb_padding_top = '';
    $theone_braeadcrumb_padding_bottom = '';
    if (defined('FW')) {
        //Getting velue of Braedcrumb from metaboxes 
        if ( is_page()) {
            //Braedcrumb
            $theone_breadcrumb_picker = fw_get_db_post_option( get_the_ID(), 'theone_breadcrumb_picker');
            $theone_braeadcrumb_switch = $theone_breadcrumb_picker['theone_braeadcrumb_switch'];
        }
        if ( is_page() && $theone_braeadcrumb_switch == 'on' ) {
            $theone_braeadcrumb_bg_img  = $theone_breadcrumb_picker['on']['image'];
            $theone_braeadcrumb_bg_color    = $theone_breadcrumb_picker['on']['color'];
            $theone_braeadcrumb_padding_top    = $theone_breadcrumb_picker['on']['padding-top'];
            $theone_braeadcrumb_padding_bottom    = $theone_breadcrumb_picker['on']['padding-bottom'];
        }elseif( ! is_page()){
            //Braedcrumb vallue from Theme Option
            $theone_breadcrumb_picker = fw_get_db_settings_option('theone_breadcrumb_picker');
            $theone_braeadcrumb_switch = $theone_breadcrumb_picker['theone_braeadcrumb_switch'];
            $theone_braeadcrumb_bg_img  = $theone_breadcrumb_picker['on']['image'];
            $theone_braeadcrumb_bg_color    = $theone_breadcrumb_picker['on']['color'];
            $theone_braeadcrumb_padding_top    = $theone_breadcrumb_picker['on']['padding-top'];
            $theone_braeadcrumb_padding_bottom    = $theone_breadcrumb_picker['on']['padding-bottom'];  
        }
        //Getting velue of Transparent menu from metaboxes
        if ( is_page()) {
           $theone_page_header_style_picker = fw_get_db_post_option( get_the_ID(), 'theone_page_header_style_picker');
           $theone_custom_header = $theone_page_header_style_picker['theone_page_header_style_switch'];

        }
        if ( is_page() && $theone_custom_header == 'on' ) {
            $theone_transparent_menu_switch = $theone_page_header_style_picker['on']['theone_transparent_menu_switch'];
        }else{
            //Transparent Menu
            $theone_transparent_menu_picker = fw_get_db_settings_option('theone_transparent_menu_picker');
            $theone_transparent_menu_switch = $theone_transparent_menu_picker['theone_transparent_menu_switch'];
        }
        
        //Preloader
        $theone_preloader_switch = fw_get_db_settings_option('theone_preloader_switch');
        $theone_scrol_to_top_switch = fw_get_db_settings_option('theone_scrol_to_top_switch');
    }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,700,700i,900" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if ( $theone_preloader_switch == 'on'): ?>
        <div id="preloader" class="preloader-area">
            <div class='preloader'>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div> 
    <?php endif ?>
    <!-- Scroll-top start -->
    <?php if ( $theone_scrol_to_top_switch == 'on'): ?>
        <div class="scroll-top">
            <div class="scrollToTop">
                <span><i class="fa fa-arrow-up"></i></span>
            </div>
        </div>
    <?php endif ?>
    <!-- Scroll-top end -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theone' ); ?></a>


    <?php 
        switch ($theone_transparent_menu_switch) {
            case 'on':
                get_template_part('template-parts/headers/header','2');
                break;
            
            default:
                get_template_part('template-parts/headers/header','1');
                break;
        }
     ?>


    <!-- Page Header Start -->
    <?php if (defined('FW')): ?>
        <?php if( $theone_braeadcrumb_switch == 'on' && ! is_404()): ?>
            <section class="page-header" style="background: <?php if( !empty($theone_braeadcrumb_bg_img) ):?> url(<?php echo esc_url($theone_braeadcrumb_bg_img['url']); ?>)<?php endif; ?>;">
                <div class="banner-overlay" style="background: <?php echo esc_attr($theone_braeadcrumb_bg_color); ?>; padding-top: <?php echo esc_attr($theone_braeadcrumb_padding_top) . "px";  ?>; padding-bottom: <?php echo esc_attr($theone_braeadcrumb_padding_bottom) . "px"; ?>" >
                    <div class="page-header-content">
                        <?php echo theone_breadcrum(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php elseif(  ! is_404() && !is_home() ): ?>
        <section class="page-header">
            <div class="banner-overlay">
                <div class="page-header-content">
                    <?php echo theone_breadcrum(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Page Header end -->
