<?php if (!defined( 'FW' )) die('Access Forbidden');

$options = array(
    'metabox'       =>array(
        'type'      => 'box',
        'title'     => esc_html__( 'Member Details', 'theone'),
        'options'   =>array(
            'theone_member_desi'    =>array(
                'type'  => 'text',
                'label' => esc_html__('Designation:', 'theone'),
            ),
            //Social Profile
        	'theone_member_social_profile'	=> array(
        		'type'	=> 'addable-popup',
        		'label'	=> esc_html__( 'Social Profile', 'theone'),
        	    'add-button-text' => esc_html__('Add New', 'theone'),
   				'sortable' => true,
                'template' => '{{- name }}',
    			'popup-options' => array(
    				'name'	=> array(
    					'type'	=> 'text',
    					'label'	=> esc_html__( 'Social Title:', 'theone'),
    					'desc'	=> esc_html__( 'Exp: Facebook, Twitter etc.', 'theone'),
    				),
                    'icon'  => array(
                        'type'  => 'icon-v2',
                        'label' => esc_html__( 'Social Icon:', 'theone'),
                        'desc'  => esc_html__( 'Use FontAwesome icons only', 'theone'),
                    ),
    				'icon_bg'	=> array(
    					'type'	=> 'color-picker',
                        'value' => '#4267b2',
    					'label'	=> esc_html__( 'Icon Background:', 'theone'),
    				),
    				'url'	=> array(
    					'type'	=> 'text',
    					'label'	=> esc_html__( 'Social Link:', 'theone'),
    					'desc'	=> esc_html__( 'Exp: www.facebook.com/user', 'theone'),
    				),
    			),
        	),
            //Skills 
            'theone_member_skills_picker' =>array(
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'picker'=> array(
                    //Header Style switch
                    'theone_member_skills_switch'   => array(
                        'type'  => 'switch',
                        'label' => esc_html__('Skills:', 'theone'),
                        'left-choice' => array(
                            'value' => 'off',
                            'label' => esc_html__('OFF', 'theone'),
                        ), 
                        'right-choice' => array(
                            'value' => 'on',
                            'label' => esc_html__('ON', 'theone'),
                        ), 
                    ),
                ),
                'choices'   =>array(
                    'on'    =>array(
                        'title' => array(
                            'type'  => 'text',
                            'value'  => esc_html__('Personal Skill', 'theone'),
                            'label' => esc_html__('Section Title:', 'theone'),
                        ),
                        'skills'    => array(
                            'type'  => 'addable-popup',
                            'label' => esc_html__( 'Skills', 'theone'),
                            'add-button-text' => esc_html__('Add New', 'theone'),
                            'sortable' => true,
                            'template' => '{{- name }}',
                            'popup-options' => array(
                                'name'  => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'Skill Title:', 'theone'),
                                    'desc'  => esc_html__( 'Exp: Article Writing', 'theone'),
                                ),
                                'value'  => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'Skill Percentage', 'theone'),
                                    'desc'  => esc_html__( 'Number only', 'theone'),
                                ),
                            ),
                        ),
                    ),
                ),
            ), 
            //Award
            'theone_member_award_picker' =>array(
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'picker'=> array(
                    //Header Style switch
                    'theone_member_award_switch'   => array(
                        'type'  => 'switch',
                        'label' => esc_html__('Award:', 'theone'),
                        'left-choice' => array(
                            'value' => 'off',
                            'label' => esc_html__('OFF', 'theone'),
                        ), 
                        'right-choice' => array(
                            'value' => 'on',
                            'label' => esc_html__('ON', 'theone'),
                        ), 
                    ),
                ),
                'choices'   =>array(
                    'on'    =>array(
                        'title' => array(
                            'type'  => 'text',
                            'value'  => esc_html__('Recognitions Award', 'theone'),
                            'label' => esc_html__('Section Title:', 'theone'),
                        ),
                        'award'    => array(
                            'type'  => 'addable-popup',
                            'label' => esc_html__( 'Awards', 'theone'),
                            'add-button-text' => esc_html__('Add New', 'theone'),
                            'sortable' => true,
                            'template' => '{{- name }}',
                            'popup-options' => array(
                                'name'  => array(
                                    'type'  => 'text',
                                    'label' => esc_html__( 'Award Title:', 'theone'),
                                    'desc'  => esc_html__( 'Exp: Award 2017', 'theone'),
                                ),
                                'icon'  => array(
                                    'type'  => 'upload',
                                    'label' => esc_html__( 'Trophy Image', 'theone'),
                                ),
                            ),
                        ),
                    ),
                ),
            ), 
   		),
    ),
);