<?php

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css');
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);


?>