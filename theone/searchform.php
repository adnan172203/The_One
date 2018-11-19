
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET" class="search-bar">
        <input  placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'theone' ); ?>" type="text" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'theone' ); ?>"/>
        <i class="fa fa-search"></i>
    </form>
	