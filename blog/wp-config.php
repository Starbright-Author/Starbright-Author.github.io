<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'prince');

/** MySQL database username */
define('DB_USER', 'cooldee');

/** MySQL database password */
define('DB_PASSWORD', 'Wanker77');

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
define('AUTH_KEY',         'dIy$u|BYNjPdRCJ2*,D*Tt[[:7*xZL%OjY]Jq-5V&.`e-.hPswgUWl(}IRF,p[iL');
define('SECURE_AUTH_KEY',  '+ 6J>+au|],M+}ci{rmF2O&-P;-W)]Lw9e<jO<Wu^_d<rt{7hpi$Oig`^~0+I)@&');
define('LOGGED_IN_KEY',    'QLC-kgg+YA|d+ygLSE.|nSbYMI8c2^hs@&60tEv^JM9%mf@q/ed:rLCZ:72nAdHx');
define('NONCE_KEY',        'Lx%(87r|AcxDTggV-v}`lF,N+[CVV~*elv$laKYunA )Np?FpG(Lv<D+ZP~oqE@<');
define('AUTH_SALT',        '|7kTPY`<I+S*y+#9Zirp-DlgZ5<+)]IpZdE:[76*u|hmG;|SSNm0~fR@E?z1i~>]');
define('SECURE_AUTH_SALT', 'Q<`&2QfpvY=G7MtrnTDr& Rlre3Wu@z]3-@ MZO~/w=!8@+-<(J[M~gmTG}W)d?:');
define('LOGGED_IN_SALT',   ':KOvQ7~$3orI2/T@0K`htueli3O|ZJGs2Pal%~2=Z|^9<btB:uEiv;`uKL>?bA]e');
define('NONCE_SALT',       '/*Ku*N MH>zD+1]PY6Jl=Z?8`NIvZ+(eA]))LXv^Vw.O+/I>|+@IYZPb6Zn^ Vx$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** pasted by Brett from internet, solves file ownership issues. */
define('FS_METHOD', 'direct');


