<?php
/**
 * Do not edit this file. Edit the config files found in the ../config/ dir instead.
 * This file is required in the root directory so WordPress can find it.
 * WP is hardcoded to look in its own directory or one directory up for wp-config.php.
 */

$host_config_dir  = dirname(__FILE__) . '/../config/';
$host_config_file = $host_config_dir . preg_replace("/[^a-z0-9]+/", "-", strtolower($_SERVER['HTTP_HOST'])) . ".php";
$defaults_file    = $host_config_dir . "defaults.php";

/** Include the host-specific config file if it exists. */
if (file_exists($host_config_file))
  require_once($host_config_file);

/** Include the default fallbacks file. */
if (file_exists($defaults_file))
  require_once($defaults_file);


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Fix for connection errors on localhost because of sluggish internet. */
if( WP_ENV == 'development' ) {
  add_filter( 'http_request_args', function( $r ) {
    $r['timeout'] = max( $r['timeout'], 10 );
    return $r;
 } );
}
