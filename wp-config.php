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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'esoteric');

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
define('AUTH_KEY',         '0}c1O4PXQSxT/R}dd *0uD{O,i}[1$VITLnhkQ,u89f4LF):hxiSJi1!VB=_iS?0');
define('SECURE_AUTH_KEY',  'w9R`1oZPn(ERPadj>_b9(.j|vpKX#a6a*VZwQN>9~1|2Fzcui?O@Sw~e6Zd3>kyt');
define('LOGGED_IN_KEY',    'iTX`?AYNmY39jtXt#O77[S+:]bJm (G9@(w..Qc1~J{_gDk1`Z>`h1p+7h*/BvFN');
define('NONCE_KEY',        '%R6eb+G&%+oZ29-F.F0A|AOR},GmnmY[Ny03l>/^M_&S5]k)^>q^cj>B37Pv6tv}');
define('AUTH_SALT',        '-L5vHrC0{M@zGr`wyy7ga]9SD/.u1xA])<(S!fkXT`u4n< z,f),p%X9l{opw85j');
define('SECURE_AUTH_SALT', 'j%KB]Wd@DQ) _wm`PtlQ!X3:l1Om<6<q{4,<6qDXf.w U=kTgoFb/GleIgqN5kx!');
define('LOGGED_IN_SALT',   'O&>3^BdZ4h%XfhO@{vp4@@msJ[1,AGr (#lm_i)M?l3[M$FPWHxg6Vto8P:~W2B*');
define('NONCE_SALT',       'U:DNot0;o#>y)$.{{S<:y(pA,J]+jHzTcKvhGVw/;eg92gCK`pJE8n=HFP[ M/F,');

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
