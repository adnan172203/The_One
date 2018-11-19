<?php
class TheOne_Widget_Footer_Newslatter extends WP_Widget {
	public function __construct()
	{
		parent::__construct(
            'theone_footer_newslatter',
            esc_html__('TheOne:: Footer Newslatter', 'theone'),
            array('description' => esc_html__( 'Footer NewsLatter Widget', 'theone' ))
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
        ?><div class="col-md-6 col-sm-12 col-xs-12"><?php
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        ?>
        <div class="footer-widget-content extra">
            <h4><?php echo( $instance['heading'] ) ; ?></h4>
            <p><?php echo( $instance['content'] ) ; ?></p>
            <div class="footer-nl">
                <?php echo do_shortcode( $instance['shortcode']  ) ?>
            </div>
            <?php if ( !empty($instance['alert'])): ?>
                <span><i class="fa fa-lock"></i><?php echo( $instance['alert'] ) ; ?></span>
            <?php endif ?>
        </div>
        <?php
            echo $args['after_widget'];
        ?></div><?php
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
            <label for="<?php echo $this->get_field_id('heading'); ?>"><?php esc_html_e('Heading:', 'theone'); ?></label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('heading'); ?>" id="<?php echo $this->get_field_id('heading'); ?>" value="<?php echo esc_attr( $heading ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>"><?php esc_html_e('Content:', 'theone'); ?> </label>
            <textarea class="widefat"name="<?php echo $this->get_field_name('content'); ?>" id="<?php echo $this->get_field_id('content'); ?>" cols="30" rows="10"><?php echo esc_attr( $content ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('shortcode'); ?>"><?php esc_html_e('MailPoet Shortcode:', 'theone'); ?> </label>
            <textarea class="widefat"name="<?php echo $this->get_field_name('shortcode'); ?>" id="<?php echo $this->get_field_id('shortcode'); ?>" cols="30" rows="10"><?php echo esc_attr( $shortcode ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('alert'); ?>"><?php esc_html_e('Alert:', 'theone'); ?></label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('alert'); ?>" id="<?php echo $this->get_field_id('alert'); ?>" value="<?php echo esc_attr( $alert ); ?>">
        </p>
        <?php
    }
            // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['content'] = ( ! empty( $new_instance['content'] ) ) ?  $new_instance['content'] : '';
    $instance['shortcode'] = ( ! empty( $new_instance['shortcode'] ) ) ?  $new_instance['shortcode'] : '';
    $instance['heading'] = ( ! empty( $new_instance['heading'] ) ) ? strip_tags( $new_instance['heading'] ) : '';
    $instance['alert'] = ( ! empty( $new_instance['alert'] ) ) ? strip_tags( $new_instance['alert'] ) : '';
    return $instance;
    }
}
if ( ! function_exists( 'theone_footer_nl_init' ) ) {
  function theone_footer_nl_init() {
    register_widget( 'TheOne_Widget_Footer_Newslatter' );
  }
  add_action( 'widgets_init', 'theone_footer_nl_init');
}