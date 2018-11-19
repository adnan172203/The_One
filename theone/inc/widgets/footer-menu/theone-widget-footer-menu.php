<?php
class TheOne_Widget_Footer_Menu extends WP_Widget {
	public function __construct()
	{
		parent::__construct(
            'theone_footer_menu',
            esc_html__('TheOne:: Footer Menu', 'theone'),
            array('description' => esc_html__( 'Widgets to display footer menu', 'theone' ))
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
        }    ?>
		<div class="footer-widget-content">
        <?php                   
        if ( has_nav_menu( 'menu-2' ) ) {
            wp_nav_menu(array(
                'theme_location'=> 'menu-2',
                'menu_class'=> 'footer-menu',
                'container' => ' '
            ));
        }    
        ?></div><?php                 
        echo $args['after_widget'];
        ?></div><?php
	}
    //Widget Input field
    public function form($instance){
        if( isset($instance['title'])){
            $title = $instance[ 'title' ];
        }
        else{
            $title = '';
        }
    ?>
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>">
            <?php esc_html_e('Title:', 'theone') ?>
        </label>
        <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
    </p>

    <?php
    }

        // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
} 

if ( ! function_exists( 'theone_footer_menu_init' ) ) {
  function theone_footer_menu_init() {
    register_widget( 'TheOne_Widget_Footer_Menu' );
  }
  add_action( 'widgets_init', 'theone_footer_menu_init' );
}