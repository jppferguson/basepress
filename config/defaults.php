<?php
/**
 * Custom configuration for WordPress.
 *
 * @package WordPress
 */

/**
 * Public webserver directory
 */
global $root_dir, $webroot_dir;
if( empty($root_dir) )    $root_dir    = dirname(__DIR__);
if( empty($webroot_dir) ) $webroot_dir = '/public';
$webroot_dir = $root_dir . $webroot_dir;

// ** Environment ** //
if( !defined('WP_ENV') ) define('WP_ENV', 'default');
$envs = array(
  'development' => 'http://example.dev',
  'staging'     => 'http://staging.example.com',
  'production'  => 'http://example.com'
);
define('ENVIRONMENTS', serialize($envs));

/** Database settings. Set to something so WP doesn't try to run install */
if( !defined('DB_USER') )     define('DB_USER',     'not_set');
if( !defined('DB_USER') )     define('DB_USER',     'not_set');
if( !defined('DB_PASSWORD') ) define('DB_PASSWORD', 'not_set');
if( !defined('DB_HOST') )     define('DB_HOST',     'localhost');

/** Database Charset to use in creating database tables. */
if( !defined('DB_CHARSET') ) define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
if( !defined('DB_COLLATE') ) define('DB_COLLATE', '');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
if( empty($table_prefix) ) $table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if( !defined('WPLANG') )define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if( !defined('WP_DEBUG') )         define('WP_DEBUG',         false);
if( !defined('WP_DEBUG_LOG') )     define('WP_DEBUG_LOG',     true);
if( !defined('WP_DEBUG_DISPLAY') ) define('WP_DEBUG_DISPLAY', false);
if( !defined('SAVEQUERIES') )      define('SAVEQUERIES',      false); // Displays queries in the footer


/**
 * WordPress Allowed Memory Limit.
 *
 * By default, WordPress will attempt to increase memory allocated to PHP to 32MB
 * so if you're getting errors increase to something higher than 32MB
 */
if( !defined('WP_MEMORY_LIMIT') ) define('WP_MEMORY_LIMIT', '32M');

/**
 * Wordpress Base URL Structure.
 */
if( !defined('WP_SITEURL') ) define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp');
if( !defined('WP_HOME') )    define('WP_HOME',    'http://' . $_SERVER['HTTP_HOST'] . '');


/**
 * Custom Content Directory
 */
if( !defined('CONTENT_DIR') )    define('CONTENT_DIR',   '/app');
if( !defined('WP_CONTENT_DIR') ) define('WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR);
if( !defined('WP_CONTENT_URL') ) define('WP_CONTENT_URL',   CONTENT_DIR);

/**
 * Must Use plugins
 */
if( !defined('WPMU_PLUGIN_DIR') ) define('WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins');


/**
 * Disable the Plugin and Theme Editor.
 *
 * Disabling these provides an additional layer of security if a hacker gains
 * access to a well-privileged user account
 */
if( !defined('DISALLOW_FILE_EDIT') ) define('DISALLOW_FILE_EDIT', true);

