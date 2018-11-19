<?php
class TheOne_Widget_Sidebar_Newslatter extends WP_Widget {
	public function __construct()
	{
		parent::__construct(
            'theone_sidebar_newslatter',
            esc_html__('TheOne:: Sidebar Newslatter', 'theone'),
            array('description' => esc_html__( 'Sidebar NewsLatter Widget', 'theone' ))
        );
	}

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        ?>
        <div class="sidebar-nl">
            <?php echo do_shortcode( $instance['shortcode']  ) ?>
        </div>
        <?php
            echo $args['after_widget'];
	}
    //Widget Input Fields
    public function form($instance){
        if( isset($instance['title'])){
            $title = $instance['title'];
        }
        else{
            $title = '';
        }
        if( isset($instance['content'])){
            $content = $instance['content'];
        }
        else{
            $content = '';
        }
        if( isset($instance['shortcode'])){
            $shortcode = $instance['shortcode'];
        }
        else{
            $shortcode = '';
        }
        if( isset($instance['heading'])){
            $heading = $instance['heading'];
        }
        else{
            $heading = '';
        }
        if( isset($instance['alert'])){
            $alert = $instance['alert'];
        }
        else{
            $alert = '';
        }

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'theone'); ?></label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('shortcode'); ?>"><?php esc_html_e('MailPoet Shortcode:', 'theone'); ?> </label>
            <textarea class="widefat"name="<?php echo $this->get_field_name('shortcode'); ?>" id="<?php echo $this->get_field_id('shortcode'); ?>" cols="30" rows="10"><?php echo esc_attr( $shortcode ); ?></textarea>
        </p>
        <?php
    }
            // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['shortcode'] = ( ! empty( $new_instance['shortcode'] ) ) ?  $new_instance['shortcode'] : '';
    return $instance;
    }
}
if ( ! function_exists( 'theone_sidebar_nl_init' ) ) {
  function theone_sidebar_nl_init() {
    register_widget( 'TheOne_Widget_Sidebar_Newslatter' );
  }
  add_action( 'widgets_init', 'theone_sidebar_nl_init');
}