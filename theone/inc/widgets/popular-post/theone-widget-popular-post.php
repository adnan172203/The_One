<?php
class TheOne_Widget_Popular_Post extends WP_Widget {
	public function __construct()
	{
		parent::__construct(
            'theone_popular_post',
            esc_html__('TheOne:: Popular Post', 'theone'),
            array('description' => esc_html__( 'Widgets to display popular posts', 'theone' ))
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
        //Popular Post Query
        $limit = '';
        if (! empty( $instance['number'] ) ) {
            $limit .= $instance['number'];
        }
        theone_post_views(get_the_ID());
        $query_args = array( 
            'post_type' => 'post', 
            'posts_per_page' => $limit, 
            'meta_key' => 'post_views_count', 
            'orderby' => 'meta_value_num',
            'ignore_sticky_posts' => true 
        );

        $the_query = new WP_Query( $query_args );?>

        <div class="popular-post-option">
            <ul class="post-type">
                <?php if( $the_query->have_posts() ): while( $the_query->have_posts() ): $the_query->the_post() ; ?>
                    <li <?php post_class(); ?>>
                    	<?php if( has_post_thumbnail() ) :?>
                            <div class="post-type-left">
                                <?php the_post_thumbnail('theone-95-85');  ?>
                            </div>
                    	<?php endif; ?>
                        <div class="post-type-right">
                            <?php the_title('<h6><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h6>' ) ; ?>
                            <p><?php echo theone_time_link();  ?></p>
                        </div>
                    </li>
            	<?php endwhile; endif;  ?>
            </ul>
        </div><!-- .popular-post-contant -->

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
        if( isset($instance['number'])){
            $number = $instance[ 'number' ];
        }
        else{
            $number = '5';
        }
    ?>
    <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>">
            <?php esc_html_e('Title:', 'theone') ?>
        </label>
        <input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php esc_html_e('Number of post to show:', 'theone'); ?></label>
        <input class="tiny-text" type="number" name="<?php echo $this->get_field_name( 'number' ); ?>" id="<?php echo $this->get_field_id( 'number' ); ?>" value="<?php echo esc_attr( $number ); ?>">
    </p>
    <?php
    }

        // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
    return $instance;
    }
} 

if ( ! function_exists( 'theone_popular_post_init' ) ) {
  function theone_popular_post_init() {
    register_widget( 'TheOne_Widget_Popular_Post' );
  }
  add_action( 'widgets_init', 'theone_popular_post_init');
}
