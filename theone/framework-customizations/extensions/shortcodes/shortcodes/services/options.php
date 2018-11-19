<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
	'theone_service_post_count'	=>array(
		'type'	=> 'text',
		'label'	=> esc_html__( 'Number Of Post To Show:', 'theone'),
		'desc'	=> esc_html__( 'Number Only', 'theone'),
	),

    //Select post from
    'theone_service_multi_picker'   => array(
        'type'      => 'multi-picker',
        'label'     => false,
        'desc'      => false,
        'picker'    => array(
            'post_from' => array(
                'label'   => esc_html__('Post From', 'theone'),
                'type'    => 'select', // or 'short-select'
                'choices' => array(
                    'all'  => esc_html__('All', 'theone'),
                    'category' => esc_html__('Category', 'theone'),
                    'tags' => esc_html__('Tags', 'theone'),
                ),
            ),
        ),
        //all picker
        'choices'   => array(
            'category'   => array(
                'cats'    => array(
                    'type'  => 'multi-select',
                    'label' => esc_html__( 'Select Category:', 'theone'),
                    'choices'=> theone_get_service_categories_select(),
                ),
            ),
            'tags'   => array(
                'tag'    => array(
                    'type'  => 'multi-select',
                    'label' => esc_html__( 'Select Tag:', 'theone'),
                    'choices'=> theone_get_service_tags_select(),
                ),
            ),
        ),
    ),

    'theone_service_order'    => array(
        'type'  => 'select',
        'label' => esc_html__( 'Order:', 'theone'),
        'value' => 'DESC',
        'choices'=> array(
            'ASC' => esc_html__( 'Ascending', 'theone'),
            'DESC' => esc_html__( 'Descending', 'theone'),
        ),
    ),
    'theone_service_orderby'    => array(
        'type'  => 'select',
        'label' => esc_html__( 'Order By:', 'theone'),
        'value' => 'none',
        'choices'=> array(
            'none' => esc_html__( 'None', 'theone'),
            'type' => esc_html__( 'Type', 'theone'),
            'title' => esc_html__( 'Title', 'theone'),
            'name' => esc_html__( 'Name', 'theone'),
            'date' => esc_html__( 'Date', 'theone'),
        ),
    ),
    'theone_service_thumbnail' => array(
        'type'  => 'switch',
        'value' => 'center',
        'label' => esc_html__('Show Thumbnail Image', 'theone'),
        'left-choice' => array(
            'value' => 'no',
            'label' => esc_html__('No', 'theone'),
        ),
        'right-choice' => array(
            'value' => 'yes',
            'label' => esc_html__('Yes', 'theone'),
        ),
    ),
);