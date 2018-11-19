<?php 
$theone_counter_two_title	= '';
$theone_counter_two_counting	= '';
$theone_counter_two_numerals	= '';
if (!defined('FW')) die('Access Forbidden');
	$theone_counter_two_title	= isset($atts['theone_counter_two_title']) ? $atts['theone_counter_two_title'] : '' ;
	$theone_counter_two_counting	= isset($atts['theone_counter_two_counting']) ? $atts['theone_counter_two_counting'] : '' ;
	$theone_counter_two_numerals	= isset($atts['theone_counter_two_numerals']) ? $atts['theone_counter_two_numerals'] : '' ;
?>
<div class="counter-wrapper counter-up">
	<div class="count-element">
		<?php if (!empty($theone_counter_two_counting)): ?>
	    	<span class="counter"><?php echo !empty($theone_counter_two_counting) ? esc_html($theone_counter_two_counting) : '' ; ?></span>
		<?php endif ?>
		<?php if (!empty($theone_counter_two_numerals)): ?>
			<span class="count-span"><?php echo !empty($theone_counter_two_numerals) ? esc_html($theone_counter_two_numerals) : '' ; ?></span>
		<?php endif ?>
	    <?php if (!empty($theone_counter_two_title)): ?>
			<p><?php echo !empty($theone_counter_two_title) ? esc_html($theone_counter_two_title) : '' ; ?></p>
	    <?php endif ?>
	    
	</div>
</div>