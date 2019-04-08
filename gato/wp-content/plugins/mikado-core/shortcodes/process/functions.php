<?php

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Mkd_Process_Holder extends WPBakeryShortCodesContainer {}
}

if(!function_exists('mkd_core_add_process_shortcodes')) {
    function mkd_core_add_process_shortcodes($shortcodes_class_name) {
        $shortcodes = array(
            'MikadoCore\CPT\Shortcodes\ProcessHolder\ProcessHolder',
            'MikadoCore\CPT\Shortcodes\ProcessItem\ProcessItem'
        );

        $shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

        return $shortcodes_class_name;
    }

    add_filter('mkd_core_filter_add_vc_shortcode', 'mkd_core_add_process_shortcodes');
}