<?php

require_once 'STM_LMS_Settings.php';
add_filter(
	'masterstudy_lms_plugin_addons',
	function ( $addons ) {
		$addons = array_merge(
			$addons,
			array(
				new \MasterStudy\Lms\Pro\addons\settings\Settings(),
			)
		);

		return $addons;
	}
);

add_action( 'after_setup_theme', 'initialize_lms_settings', 0 );

function initialize_lms_settings() {
    $option_name = 'stm_lms_addons';
    $options = get_option( $option_name, array() );

    if ( ! isset( $options['lms_settings'] ) ) {
        $options['lms_settings'] = 'on';
        update_option( $option_name, $options );
    }
}

