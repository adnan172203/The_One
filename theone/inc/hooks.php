<?php
//get_pricing_table_categories
if ( ! function_exists( 'theone_pricing_categories_select' ) ):
    function theone_pricing_categories_select(){
        $categories_obj = get_terms( 'pricing_cat', array(
            'hide_empty' => false
        ));
        $cats = array();
        //$cats['0'] = 'All';
        foreach ($categories_obj as $cat) {
            $cat_name = $cat->name;
            $cat_count = $cat->count;
            $cat_name = $cat_name.' ('.$cat_count.')';
            $cats[$cat->term_id] = $cat_name;            
        }
        return $cats;
    }
endif;
//get_pricing_table_categories
if ( ! function_exists( 'theone_pricing_tags_select' ) ):
    function theone_pricing_tags_select(){
        $tags_obj = get_terms( 'pricing_tag', array(
            'hide_empty' => false
        ));
        $tags = array();
        //$tags['0'] = 'All';
        foreach ($tags_obj as $tag) {
            $tag_name = $tag->name;
            $tag_count = $tag->count;
            $tag_name = $tag_name.' ('.$tag_count.')';
            $tags[$tag->term_id] = $tag_name;            
        }
        return $tags;
    }
endif;

/**
 * function to select query options and filtering post for slider
 * 
 */

if ( ! function_exists( 'theone_pricing_query' ) ) :
    function theone_pricing_query ($limit,$postfrom,$category,$tag,$order,$orderby){
        if($postfrom === 'category'):  
            $query_args = array(
                'post_type'           => 'pricing',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,                
                'tax_query' => array(
                    array(
                        'taxonomy' => 'pricing_cat',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true
            );                
        elseif($postfrom === 'tags'):
            $query_args = array(
                'post_type'           => 'pricing',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,               
                'tax_query' => array(
                    array(
                        'taxonomy' => 'pricing_tag',
                        'field' => 'id',
                        'terms' => $tag
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        else:
            $query_args = array(
                'post_type'           => 'pricing',
                'post_status'         => 'publish',
                'posts_per_page'      =>  $limit,  
                'order'               => $order,
                'orderby'             => $orderby,      
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        endif;
        $the_query = new WP_Query( $query_args );
        return $the_query;
    }
endif;


//get_team_member_categories
if ( ! function_exists( 'theone_get_member_categories_select' ) ):
    function theone_get_member_categories_select(){
            $categories_obj = get_terms( 'member_cat', array(
                'hide_empty' => false
            ));
            $cats = array();
            //$cats['0'] = 'All';
            foreach ($categories_obj as $cat) {
                $cat_name = $cat->name;
                $cat_count = $cat->count;
                $cat_name = $cat_name.' ('.$cat_count.')';
                $cats[$cat->term_id] = $cat_name;            }
            return $cats;
    }
endif;
//get_member_tags
if ( ! function_exists( 'theone_get_member_tags_select' ) ):
    function theone_get_member_tags_select(){
        $tags_obj = get_terms( 'member_tag', array(
            'hide_empty' => false
        ));
        $tags = array();
        //$tags['0'] = 'All';
        foreach ($tags_obj as $tag) {
            $tag_name = $tag->name;
            $tag_count = $tag->count;
            $tag_name = $tag_name.' ('.$tag_count.')';
            $tags[$tag->term_id] = $tag_name;            
        }
        return $tags;
    }
endif;


/**
 * function to select query options and filtering post for slider
 * 
 */

 if( !function_exists('theone_member_query')):

   function theone_member_query ($limit,$postfrom,$category,$tag,$order,$orderby){
        if($postfrom === 'category'):  
            $query_args = array(
                'post_type'           => 'member',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,                
                'tax_query' => array(
                    array(
                        'taxonomy' => 'member_cat',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true
            );                
        elseif($postfrom === 'tags'):
            $query_args = array(
                'post_type'           => 'member',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,               
                'tax_query' => array(
                    array(
                        'taxonomy' => 'member_tag',
                        'field' => 'id',
                        'terms' => $tag
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        else:
            $query_args = array(
                'post_type'           => 'member',
                'post_status'         => 'publish',
                'posts_per_page'      =>  $limit,  
                'order'               => $order,
                'orderby'             => $orderby,      
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        endif;
        $the_query = new WP_Query( $query_args );
        return $the_query;
    }
endif;


//theone Service Catagory 

//get_service_categories
if ( ! function_exists( 'theone_get_service_categories_select' ) ):
    function theone_get_service_categories_select(){
            $categories_obj = get_terms( 'service_cat', array(
                'hide_empty' => false
            ));
            $cats = array();
            //$cats['0'] = 'All';
            foreach ($categories_obj as $cat) {
                $cat_name = $cat->name;
                $cat_count = $cat->count;
                $cat_name = $cat_name.' ('.$cat_count.')';
                $cats[$cat->term_id] = $cat_name;            
            }
            return $cats;
    }
endif;
//get_service_tags
if ( ! function_exists( 'theone_get_service_tags_select' ) ):
    function theone_get_service_tags_select(){
        $tags_obj = get_terms( 'service_tag', array(
            'hide_empty' => false
        ));
        $tags = array();
        //$tags['0'] = 'All';
        foreach ($tags_obj as $tag) {
            $tag_name = $tag->name;
            $tag_count = $tag->count;
            $tag_name = $tag_name.' ('.$tag_count.')';
            $tags[$tag->term_id] = $tag_name;            
        }
        return $tags;
    }
endif;
/**
 * function to select query options and filtering post for slider
 * 
 */

 if( !function_exists('theone_service_query')):

   function theone_service_query($limit,$postfrom,$category,$tag,$order,$orderby){
        if($postfrom === 'category'):  
            $query_args = array(
                'post_type'           => 'service',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,                
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service_cat',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true
            );                
        elseif($postfrom === 'tags'):
            $query_args = array(
                'post_type'           => 'service',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,               
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service_tag',
                        'field' => 'id',
                        'terms' => $tag
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        else:
            $query_args = array(
                'post_type'           => 'service',
                'post_status'         => 'publish',
                'posts_per_page'      =>  $limit,  
                'order'               => $order,
                'orderby'             => $orderby,      
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        endif;
        $the_query = new WP_Query( $query_args );
        return $the_query;
    }
endif;




//theone testimonial Catagory 

//get_testimonial_categories
if ( ! function_exists( 'theone_get_testimonial_categories_select' ) ):
    function theone_get_testimonial_categories_select(){
            $categories_obj = get_terms( 'testimonial_cat', array(
                'hide_empty' => false
            ));
            $cats = array();
            //$cats['0'] = 'All';
            foreach ($categories_obj as $cat) {
                $cat_name = $cat->name;
                $cat_count = $cat->count;
                $cat_name = $cat_name.' ('.$cat_count.')';
                $cats[$cat->term_id] = $cat_name;            }
            return $cats;
    }
endif;
//get_member_tags
if ( ! function_exists( 'theone_get_testimonial_tags_select' ) ):
    function theone_get_testimonial_tags_select(){
        $tags_obj = get_terms( 'testimonial_tag', array(
            'hide_empty' => false
        ));
        $tags = array();
        //$tags['0'] = 'All';
        foreach ($tags_obj as $tag) {
            $tag_name = $tag->name;
            $tag_count = $tag->count;
            $tag_name = $tag_name.' ('.$tag_count.')';
            $tags[$tag->term_id] = $tag_name;            
        }
        return $tags;
    }
endif;
/**
 * function to select query options and filtering post for slider
 * 
 */

 if( !function_exists('theone_testimonial_query')):

   function theone_testimonial_query($limit,$postfrom,$category,$tag,$order,$orderby){
        if($postfrom === 'category'):  
            $query_args = array(
                'post_type'           => 'testimonial',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,                
                'tax_query' => array(
                    array(
                        'taxonomy' => 'testimonial_cat',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true
            );                
        elseif($postfrom === 'tags'):
            $query_args = array(
                'post_type'           => 'testimonial',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,               
                'tax_query' => array(
                    array(
                        'taxonomy' => 'testimonial_tag',
                        'field' => 'id',
                        'terms' => $tag
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        else:
            $query_args = array(
                'post_type'           => 'testimonial',
                'post_status'         => 'publish',
                'posts_per_page'      =>  $limit,  
                'order'               => $order,
                'orderby'             => $orderby,      
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        endif;
        $the_query = new WP_Query( $query_args );
        return $the_query;
    }
endif;



//theone POST

//get_post_categories
if ( ! function_exists( 'theone_get_blog_categories_select' ) ):
    function theone_get_blog_categories_select(){
            $categories_obj = get_terms( 'category', array(
                'hide_empty' => false
            ));
            $cats = array();
            //$cats['0'] = 'All';
            foreach ($categories_obj as $cat) {
                $cat_name = $cat->name;
                $cat_count = $cat->count;
                $cat_name = $cat_name.' ('.$cat_count.')';
                $cats[$cat->term_id] = $cat_name;            }
            return $cats;
    }
endif;
//get_member_tags
if ( ! function_exists( 'theone_get_blog_tags_select' ) ):
    function theone_get_blog_tags_select(){
        $tags_obj = get_tags();
        $tags = array();
        //$tags['0'] = 'All';
        foreach ($tags_obj as $tag) {
            $tag_name = $tag->name;
            $tag_count = $tag->count;
            $tag_name = $tag_name.' ('.$tag_count.')';
            $tags[$tag->term_id] = $tag_name;            
        }
        return $tags;
    }
endif;
/**
 * function to select query options and filtering post for slider
 * 
 */

 if( !function_exists('theone_post_query')):

   function theone_post_query($limit,$postfrom,$category,$tag,$order,$orderby){
        if($postfrom === 'category'):  
            $query_args = array(
                'post_type'           => 'post',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,                
                'category__in'        => $category,
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true
            );                
        elseif($postfrom === 'tags'):
            $query_args = array(
                'post_type'           => 'post',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,            
                'tag__in'             => $tag,
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        else:
            $query_args = array(
                'post_type'           => 'post',
                'post_status'         => 'publish',
                'posts_per_page'      =>  $limit,  
                'order'               => $order,
                'orderby'             => $orderby,      
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        endif;
        $the_query = new WP_Query( $query_args );
        return $the_query;
    }
endif;

//theone Portfolio

//get_portfolio_categories
if ( ! function_exists( 'theone_get_portfolio_categories_select' ) ):
    function theone_get_portfolio_categories_select(){
            $categories_obj = get_terms( 'portfolio_cat', array(
                'hide_empty' => false
            ));
            $cats = array();
            //$cats['0'] = 'All';
            foreach ($categories_obj as $cat) {
                $cat_name = $cat->name;
                $cat_count = $cat->count;
                $cat_name = $cat_name.' ('.$cat_count.')';
                $cats[$cat->term_id] = $cat_name;            }
            return $cats;
    }
endif;
//get_member_tags
if ( ! function_exists( 'theone_get_portfolio_tags_select' ) ):
    function theone_get_portfolio_tags_select(){
        $tags_obj = get_terms( 'portfolio_tag', array(
                'hide_empty' => false
            ));
        $tags = array();
        //$tags['0'] = 'All';
        foreach ($tags_obj as $tag) {
            $tag_name = $tag->name;
            $tag_count = $tag->count;
            $tag_name = $tag_name.' ('.$tag_count.')';
            $tags[$tag->term_id] = $tag_name;            
        }
        return $tags;
    }
endif;
/**
 * function to select query options and filtering post for slider
 * 
 */

 if( !function_exists('theone_portfolio_query')):

   function theone_portfolio_query($limit,$postfrom,$category,$tag,$order,$orderby){
        if($postfrom === 'category'):  
            $query_args = array(
                'post_type'           => 'portfolio',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,                
                'tax_query' => array(
                    array(
                        'taxonomy' => 'portfolio_cat',
                        'field' => 'id',
                        'terms' => $category
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true
            );                
        elseif($postfrom === 'tags'):
            $query_args = array(
                'post_type'           => 'portfolio',
                'post_status'         => 'publish',
                'posts_per_page'      => $limit,            
                'tax_query' => array(
                    array(
                        'taxonomy' => 'portfolio_tag',
                        'field' => 'id',
                        'terms' => $tag
                    )
                ),
                'order'               => $order,
                'orderby'             => $orderby,
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        else:
            $query_args = array(
                'post_type'           => 'portfolio',
                'post_status'         => 'publish',
                'posts_per_page'      =>  $limit,  
                'order'               => $order,
                'orderby'             => $orderby,      
                'ignore_sticky_posts' => true,
                'offset'              => 0 
            );
        endif;
        $the_query = new WP_Query( $query_args );
        return $the_query;
    }
endif;

