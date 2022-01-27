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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crmtutplus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'bbutqgKCCKWNZhSmRWAAjOpG3ZXo1XCjY5KL4rKBXC5piGo4mGJtmJb7yWzmf3ie' );
define( 'SECURE_AUTH_KEY',  'FdR01gpnXkAwJb2Y1tlSxBBGjiOQvUEOyoacZxU9aLR3JJm9CrsGRvFMx71VEsNY' );
define( 'LOGGED_IN_KEY',    'tO4mdFlHb8YJjuhvHsuoG3sH5Jg0uBG6txkMDU19kpHFqJUGamyUdEG1mbqTEGaw' );
define( 'NONCE_KEY',        '6rd92beL6Y1mgt8hH1jHXeLAQm3YL5H1ULfgTDXpsVqSC0dx7bLh6Cz8JG89wAei' );
define( 'AUTH_SALT',        '0G0TpLVMJ2xk1xeNZfSbgFktWTKTmo459M2YGwBnDqr6DgM40T4jKF7cweuq2BIS' );
define( 'SECURE_AUTH_SALT', 'ExREnoqK8fADwEC4BbbPDk8knknWkxLi9BFU2yX2QWLhu6CfluqZ0NgeKPxM8KBf' );
define( 'LOGGED_IN_SALT',   'Rc2cTYr5pVP8DBCZx6nsVaIpO0afLDvGrDiIHjJcbJckRdLU0XPjNvCofL3NhVlx' );
define( 'NONCE_SALT',       'QHA1S9v8r12Dj2otAcNZeNGF88q6yMEBuR4szFG9KlZeipSfq3VVBuf6zcG0xruL' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
