<?php
class TheOne_Widget_About_Us extends WP_Widget {
	public function __construct()
	{
		parent::__construct(
            'theone_about_us',
            esc_html__('TheOne:: About Us', 'theone'),
            array('description' => esc_html__( 'About us widget to display your content and social profiles.', 'theone' ))
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
        ?><div class="col-md-3 col-sm-12 col-xs-12"><?php
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }
        ?>

        <div class="footer-widget-content">
            <?php if ( ! empty( $instance['content']) ) : ?>
                <p><?php echo wp_kses_post($instance['content']); ?></p>
          <?php endif;  ?>
          <?php if ( ! empty( $instance['phone'] ) ) : ?>
                <div class="template-info">
                    <div class="template-info-left">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="template-info-right">
                        <p><?php echo( $instance['address'] ) ; ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ( ! empty( $instance['phone'] ) ) : ?>
                <div class="template-info">
                    <div class="template-info-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="template-info-right">
                        <p><?php echo( $instance['phone'] ) ; ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ( ! empty( $instance['email'] ) ) : ?>
                <div class="template-info">
                    <div class="template-info-left">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="template-info-right">
                        <p><?php echo( $instance['email'] ) ; ?></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>


<?php
        echo $args['after_widget'];?></div><?php
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
        if( isset($instance['address'])){
            $address = $instance['address'];
        }
        else{
            $address = '';
        }
        if( isset($instance['phone'])){
            $phone = $instance['phone'];
        }
        else{
            $phone = '';
        }
        if( isset($instance['email'])){
            $email = $instance['email'];
        }
        else{
            $email = '';
        }

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'theone'); ?></label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>"><?php esc_html_e('About Text:', 'theone'); ?> </label>
            <textarea class="widefat"name="<?php echo $this->get_field_name('content'); ?>" id="<?php echo $this->get_field_id('content'); ?>" cols="30" rows="10"><?php echo esc_attr( $content ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('address'); ?>"><?php esc_html_e('Address:', 'theone'); ?></label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('address'); ?>" id="<?php echo $this->get_field_id('address'); ?>" value="<?php echo esc_attr( $address ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('phone'); ?>"><?php esc_html_e('Phone:', 'theone'); ?></label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('phone'); ?>" id="<?php echo $this->get_field_id('phone'); ?>" value="<?php echo esc_attr( $phone ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('email'); ?>"><?php esc_html_e('Email:', 'theone'); ?></label>
            <input class="widefat" type="text" name="<?php echo $this->get_field_name('email'); ?>" id="<?php echo $this->get_field_id('email'); ?>" value="<?php echo esc_attr( $email ); ?>">
        </p>
        <?php
    }
            // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['content'] = ( ! empty( $new_instance['content'] ) ) ?  $new_instance['content'] : '';
    $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
    $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
    $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
    return $instance;
    }
}
if ( ! function_exists( 'theone_about_us_init' ) ) {
  function theone_about_us_init() {
    register_widget( 'TheOne_Widget_About_Us' );
  }
  add_action( 'widgets_init', 'theone_about_us_init');
}