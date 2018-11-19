<?php 
$theone_sponsor_image = '';
if (!defined('FW')) die('Access Forbidden');
    $theone_sponsor_image = isset($atts['theone_sponsor_image']) ? $atts['theone_sponsor_image'] : '';

?>

<div class="sponsor-element">
    <?php foreach ( $theone_sponsor_image as $image): ?>
        <div class="sponsor-thumb">
            <img src="<?php echo !empty($image['image']['url']) ? esc_url($image['image']['url']) : ''; ?>" alt="<?php echo !empty($image['title']) ? esc_html($image['title']) : ''; ?>">
        </div>    
    <?php endforeach ?>
</div>