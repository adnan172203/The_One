<?php
	$theone_member_desi = '';
	$theone_member_skills_switch = '';
	$theone_skill_section_title = '';
	$theone_member_skills = '';
	$theone_member_award_switch = '';
	$theone_award_section_title = '';
	$theone_menber_award = '';
	if (defined("FW")) {
	    //metabox data
	    $theone_member_desi = fw_get_db_post_option( get_the_ID(), 'theone_member_desi');
	    $social_profile = fw_get_db_post_option( get_the_ID(), 'theone_member_social_profile');
	    //Skill Section
	    $theone_member_skills_picker = fw_get_db_post_option( get_the_ID(), 'theone_member_skills_picker');
	    $theone_member_skills_switch = $theone_member_skills_picker['theone_member_skills_switch'];
	    $theone_skill_section_title = $theone_member_skills_picker['on']['title'];
	    $theone_member_skills = $theone_member_skills_picker['on']['skills'];
	    //Award Section

	    $theone_member_award_picker = fw_get_db_post_option( get_the_ID(), 'theone_member_award_picker');
	    $theone_member_award_switch = $theone_member_award_picker['theone_member_award_switch'];
	    $theone_award_section_title = $theone_member_award_picker['on']['title'];
	    $theone_menber_award = $theone_member_award_picker['on']['award'];
	}

?>

<div class="section-wrapper single-team row">
    <div class="col-md-6 col-sm-12 col-xs-12">
    	<?php if (has_post_thumbnail()): ?>
            <div class="team-thumb">
                <?php the_post_thumbnail(); ?>
            </div>
    	<?php endif ?>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="team-content">
        	<?php the_title('<h5>', '</h5>'); ?>
            <p><?php echo !empty($theone_member_desi) ? esc_html($theone_member_desi) : ''; ?></p>

            <ul class="social-media">
				<?php if ( ! empty($social_profile)): foreach ($social_profile as $profile) :
				?>
				<li><a href="<?php echo !empty($profile['url']) ? esc_url($profile['url']) : ''; ?> "><i class="<?php echo !empty( $profile['icon']) ? esc_attr($profile['icon']['icon-class']) : ''; ?>" style=" background-color: <?php echo !empty( $profile['icon_bg']) ? esc_attr($profile['icon_bg']) : '' ; ?>"></i></a></li>
				<?php endforeach; endif; ?>
            </ul>
            <p class="team-para"><?php echo get_the_content(); ?></p>
        </div>
		<?php if ( $theone_member_skills_switch == 'on'): ?>
            <div class="team-widget">
                <div class="team-widget-heading">
                    <h4><?php echo !empty($theone_skill_section_title) ? esc_html($theone_skill_section_title) : ''; ?></h4>
                </div>
                <div class="team-widget-content">
					<?php foreach ( $theone_member_skills as $skill): ?>
                        <div class="progressbar" data-animate="false">
                            <div class="circle" data-percent="<?php echo !empty($skill['value']) ? esc_attr($skill['value']) : '' ; ?>">
                                <div><?php echo !empty($skill['value']) ? esc_attr($skill['value']). '%' : ''; ?>' : '' ; ?></div>
                            </div>
                            <div class="progressbar-content">
                                <p><?php echo !empty($skill['name']) ? esc_attr($skill['name']) : '' ; ?></p>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
		<?php endif ?>

		<?php if ( $theone_member_award_switch == 'on'): ?>
            <div class="team-widget">
                <div class="team-widget-heading">
                    <h4><?php echo !empty($theone_award_section_title) ? esc_html($theone_award_section_title) : ''; ?></h4>
                </div>
                <div class="team-widget-content">
                    <ul>
						<?php foreach ($theone_menber_award as $award): ?>
							<li>
                                <img src="<?php echo !empty($award['icon']) ? esc_url($award['icon']['url']) : '' ; ?>">
                                <p><?php echo !empty($award['name']) ? esc_html($award['name']) : '' ; ?></p>
                            </li>
						<?php endforeach ?>
                    </ul>
                </div>
            </div>
		<?php endif; ?>
    </div>
</div>