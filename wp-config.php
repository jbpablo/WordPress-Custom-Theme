<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '5BEBpKhuX0KsuWECm100Doe5lwEz41sA4xHsVt831ABmosZ1hsgtG2en35xiepaw' );
define( 'SECURE_AUTH_KEY',  'oz2KACFJx6YsVXvUBPaNPSTGert5cH3aVgJf1vCLN9Yiu6fqLUCLEkMWMkmg5ghe' );
define( 'LOGGED_IN_KEY',    'CWvb49yRx4SyJiHoFo8FdP8XXd1MZOU08r7sBCborKrYFtOPprxexkcM6CFiVGwQ' );
define( 'NONCE_KEY',        'KnTE6qU763bVTZFYNL8gQ7q4wWagUO8ahInDFYmx0J1dW3MHgCgtRQzSurXfF4YF' );
define( 'AUTH_SALT',        'n5Kev5JHuxLPmbnx0DYMOm9QKRP2642N5KU55lCCUqVARQLu8omjMaYEQb0Qp1By' );
define( 'SECURE_AUTH_SALT', '3CVUjmpwWGJkBBjJWVnEWurt9UgmIvA9ghE1QF5OFtlxdpDoT17DBQ5MqmXdPGB4' );
define( 'LOGGED_IN_SALT',   'kc2JkSYOLY1GCnrqjk97i9GRxjkLUv9MuYXLTHcyoewCzNYRqq4ftbTF5ll81FZ3' );
define( 'NONCE_SALT',       '5xf6dJkjvwF52F5fjzbK7wFEAIwGLXg8diq2irwvWTMrcvQQmmtJsn7d2jwiXI1k' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
