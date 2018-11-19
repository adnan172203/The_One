<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TheOne
 */
    //foter top
    $theone_footer_top_picker = '';
    $theone_footer_top_switch = 'on';
    $theone_top_footer_bg_color = '';
    //foter bottom
    $theone_footer_bottom_picker = '';
    $theone_footer_bottom_switch = 'on';
    $theone_footer_bg = '';
    $theone_footer_copyright = '';

    if (defined('FW')) {
        //footer top
        $theone_footer_top_picker = fw_get_db_settings_option('theone_footer_top_picker');
        $theone_footer_top_switch = $theone_footer_top_picker['theone_footer_top_switch'];
        $theone_top_footer_bg_color = $theone_footer_top_picker['on']['theone_top_footer_bg_color'];
        //footer bottom
        $theone_footer_bottom_picker = fw_get_db_settings_option('theone_footer_bottom_picker');
        $theone_footer_bottom_switch = $theone_footer_bottom_picker['theone_footer_bottom_switch'];
        $theone_footer_bg = $theone_footer_bottom_picker['on']['theone_footer_bg'];
        $theone_footer_copyright = $theone_footer_bottom_picker['on']['theone_footer_copyright'];
    }
?>
    <!-- Footer  Start -->
    <section class="footer-widget" <?php if (!empty( $theone_top_footer_bg_color )) { echo 'style = background:' . $theone_top_footer_bg_color . ';';    } ?>>
        <?php if (is_active_sidebar( 'sidebar-3' ) && $theone_footer_top_switch == 'on' ): ?>
            <div class="footer-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="section-wrapper footer-row">
                            <?php  dynamic_sidebar( 'sidebar-3' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( $theone_footer_bottom_switch == 'on'): ?>
            <div class="footer-content" <?php if (!empty( $theone_footer_bg )) { echo 'style = background:' . $theone_footer_bg . ';';    } ?>>
                <p><?php echo !empty($theone_footer_copyright) ? wp_kses_post($theone_footer_copyright) : '' ; ?></p>
            </div> 
        <?php endif ?>
    </section>
    <!-- Footer  End -->

<?php wp_footer(); ?>

</body>
</html>
