<?php
/**
 * Custom configuration of WordPress for production environment.
 *
 * @package WordPress
 */

// ** Public webserver directory ** //
// $webroot_dir = '/public_html';

// ** Environment ** //
define('WP_ENV', 'production');

// ** MySQL settings ** //
define('DB_NAME',     'database_name');
define('DB_USER',     'database_username');
define('DB_PASSWORD', 'database_password');
define('DB_HOST',     'localhost');

// ** Generate at: https://api.wordpress.org/secret-key/1.1/salt/ ** //
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// ** WordPress debugging mode ** //
define('WP_DEBUG',         false);
define('WP_DEBUG_LOG',     true);
define('WP_DEBUG_DISPLAY', false);
define('SAVEQUERIES',      false); // Displays queries in the footer

// ** Disable plugin and theme Editor ** //
define('DISALLOW_FILE_EDIT', true);
