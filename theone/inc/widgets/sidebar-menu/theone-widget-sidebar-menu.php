<?php
class TheOne_Widget_Sidebar_Menu extends WP_Widget {
	public function __construct()
	{
		parent::__construct(
            'theone_sidebar_menu',
            esc_html__('TheOne:: Sidebar Menu', 'theone'),
            array('description' => esc_html__( 'Widgets to display Sidebar Menu', 'theone' ))
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
        ?><?php $CurrentID = get_the_ID(); ?>

        <?php $the_query = new WP_Query( array(
                'post_type'           => 'service',
                'post_status'         => 'publish',
                'posts_per_page'    => -1,
                'post__not_in'      => array($CurrentID)
            ) ); ?>
            <ul class="service-list">
                <?php 
                    if( $the_query->have_posts() ): while( $the_query->have_posts() ): $the_query->the_post();
                    $theone_service_icon = fw_get_db_post_option( get_the_ID(), 'theone_service_icon');
                 ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php if(!empty($theone_service_icon['url'])): ?>
                            <img src="<?php echo !empty($theone_service_icon['url']) ? esc_url($theone_service_icon['url']) : ''; ?>" alt="service">
                        <?php else: ?>
                            <i class="<?php echo !empty($theone_service_icon['icon-class']) ? esc_attr($theone_service_icon['icon-class']) : '' ; ?>" aria-hidden="true"></i>
                        <?php endif; ?>
                        <span><?php the_title(); ?></span>
                    </a>
                </li>
            <?php endwhile; endif; ?>
            </ul>
        <?php                  
        echo $args['after_widget'];
        
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

if ( ! function_exists( 'theone_sidebar_menu_init' ) ) {
  function theone_sidebar_menu_init() {
    register_widget( 'TheOne_Widget_Sidebar_Menu' );
  }
  add_action( 'widgets_init', 'theone_sidebar_menu_init');
}
