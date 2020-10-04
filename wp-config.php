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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dalmiaadvisory_project');

/** MySQL database username */
define('DB_USER', 'dalmiaadvisory_techplug');

/** MySQL database password */
define('DB_PASSWORD', '65UB;O*vu92n');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'crn3h8a4t7hbe368ym4m6druqxv0jzotwm9jxlrjlrhnoholaf0jtuowb7npnzyg');
define('SECURE_AUTH_KEY',  'vyweoo3m3axskwhvsqfk3zw7uwwcekoam6kqf8r831glecphmsdlrtl7cqlvzcig');
define('LOGGED_IN_KEY',    'jwq4eziyand1hhjw3c2nguon19ehziyqgj9vm2h7wfmrdhzaagfwd6rvmmjsberc');
define('NONCE_KEY',        'gubkk9dmej0m1q4u4drpd2hc8uvpx4v9grsdo9s1gfawz1zfxqngq2foghscufcu');
define('AUTH_SALT',        'htformkci0l4pg0vi5caqgeukn8zncpfmhv0afspycnxwg3pxcnal4ge9czix94d');
define('SECURE_AUTH_SALT', 'fnloqlzf0nweakh88itkke1tbj2ybhv00dvostf281hrvv4pihruglthepd3tj3m');
define('LOGGED_IN_SALT',   'rts3editj45kvgjexjwdogg9qj5nu443hqf0tvvykjefoixkpwoy1ux44q2bqeje');
define('NONCE_SALT',       'lenpigufum76wuxblua68wiezm1pfk5xa9k6fe4nwjhrguadvt0kprjv4danllsk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
