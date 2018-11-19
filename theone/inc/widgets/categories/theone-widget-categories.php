<?php
class TheOne_Widget_Categories extends WP_Widget {
	public function __construct()
	{
		parent::__construct(
            'theone_categories',
            esc_html__('TheOne:: Categories', 'theone'),
            array('description' => esc_html__( 'Category widget to show category', 'theone' ))
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
        <div class="catagories">
            <ul class="category-list" >
                <?php
                     $categories = get_terms('category', array(
                            'orderby'   => 'name',
                            'hide_empty'    => true,
                        ));

                     foreach($categories as $category) :

                        $category_link = get_term_link( $category, $category->slug );
                        $cat_count = $category->count ;
                        
                 ?>
                <li>
                    <a href="<?php echo esc_url($category_link );?>">
                        <div class="category-list-left">
                            <span><i class="fa fa-angle-double-right"></i><?php echo esc_html($category->name ); ?></span>
                        </div>
                        <div class="category-list-right">
                            <span>
                                <?php 
									if( $instance['checkbox_count'] == true ){
	                                    if($cat_count < 10){
	                                        echo '0'. esc_html($cat_count);
	                                    }
	                                    else echo  esc_html($cat_count) ;
	                                } 
                                ?>
                            </span>
                        </div>
                    </a>
                </li>
              <?php endforeach; ?>
            </ul>
        </div><!-- .widget-content -->
<?php
        echo $args['after_widget'];
	}

    //Widget form inputs
    public function form($instance){
        //Defaults
        $instance = wp_parse_args( (array) $instance, array( 'title' => '','checkbox_count'=>'on') );
        $title = esc_attr( $instance['title'] );
        $hierarchical = false;
        $dropdown = false;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'theone'); ?></label>
            <input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value=" <?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $instance[ 'checkbox_count' ], 'on' ); ?> id="<?php echo $this->get_field_id( 'checkbox_count' ); ?>" name="<?php echo $this->get_field_name( 'checkbox_count' ); ?>" /> 
            <label for="<?php echo $this->get_field_id( 'checkbox_count' ); ?>"><?php esc_html_e('Show post count:', 'theone'); ?></label>
        </p>
        <?php
    }
        // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['checkbox_count'] = ( ! empty( $new_instance['checkbox_count'] ) ) ?  $new_instance['checkbox_count'] : '';
    return $instance;
    }
}

if ( ! function_exists( 'theone_categories_init' ) ) {
  function theone_categories_init() {
    register_widget( 'TheOne_Widget_Categories' );
  }
  add_action( 'widgets_init', 'theone_categories_init' );
}