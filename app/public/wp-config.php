<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'XhUa+JqndiFnXfyKcERh/HOV6jeE14eD1OeGurvX68YGh/5ysW0S2cD8QIihvftv1wipz7ybagkMt5LoYWQtVQ==');
define('SECURE_AUTH_KEY',  'LrgmADVHzTkvfQjqe3erw4N4wFGeLHt+9V1vaHhSJatdrYxeYhAvs/UCyeIDg492/cNog+TJIsOpUVfHxpW5RA==');
define('LOGGED_IN_KEY',    'UmI4dWo+tW34fwf/9erri5Z9Vys+fkG16NChplWiSmv5V62ZEr2o5EEDdu6B+iN2Y0TZTmm98z6AUfoBwAby0w==');
define('NONCE_KEY',        'dtQLaObu7dAa2HeXyLY6pUJvpFvK6E0eefgtiQu1paP8mK/k26gZueYC5j6Mh0gGHWV3WfaiJxwaACeHm9IUdg==');
define('AUTH_SALT',        'Q4Aa7SYpg0gEwyaUG0DlVwrotNmd0/7x4ztoQOE5gChWMmAxAHi9i6SmtyhAekpVVE24Jk7cTHHIyc6VfQf3uQ==');
define('SECURE_AUTH_SALT', '5oOTtf2/dMAJZGXcEz0LyC4SNlSg00I2/7VbHqWylmnFCGpbqDtS+X+Apb9OXWH4+8xx6p2OMNodnt6osg21UQ==');
define('LOGGED_IN_SALT',   'Vidn6gKg0agE+RK+L/ozQxoODeXPbdq40UeU1/0JnQlmybsW5091pQsKXBbMdy6Rw5bgc7A05ahAyPI18rorlw==');
define('NONCE_SALT',       'wTDFDRdadwePl0D4s2zzeheFJKrg9k4qUPXa+cfTbISnL7akjL+uEb8U6gqKx1F7iZFPxrMX6t6K8YhqjAZ/9A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
