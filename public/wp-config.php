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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hcQI7NEk0Lq4Gk8ZLB+wMdlkN7tXEV2E2c6vjvWhfXlY+akmvxYgfsF+6YY97YaVBULQ6ZajhSceuqxqNp9hPw==');
define('SECURE_AUTH_KEY',  'kHNk0EtMO+v9xERTxYfZ38ofDdpcEqD0g47tdtPRl6CSMUZhd64Pdvy3Zq7Pfr2293Lj3avFO07dXzqei6Df1w==');
define('LOGGED_IN_KEY',    'e3eOvL/vaYC0HniswYMhi7Bbgs6bpkWcaMhr6ohUeQlhyuvWaB+A3K74PSYo3TC6dsAfZru8dkwUyfkujorB3g==');
define('NONCE_KEY',        'HT1DCF5AVkSTvUmv/goQbtffRYHmt73iCFCjBLEfgxAayzhmGnNlLsJnxkYmHl8gqO4GQSXz9T8YB5E1dQEJDg==');
define('AUTH_SALT',        'grz6z+wmM6j2GQc1KYhzszmC7K2+37zPX7T2Ga8XDi1z5AqiwNjhFCdD7JZCPG5/UEp3mUFrIYgoP9nzNoAxwQ==');
define('SECURE_AUTH_SALT', 'dHTwc6oFkRFB4VXZRgASNMyuZGTZROd0yik5nxcF2WQZEsW4q3a+V2Ocv6ZzmB4KqjP2+4nuxmk52XxyI/QRvQ==');
define('LOGGED_IN_SALT',   'H1K/2A9eyINCuZH1C6laNMEJKCQJLiKU0ivq38B3Vu3H3HY+kylkubmf/qlJiGpnVh9GJNVWiMnPqhcj++1IiA==');
define('NONCE_SALT',       'y86CCLaxLQCsiEVUmAOUA77PaTJ4d3yQerQLwUBJWEmSnueN4nX7gnIlTAsRSalxkjwNyqeXrzoybkWsZNQftw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
