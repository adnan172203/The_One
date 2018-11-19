<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package TheOne
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function theone_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'theone_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function theone_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'theone_pingback_header' );

/**
*Add post view counter
*/


if( ! function_exists('theone_post_views')) :
function theone_post_views($post_ID) {

    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count';

    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);

    //If the the Post Custom Field value is empty.
    if($count == ''){
        $count = 0; // set the counter to zero.

        //Delete all custom fields with the specified key from the specified post.
        delete_post_meta($post_ID, $count_key);

        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        return $count . '';

        //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);

        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
            return $count . '';
        }
        //In all other cases return (count) Views
        else {
            return $count . '';
        }
    }
}
endif;
add_action( 'init', 'theone_post_views' );


    //Breadcrumb 
if (!function_exists('theone_breadcrum')): 
    function theone_breadcrum(){
?>
    <div class="page-header-content">
        <?php if (!is_single()): ?>
            <?php if(is_archive()){
                the_archive_title('<h2>', '</h2>');
            }
            ?>
            <?php if(is_search()){
                ?> 
                <h2><?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'theone' ), '<span>' . get_search_query() . '</span>' );
                ?></h2>
                 <?php
            }
            ?>
            <?php if(is_page()){
                the_title('<h2>', '</h2>');
            }?>
            <?php if(is_home()){
                ?>
                <h2>
                <?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) ); ?></h2>
                <?php
            }?>
        <?php endif ?>
        <ul class="custom-breadcrumb">
            <?php if(function_exists('theone_breadcrumb') && !is_page() && !is_search()){
                theone_breadcrumb();
            }?>
        </ul>
    </div>
<?php
    }
?>
<?php endif; 
        
/**   
*   Font Style for title and hesding
*/
        if ( ! function_exists( 'theone_title_font_style' ) ):
        function theone_title_font_style($title_font_style){
            $font_size = $title_font_style['size'];
            $font_color = $title_font_style['color'];
            $line_height = $title_font_style['line-height'];
            
            $title_font_style = "font-size : {$font_size}px; color : {$font_color}; line-height: {$line_height};";
            return $title_font_style;
        }
        endif;
/**
 * unyson icon register to display on icon picker
 * 
 */
function theone_unyson_icon_register($current_packs) {
    /**
     * $current_packs is an array of pack names.
     * You should return which one you would like to show in the picker.
     */
    return array('font-awesome');
}

add_filter('fw:option_type:icon-v2:filter_packs', 'theone_unyson_icon_register');


/* Convert hexdec color string to rgb(a) string */
 
function theone_hex2rgba($color, $opacity = false) {
 
    $default = 'rgb(0,0,0)';
 
    //Return default if no color provided
    if(empty($color))
          return $default; 
 
    //Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
            $color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
            if(abs($opacity) > 1)
                $opacity = 1.0;
            $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
            $output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}


// if no title then add widget block wrapper to before widget
add_filter( 'dynamic_sidebar_params', 'theone_check_sidebar_params' );
function theone_check_sidebar_params( $params ) {
    global $wp_registered_widgets;

    $settings_getter = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
    $settings = $settings_getter->get_settings();
    $settings = $settings[ $params[1]['number'] ];

    if ( $params[0][ 'after_widget' ] == '</div></div>' && isset( $settings[ 'title' ] ) && empty( $settings[ 'title' ] ) )
        $params[0][ 'before_widget' ] .= '<div class="widget-wrapper">';

    return $params;
}
//get terms function
if ( ! function_exists( 'theone_get_term' ) ) {
    function theone_get_term($category){
        $terms = get_the_terms(get_the_ID(), $category);
        for($term_count=0; $term_count<count($terms); $term_count++) {
            echo $terms[$term_count]->slug;
            if ($term_count<count($terms)-1){
                echo ' ';
            }                                           
        }      
    }
}