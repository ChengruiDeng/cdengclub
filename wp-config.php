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
define('DB_NAME', 'cdengclu_main');

/** MySQL database username */
define('DB_USER', 'cdengclu_admin');

/** MySQL database password */
define('DB_PASSWORD', 'HV[D+UvTw#54');

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
define('AUTH_KEY',         'Z[aGchB@3mFa.>3!KOSGv?%iY-7ogk {{8XGU4yT>5e-]j/_NMEE vqXe/+^+mb1');
define('SECURE_AUTH_KEY',  'cN[sT{IyC80Z6]qm0| }^q|i)6;[nNJ^</)ihM9h}`,[tsDiXvmi~RV6Iuf5H&H0');
define('LOGGED_IN_KEY',    ' lY(hL{YX22ld.U~SB:@(+m?PJ?Z*aZ`1v^0*)=Xfz~g?fct>:?#>i@6Bfj-EBcD');
define('NONCE_KEY',        'lQRZ)@Fk>4v09+,D_h:9; =^ua;EQCsoyg@%k,A=f|k=a&B+dwFR($kl3cH(%,YK');
define('AUTH_SALT',        ':;>6hJ:45tH}6KWxr{wh>^6F:=4Lc`yN$dxuLUQ{pzTUHd,$x-V1d$@NEAJ@,iUk');
define('SECURE_AUTH_SALT', '.5tOqS6K4>|SlBr_ Ou KdykQ7 ++>xBA8@ Y{{gEOmWy)5 >AG<nPXl;aM]p?&s');
define('LOGGED_IN_SALT',   'x7-V3r}Yq(GVUq9f$X:)XX-OT#^u4]< ~rbOH^W$#_4nmvF+wnFs<?Z&GYE6$<?_');
define('NONCE_SALT',       '_FqdQq-jA6vGg?5Fjhd+P~#ye D4W@WVMInki#c9da67zW*>:c(hamgGZ$jgPNT+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wy_622_dcr_';

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
