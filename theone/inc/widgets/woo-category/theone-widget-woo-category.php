<?php
class TheOne_Widget_Woo_Category extends WP_Widget {
    public function __construct()
    {
        parent::__construct(
            'theone_woo_category',
            esc_html__('TheOne:: WooCommerce Category', 'theone'),
            array('description' => esc_html__( 'WooCommerce Category Sidebar', 'theone' ))
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
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php 
            $taxonoomy      = 'product_cat';
            $hierarchical   = 1;
            $order_by       = 'name';
            $empty          = 0;
            $args1  = array(
                'taxonomy'      => $taxonoomy,
                'orderby'       => $order_by,
                'hierarchical'  => $hierarchical,
                'hide_empty'    => $empty,
            );
            $i = 1;
            $all_categories = get_categories($args1);
            foreach ( $all_categories  as $category_single ) :

            if( $category_single -> category_parent == 0 ):

            $category_id = $category_single -> term_id;
         ?>
            <div class="panel">
                <div class="custom-panel-heading" role="tab" id="headingOne<?php echo esc_attr($i); ?>">
                    <h6 class="custom-panel-title">
                        <a <?php if ( $i !== 1 ) { echo 'class="collapsed"'; } ?> role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo esc_attr($i); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo esc_attr($i); ?>">
                          <?php echo esc_html( $category_single -> name ); ?>
                          <div class="plus-minus-icon">
                              <span class="plus-icon"></span>
                              <span class="minus-icon"></span>
                          </div>
                        </a>
                    </h6>
                </div>
                <div id="collapseOne<?php echo esc_attr($i); ?>" class="panel-collapse collapse <?php if( $i == 1){ echo 'in';} ?>" role="tabpanel" aria-labelledby="headingOne<?php echo esc_attr($i); ?>">
                    <div class="panel-body custom-panel-body">
                        <ul class="category-list">
                                <?php 

                                    $args2  = [

                                        'taxonomy'      => $taxonoomy,
                                        'orderby'       => $order_by,
                                        'hierarchical'  => $hierarchical,
                                        'hide_empty'    => $empty,
                                    ];

                                    $sub_categories = get_categories($args2);

                                    if( $sub_categories  ):

                                        foreach ( $sub_categories as $sub_category_single ) :

                                        $term_link = get_term_link( $sub_category_single );
                                 ?>
                           <li><a href="<?php echo esc_url($term_link) ?>"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $sub_category_single->name; ?></a></li>

                                <?php   endforeach; 

                                    endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

<?php 

    $i++;
    endif;
    endforeach;
?>

        </div>

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

if ( ! function_exists( 'theone_sidebar_woo_cat_init' ) ) {
  function theone_sidebar_woo_cat_init() {
    register_widget( 'TheOne_Widget_Woo_Category' );
  }
  add_action( 'widgets_init', 'theone_sidebar_woo_cat_init');
}
