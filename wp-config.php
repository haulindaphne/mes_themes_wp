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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'MArGQt?YrDd0l%zBrr87x~DTN,?:kUi7&tB_<B(.kkqVtI+?4YN|FSIT_($SZv73');
define('SECURE_AUTH_KEY',  '-Nyx_j$;BqM%N$^[hwFJMHXgy@v8ISpt7S!i5dWaZXfk]bfm%45D*JOJ(zr`;FTV');
define('LOGGED_IN_KEY',    '`XtvZkZ`xi;i{&N_l9Bx`3ft6sM4^GQOMcYE@n$-]fzmz<s6+H?6_(;u>:mI+B#5');
define('NONCE_KEY',        'B,XDlhU4kM(!46D(s:cWbvHfC5J;6t3S=~W^ |gV.uo/9lw39iX=^gWj0se{[2JU');
define('AUTH_SALT',        's_/H@!3(ACR@@|vKLcB54M8 [O!{2%K]ccRKg{Y$dxZKpCgR@O!eyI!Twy}xZbI+');
define('SECURE_AUTH_SALT', '+V^SXuC(Y$-clhKQm6qV?hF)kz0q5ay8E1?s2}RXvl0-@H0t8)Vm!mjd01EpE<a>');
define('LOGGED_IN_SALT',   '7[=fOO/S#,F?Jslz|*_.b{Y%`R9`9#;ow}xqr{L5c+s@z[^tK:P`ARz`:ueegq`2');
define('NONCE_SALT',       '<JI6yL}g^ajR7;Plh+ON1?eeYd?YO&hA`Y$3/Vx)gw~RPO5^q]8*ixpf{2JRs(@r');

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
define('FS_METHOD', 'direct');