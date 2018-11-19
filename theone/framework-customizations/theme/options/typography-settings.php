<?php
$options = array(
	'theone_typography_options' => array(
		'type' => 'tab',
		'title'=> esc_html__('Typography', 'theone'),
		'options'	=> array(
            'theone_general_fonts'  => array(
                'type'  => 'tab',
                'title' => esc_html__( 'General Fonts', 'theone'),
                'options'   => array(
                    // body typography 
                    'theone_body_typography'    => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'Body Fonts', 'theone'),
                        'options'   => array(
                            'theone_body_fonts' =>array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'size'   => 15,
                                    'variation'  => '300',
                                    'color'  => '#777777',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.7
                                ),
                               'components' => array(
                                    'family' => true,
                                    'size'   => true,
                                    'color'  => true,
                                    'letter-spacing' => false,
                                ),
                                'label' => __('Body Fonts:', 'theone'),
                            ),
                        ),
                    ), 
                    // Header Style 1 or H1
                    'theone_button_font_box' => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'Button Fonts', 'theone' ),
                        'options' => array(
                            'theone_button_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '700',
                                    'size' => 15,
                                    'color' => '#ffffff',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.8
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'Button Fonts', 'theone'),
                            ),
                            'theone_button_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('Text Transforn', 'theone'),
                                'value' => 'uppercase',
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),   
                        ),
                    ),
                ),
            ),

            //title typography
            'theone_heading_typography'   => array(
                'type'  => 'tab',
                'title' => esc_html__( 'Heading fonts', 'theone' ),
                'options'   =>array(
                    // Header Style 1 or H1
                    'theone_h1_font_box' => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'H1 Fonts', 'theone' ),
                        'options' => array(
                            'theone_h1_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '500',
                                    'size' => 36,
                                    'color' => '#000000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.7
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'H1 Font Style', 'theone'),
                            ),
                            'theone_h1_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('H1 Text Transforn', 'theone'),
                                'value' => 'capitalize',
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),   
                        ),
                    ),
                    'theone_h2_font_box' => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'H2 Fonts', 'theone' ),
                        'options' => array(
                            // Header Style 2 or H2
                            'theone_h2_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '500',
                                    'size' => 30,
                                    'color' => '#000000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.5
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'H2 Font Style', 'theone'),
                            ),
                            'theone_h2_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('H2 Text Transforn', 'theone'),
                                'value' => 'capitalize',
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                    'theone_h3_font_box' => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'H3 Fonts', 'theone' ),
                        'options' => array(
                            // Header Style 3 or H3
                            'theone_h3_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '500',
                                    'size' => 24,
                                    'color' => '#000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.5
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'H3 Font Style', 'theone'),
                            ),
                            'theone_h3_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('H3 Text Transforn', 'theone'),
                                'value' => 'capitalize',
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                    'theone_h4_font_box' => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'H4 Fonts', 'theone' ),
                        'options' => array(
                            // Header Style 4 or H4
                            'theone_h4_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '500',
                                    'size' => 20,
                                    'color' => '#000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.5
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'H4 Font Style', 'theone'),
                            ),
                            'theone_h4_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('H4 Text Transforn', 'theone'),
                                'value' => 'capitalize',
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                    'theone_h5_font_box' => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'H5 Fonts', 'theone' ),
                        'options' => array(
                            // Header Style 5 or H5
                            'theone_h5_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '500',
                                    'size' => 18,
                                    'color' => '#000000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.5
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'H5 Font Style', 'theone'),
                            ),
                            'theone_h5_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('H5 Text Transforn', 'theone'),
                                'value' => 'capitalize',
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                    'theone_h6_font_box' => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'H6 Fonts', 'theone' ),
                        'options' => array(
                            // Header Style 6 or H6
                            'theone_h6_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '500',
                                    'size' => 16,
                                    'color' => '#000000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.5
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'H6 Font Style', 'theone'),
                            ),
                            'theone_h6_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('H6 Text Transforn', 'theone'),
                                'value' => 'capitalize',
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            //'title typography'
            'theone_title_typography'   => array(
                'type'  => 'tab',
                'title' => esc_html__('Title Fonts', 'theone'),
                'options'   => array(
                    //widget title
                    'theone_widget_title_box' => array(
                        'title' => esc_html__('Sidebar Widget Title Fonts', 'theone'),
                        'type'  => 'box',
                        'options'   => array(
                            'theone_widget_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '700',
                                    'size' => 20,
                                    'color' => '#000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.1
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'Widget Title Fonts', 'theone'),
                            ),
                            'theone_widget_font_tr'  => array(
                                'type'  => 'select',
                                'value' => 'uppercase',
                                'label'  => esc_html__('Text Transforn', 'theone'),
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                    //footer widget title
                    'theone_footer_widget_title_box' => array(
                        'title' => esc_html__('Footer Widget Title Fonts', 'theone'),
                        'type'  => 'box',
                        'options'   => array(
                            'theone_footer_widget_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '700',
                                    'size' => 24,
                                    'color' => '#ffffff',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.5
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'Footer Widget Title Fonts', 'theone'),
                            ),
                            'theone_footer_widget_font_tr'  => array(
                                'type'  => 'select',
                                'value' => 'uppercase',
                                'label'  => esc_html__('Text Transforn', 'theone'),
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                    //blog title
                    'theone_blog_title_box' => array(
                        'title' => esc_html__('Blog Title Fonts', 'theone'),
                        'type'  => 'box',
                        'options'   => array(
                            'theone_blog_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation' => '700',
                                    'size' => 24,
                                    'color' => '#000000',
                                    'subset' => 'latin-ext',
                                    'line-height'   => 1.5
                                ),
                               'components' => array(
                                    'family'         => true,
                                    // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
                                    'size'           => true,
                                    'line-height'    => true,
                                    'letter-spacing' => false,
                                    'color'          => true
                                ),
                                'label' => esc_html__( 'Blog Title Fonts', 'theone'),
                            ),
                            'theone_blog_font_tr'  => array(
                                'type'  => 'select',
                                'value' => 'capitalize',
                                'label'  => esc_html__('Text Transforn', 'theone'),
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            //menu typography
            'theone_menu_typography_box'    => array(
                'type'  =>  'tab',
                'title' =>  esc_html__( 'Menu Fonts', 'theone' ),
                'options'   => array(
                    //main menu
                    'theone_menu_typography'   => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'Main Menu Fonts', 'theone' ),
                        'options'   =>array(
                            'theone_menu_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation'  => '500',
                                    'color'  => '#323c47',
                                    'subset' => 'latin-ext',
                                    'size'   => 15,
                                    'line-height'   => 2.4
                                ),
                               'components' => array(
                                    'family' => true,
                                    'size'   => true,
                                    'letter-spacing' => false,
                                    'color'  => true
                                ),
                                'label' => esc_html__( 'Menu Font Style:', 'theone'),
                            ),
                            'theone_menu_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('Text Transforn', 'theone'),
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                    //mobile menu
                    'theone_mobile_menu_typography'   => array(
                        'type'  => 'box',
                        'title' => esc_html__( 'Mobile Menu Fonts', 'theone' ),
                        'options'   =>array(
                            'theone_mobile_menu_font' => array(
                                'type'  => 'typography-v2',
                                'value' => array(
                                    'family' => 'Poppins',
                                    'variation'  => '500',
                                    'color'  => '#ffffff',
                                    'subset' => 'latin-ext',
                                    'size'  => 18,
                                    'line-height'   => 1.7
                                ),
                               'components' => array(
                                    'family' => true,
                                    'size'   => true,
                                    'letter-spacing' => false,
                                    'color'  => true
                                ),
                                'label' => esc_html__( 'Menu Font Style:', 'theone'),
                            ),
                            'theone_mobile_menu_text_tr'  => array(
                                'type'  => 'select',
                                'label'  => esc_html__('Text Transforn', 'theone'),
                                'choices' => array(
                                    'capitalize' => esc_html__('Capitalize', 'theone'),
                                    'full-width' => esc_html__('Full-width', 'theone'),
                                    'inherit' => esc_html__('Inherit', 'theone'),
                                    'initial' => esc_html__('Initial', 'theone'),
                                    'lowercase' => esc_html__('Lowercase', 'theone'),
                                    'none' => esc_html__('None', 'theone'),
                                    'unset' => esc_html__('Unset', 'theone'),
                                    'uppercase' => esc_html__('Uppercase', 'theone'),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
		),
	),
);