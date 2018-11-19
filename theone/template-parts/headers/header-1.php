<?php 
    $theone_header_logo = '';
    $theone_header_logo_width = '130';
    $theone_minicart_switch = '';
    $theone_Logo_padding_switch = '';
    $padding_top = '0';
    $padding_right = '0';
    $padding_bottom = '0';
    $padding_left = '0';

    if (defined('FW')) {
        //Getting velue of Minicart from metaboxes 
        if ( is_page()) {
            $theone_page_header_style_picker = fw_get_db_post_option( get_the_ID(), 'theone_page_header_style_picker');
            $theone_minicart_switch = $theone_page_header_style_picker['on']['theone_minicart_switch'];
        }else{
            $theone_minicart_switch = fw_get_db_settings_option('theone_minicart_switch');
        }
        $theone_header_logo = fw_get_db_settings_option('theone_header_logo');
        $theone_header_logo_width = fw_get_db_settings_option('theone_header_logo_width');
        $theone_logo_padding_picker = fw_get_db_settings_option('theone_logo_padding_picker');
        $theone_Logo_padding_switch = $theone_logo_padding_picker['theone_Logo_padding_switch'];
        $theone_Logo_padding = $theone_logo_padding_picker['on'];
        $padding_top = $theone_Logo_padding['top'];
        $padding_right = $theone_Logo_padding['right'];
        $padding_bottom = $theone_Logo_padding['bottom'];
        $padding_left = $theone_Logo_padding['left'];
    }

    
 ?>

<header id="header">
    <!-- Main Menu Start -->
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only"><?php esc_html_e('Toggle navigation','theone'); ?></span>
                                <span class="icon-bar icon-first"></span>
                                <span class="icon-bar icon-second"></span>
                                <span class="icon-bar icon-third"></span>
                              </button>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url('/')); ?>">
                            <?php if (! empty($theone_header_logo)): ?>
                                <img style="
                                    width: <?php echo esc_attr($theone_header_logo_width) . "px"; ?>; <?php if ( $theone_Logo_padding_switch == 'on'): ?> padding-top: <?php echo esc_attr($padding_top) . "px"; ?>; padding-right: <?php echo esc_attr($padding_right) . "px"; ?>; padding-bottom: <?php echo esc_attr($padding_bottom) . "px"; ?>; padding-left: <?php echo esc_attr($padding_left) . "px"; ?>;
                                    <?php endif ?>
                                    "  src="<?php echo esc_url($theone_header_logo['url']); ?>" >
                            <?php else: ?>
                                <h3><?php bloginfo('title');?></h3>
                            <?php endif ?>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="theone-menu">
                            <?php 
                                if ( has_nav_menu( 'menu-1' ) ) {
                                    wp_nav_menu(array(
                                        'theme_location'    => 'menu-1',
                                        'menu_class'        => 'nav navbar-nav navbar',
                                        'container'   => '',
                                        'walker'            => new theone_bootstrap_navwalker()
                                    ));
                                }
                             ?>
                             <?php if ( class_exists( 'WooCommerce' ) &&  $theone_minicart_switch == 'on'): ?>
                                <ul class="shopping-area">
                                    <li class="shopping-cart">
                                        <?php theone_wc_cart_dropdown(); ?>
                                    </li>
                                </ul>
                             <?php endif ?>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
    <!-- MObile Menu -->
    <div class="mobile-menu-area">
      <?php 
          if ( has_nav_menu( 'menu-3' ) ) {
              wp_nav_menu(array(
                  'theme_location'    => 'menu-3',
                  'menu_class'        => 'm-menu',
                  'container_class'   => 'mobile-menu',
              ));
            } 
            else{
                wp_nav_menu(array(
                    'theme_location'    => 'menu-1',
                    'menu_class'        => 'm-menu',
                    'container_class'   => 'mobile-menu',
                ));
            }
       ?>
    </div>
    <!-- Main Menu end -->
</header>
    

