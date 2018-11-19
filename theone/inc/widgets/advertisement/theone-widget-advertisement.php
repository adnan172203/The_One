<?php
/**
 * Register Sidebar Widget
 */
function allinone_sidebar_adv_widget() {
    register_widget('TheOne_Widget_Sidebar_Add');
}
add_action( 'widgets_init', 'allinone_sidebar_adv_widget' );
/**
 * Sidebar Adv widget class
 */
class TheOne_Widget_Sidebar_Add extends WP_Widget {
	public function __construct(){
		parent::__construct(
			'sidebar_add',
			esc_html__('TheOne::Sidebar Add','theone'),
			array(
				'description' => esc_html__('Show addvertisement in your sidebar widget','theone')
			)
		);
	}

	public function form($instance){
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'addv_image_link' => '', 'img_url' => '', 'add_script' => '' ) );
        $title = $instance['title'];
        $addv_image_link = $instance['addv_image_link'];
        $img_url = $instance['img_url'];
        $add_script = $instance['add_script'];
		?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title','theone'); ?></label>
				<input type="text" name="<?php echo esc_attr($this->get_field_name('title')); ?>" id="<?php echo esc_attr($this->get_field_id('title')); ?>" class="widefat" value="<?php echo esc_attr($title); ?>">
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('addv_image_link')); ?>"><?php esc_html_e('Advertisement Link','theone'); ?></label>
				<input type="text" name="<?php echo esc_attr($this->get_field_name('addv_image_link')); ?>" id="<?php echo esc_attr($this->get_field_id('addv_image_link')); ?>" class="widefat" id="url_link" value="<?php echo esc_attr($addv_image_link); ?>">
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('img_url')); ?>"><?php esc_html_e('Advertisement Image Url','theone'); ?></label>
				<input type="text" name="<?php echo esc_attr($this->get_field_name('img_url')); ?>" id="<?php echo esc_attr($this->get_field_id('img_url')); ?>" class="widefat" id="url_link" value="<?php echo esc_attr($img_url); ?>">
			</p>
			<p>
				<button type="button" class="button" id="img_link_btn"><?php esc_html_e('Select Add Image','theone'); ?></button>
			</p>
			<p style="overflow:hidden">	
				<img src="<?php echo esc_attr($img_url); ?>" alt="<?php echo esc_attr($img_url); ?>">
			</p>
			<hr>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id('add_script')); ?>"><?php esc_html_e('Add Script','theone'); ?></label>
				<textarea name="<?php echo esc_attr($this->get_field_name('add_script')); ?>" id="<?php echo esc_attr($this->get_field_id('add_script')); ?>" cols="30" rows="10" class="widefat"><?php echo esc_html($add_script); ?></textarea>
			</p>
		<?php
	}

	public function update($new_instance,$old_instance){
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['addv_image_link'] = (!empty($new_instance['addv_image_link'])) ? strip_tags($new_instance['addv_image_link']) : '';
        $instance['img_url'] = (!empty($new_instance['img_url'])) ? strip_tags($new_instance['img_url']) : '';
        $instance['add_script'] = (!empty($new_instance['add_script'])) ? $new_instance['add_script'] : '';
        return $instance;
	}

	public function widget ($args,$instance) {
        $title = $instance['title'];
        $addv_image_link = $instance['addv_image_link'];
        $img_url = $instance['img_url'];
        $add_script = $instance['add_script'];
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $title ). $args['after_title'];
        }
        if(!empty($img_url) && !empty($addv_image_link) && empty($add_script)):
        ?>
		<div class="post-thumb">
			<a href="<?php echo esc_attr($addv_image_link); ?>"><img src="<?php echo esc_attr($img_url); ?>" alt="<?php echo esc_attr($img_url); ?>" /></a>
		</div>     
        <?php
    	else:?>
		<div class="sidebar-banner post-thumb">
			<?php echo wp_kses_post($add_script); ?>
		</div> 
    	<?php endif;
        echo $args['after_widget'];
	}


}