<?php if (!defined( 'FW' )) die('Access Forbidden');
$options = array(
    fw()->theme->get_options('general-settings'),
    fw()->theme->get_options('header-settings'),  
    fw()->theme->get_options('home-settings'), 
    fw()->theme->get_options('typography-settings'),
    fw()->theme->get_options('footer-settings'),    
); 
