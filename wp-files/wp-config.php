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
define('DB_NAME', 'zoihospi_z0ih0spit4ls');

/** MySQL database username */
define('DB_USER', 'zoihospi_haspenn');

/** MySQL database password */
define('DB_PASSWORD', 'fc?!.*8;%(Mu');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f)Bh#d4[IIlm@>[cr0:C|H#hyL[ XW N3Idt:?0~MA]6),z+[6^xh#+k8-R<+r<c');
define('SECURE_AUTH_KEY',  '|P65yNPT/M3r8X5ntE@~+|0fq^2g5c&Oy,,RrTp]R#i+DC?,.<|RHz:f,3BTnb-%');
define('LOGGED_IN_KEY',    '3k<;2=fvB7qO/nFEm@#khhxcSk*w2uSI:s3m1aA$<ScgP=61C|)f0h|IRw*N-sw4');
define('NONCE_KEY',        ',9&3Oo$Dur~Ceb?WXUf4LMHT<7|g1vodX#+Y&Egift>w-1b*[|#`JA{N)b|K2kT`');
define('AUTH_SALT',        'X|tw5+O#~8?VW-=s8Lu~YYnx!U;dsaLzRp#V{[|L(B7]B&%?+66Ub+86u+M-@-j@');
define('SECURE_AUTH_SALT', 'o .PYZd~t0_/ ?]B`,`Ek1vWu{%xM/;euX`nY)c*vO)kCmT0j41={~PVRztvKw-T');
define('LOGGED_IN_SALT',   'DR?|Qt?DRQ+1#JSDrCBC|sk[rP~_`L(6qT#P!dd;=J-SN%Iy!e0w0L,(&E01{7_!');
define('NONCE_SALT',       '7OtJ#1%|;G/@sUOJ8Rk<//Sh{)Dd+~B6ZS^H)0NI> /P&!2)WHl|wscZr!gSB{%K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'z01_';

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
