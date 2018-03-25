<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('APP_ROOT', dirname(__DIR__));

/*** Require environment specific configuration ***/
if(file_exists(APP_ROOT . '/wp-beirut-config/env/wp-beirut-dev.php')) {
    require APP_ROOT . '/wp-beirut-config/env/wp-beirut-dev.php';
}
else if(file_exists(APP_ROOT . '/wp-beirut-config/env/wp-beirut-stg.php')) {
    require APP_ROOT . '/wp-beirut-config/env/wp-beirut-stg.php';
}
else if(file_exists(APP_ROOT . '/wp-beirut-config/env/wp-beirut-prd.php')) {
    require APP_ROOT . '/wp-beirut-config/env/wp-beirut-prd.php';
}
else {
   require APP_ROOT . '/wp-beirut-config/env/wp-beirut-sample.php'; 
}

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
