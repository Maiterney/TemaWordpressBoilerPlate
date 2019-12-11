<?php
//ACF MAPS API
if ( ! function_exists( 'my_acf_google_map_api' ) ) :
    
    function my_acf_google_map_api( $api ){
        $api['key'] = 'AIzaSyAREOlW6wxQA2d1sgcGLfvCeEnEjVZCyA0';
        return $api;
    }
    
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
    function my_acf_init() {
        acf_update_setting('google_api_key', 'AIzaSyAREOlW6wxQA2d1sgcGLfvCeEnEjVZCyA0');
    }
    add_action('acf/init', 'my_acf_init');

endif;