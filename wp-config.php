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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sample' );

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
define( 'AUTH_KEY',         'X7IFyl2KmyY7YesmR7NyqBn2M0HIEvuVLcg1FFqvYDZJkbvBzYCy0ZoBqKvTyBzA' );
define( 'SECURE_AUTH_KEY',  'q3eQCVI3h8tHq9E4bB0agtUfmIA89uO2UsFoiDej2VrN7io2OnPliyOBIehT3Kl8' );
define( 'LOGGED_IN_KEY',    'FBrh8hw786E4PuKpVeVnogu5rX3WWy7PYN7FvYvpZgAACA7KuDLCTXmMqRT5JH30' );
define( 'NONCE_KEY',        'gANiEGtYTWZuQtahEJDbBzhNbtRbGz49LptBOxV6TtiXNzh6pUIof90SdQ8rIc1C' );
define( 'AUTH_SALT',        'FKMPoywmibzKsVXMeosoMLYwL3emfakmFDqWlwZVMbnk5ckALf8QdK7ujO1hTDhG' );
define( 'SECURE_AUTH_SALT', 'qSRdUcGhkjRajZyMdVW4IrIvkeYufbBiwGOsCLndHaHxk1UwnMjZ9JkmkXkBjKbi' );
define( 'LOGGED_IN_SALT',   'kjiS3qd3A5IYfW5hZ6CbeCOVzYPW52y83F24tMxYCA84gSYWJH72G0jElP96sKCp' );
define( 'NONCE_SALT',       'KRxJVE6nJYgThCznraICfEVTE3YeBjRhzUGq4LYNA5ngiLWo24V0KKZXw4t1i3Dd' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
