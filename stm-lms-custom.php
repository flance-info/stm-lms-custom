<?php
/*
Plugin Name: STM LMS Custom for Coruse builder
Plugin URI: https://stylemixthemes.com/
Description: Configurations plugin for the Masterstudy theme
Author: StylemixThemes
Author URI: https://stylemixthemes.com/
Text Domain: stm-lms-custom
Version: 1
*/

define( 'STM_LMS_CUSTOM', 'stm_LMS_CUSTOM' );
define( 'STM_LMS_CUSTOM_PATH', dirname( __FILE__ ) );
define( 'STM_LMS_CUSTOM_URL', plugin_dir_url( __FILE__ ) );
$stm_plugin_path = dirname( __FILE__ );

include_once 'inc/STM_LMS_addons.php';
