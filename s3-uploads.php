<?php

/*
Plugin Name: S3 Uploads
Description: Store uploads in S3
Author: Human Made Limited
Version: 3.0.6
Author URI: https://hmn.md
*/

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', 'S3_Uploads\\init', 0 );

if ( ! class_exists( '\\Aws\\S3\\S3Client' ) ) {
	// Require AWS Autoloader file.
   require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}
