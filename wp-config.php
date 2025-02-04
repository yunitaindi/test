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
define( 'DB_NAME', 'undanganpernikahan' );

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
define( 'AUTH_KEY',         '16OaA37TIg8MoTQ6ES7baFasx5onFeRPztlzLFVwfo9poPAIkmh7Rg2ILWT05wtQ' );
define( 'SECURE_AUTH_KEY',  'kacvcCswDz5LTIJsfrUXpVMKkaf4W8ZwXwPskjOUKuZj6XjxUALJvDcYWiwUURvR' );
define( 'LOGGED_IN_KEY',    '7jqzExDnA4X3wBoBIGL51tNC8O5j3m7aTPE5M3f8dasVhkgcBxAOKtZQHRZroczA' );
define( 'NONCE_KEY',        'j5rCFwCahJlEWyluuCmlFf4ufmPGuqzXDVjUMUn2IPewjpuxqmtyKnpGTt04uD46' );
define( 'AUTH_SALT',        'YIFsUvgn6f30gMkLCDxlP0jNxBicf4GqlMwY3OdSaq0qftOPjLlcf98vUKLdVNXV' );
define( 'SECURE_AUTH_SALT', '40jelURkzjRnAQk9AWV0TrdeZBVfSktjqVnJsWziFFQKCuxGncE3BBNV8DrEgmTU' );
define( 'LOGGED_IN_SALT',   'xnpUXIr1KTMlWLnDqxvMS5LNCoHOpdWDSpSd1gribyivosE7DFn4OMpXw0amxjR5' );
define( 'NONCE_SALT',       'tdhA0AODGFbF5KHSzPPzTWzlA6ouiXK77FeV6K1YJr4f182c23cIM2FXlIz9qoe3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
