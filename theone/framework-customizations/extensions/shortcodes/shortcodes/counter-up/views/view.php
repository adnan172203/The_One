<?php 
$theone_counter_up	= '';
if (!defined('FW')) die('Access Forbidden');
	$theone_counter_up	= isset($atts['theone_counter_up']) ? $atts['theone_counter_up'] : '' ;
?>

<div class="row">
    <div class="counter-item bg-clr">
        <div class="counter-item-inner">
			<?php if( !empty($theone_counter_up) ): foreach ($theone_counter_up as $counter):?>
                <div class="count-element">
                    <div class="count-element-inner">
                        <span class="counter"><?php echo !empty($counter['counting']) ? esc_html($counter['counting']) : '' ; ?></span>
                        <span class="count-span"><?php echo !empty($counter['numerals']) ? esc_html($counter['numerals']) : '' ; ?></span>
                        <p><?php echo !empty($counter['title']) ? esc_html($counter['title']) : '' ; ?></p>
                    </div>
                </div>
			<?php endforeach; endif;?>
        </div>
    </div>
</div>