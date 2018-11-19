<?php		
	$theone_service_icon = '';
    $theone_service_gallery = '';
    $theone_service_download_title = '';
    $theone_service_download_pdf = '';
	$theone_service_download_zip = '';
	if (defined('FW')) {
	    //metabox data
	    $theone_service_icon = fw_get_db_post_option( get_the_ID(), 'theone_service_icon');
        $theone_service_gallery = fw_get_db_post_option( get_the_ID(), 'theone_service_gallery');
        $theone_service_download_title = fw_get_db_post_option( get_the_ID(), 'theone_service_download_title');
        $theone_service_download_pdf = fw_get_db_post_option( get_the_ID(), 'theone_service_download_pdf');
	    $theone_service_download_zip = fw_get_db_post_option( get_the_ID(), 'theone_service_download_zip');
	}
?>
<div class="main-area-element">
    <div class="flext-area service">
        <?php if (is_archive() && has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
        <?php endif ?>
        <!-- Place somewhere in the <body> of your page -->
        <?php if (!is_archive()): ?>
        <div id="sliderr" class="flexslider">
            <ul class="slides">
                <?php foreach ($theone_service_gallery as $gallery): ?>
                    <li>
                        <img src="<?php echo !empty($gallery['url']) ? esc_url($gallery['url']) : ''; ?>" />
                    </li>
                <?php endforeach; ?>
                <!-- items mirrored twice, total of 12 -->
            </ul>
        </div>
        <div id="carousell" class="flexslider">
            <ul class="slides">
                <?php foreach ($theone_service_gallery as $gallery): ?>
                    <li>
                        <img src="<?php echo !empty($gallery['url']) ? esc_url($gallery['url']) : ''; ?>" />
                    </li>
                <?php endforeach; ?>
                <!-- items mirrored twice, total of 12 -->
            </ul>
        </div>
        <?php endif ?>
    </div>
    <div class="post-type-content">
        <?php the_title('<h4>','</h4>'); ?>
		<?php the_content(); ?>
    </div>
    <?php if( is_single() && !empty( $theone_service_download_pdf || $theone_service_download_zip)): ?>
    <div class="widget-element download-file">

        <div class="widget-title">
            <h5><?php echo !empty($theone_service_download_title) ? esc_html($theone_service_download_title) : '' ; ?></h5>
        </div>
        <div class="widget-wrapper">
            <?php if (!empty($theone_service_download_pdf)): ?>
                <div class="col-md-6">
                    <ul class="dowload-zip-pdf">
                        <li>
                            <a href="<?php echo !empty($theone_service_download_pdf) ? esc_url($theone_service_download_pdf) : '' ; ?>">
                                <div class="zip-pdf-left">
                                    <i class="fa fa-print"></i>
                                    <p><?php esc_html_e( 'DOWNLOAD Pdf file', 'theone'); ?></p>
                                </div>
                                <div class="zip-pdf-right">
                                    <i class="fa fa-download"></i>
                                </div>
                            </a>
                        </li>
                    </ul>   
                </div>
            <?php endif ?>
            <?php if ( !empty($theone_service_download_zip) ): ?>
                <div class="col-md-6">
                    <ul class="dowload-zip-pdf extra">
                        <li>
                            <a href="<?php echo !empty($theone_service_download_zip) ? esc_url($theone_service_download_zip) : '' ; ?>">
                                <div class="zip-pdf-left">
                                    <i class="fa fa-print"></i>
                                    <p><?php esc_html_e( 'DOWNLOAD Zip file', 'theone'); ?></p>
                                </div>
                                <div class="zip-pdf-right">
                                    <i class="fa fa-download"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php endif ?>

        </div>
    </div>
<?php endif; ?>
</div>