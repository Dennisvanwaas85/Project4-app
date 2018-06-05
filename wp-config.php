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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '6x<)~E{1q.%(yavA-!>4Z/&9qORQ39r}z?z[lkoPFX)pBRfw5~q!;#KY[+kq0}wA');
define('SECURE_AUTH_KEY',  '{S9`>b~2:Qm_sx)qRJXflrR+6:[xfy3}+eP:e7VS-1lS~yB>eZG^kA}v:[|%7F_N');
define('LOGGED_IN_KEY',    '@ThMV+k2w`__wp)O-FNvy# ev?~^ng9;p}hRiR5C&kA_3zHLO6@^=yB.Fh;k|%|b');
define('NONCE_KEY',        'E4(*^G;hHwtN^R =ynfzo Broj}~ +rV=]M T?Og_hxJzo?(d&@^Wn3?kV]x%#SR');
define('AUTH_SALT',        'bL=ZRj?L3}w]/dpd3V7(kk%gho!.^}A|sGlC$7L`?Lb.Fy&1_EA[ed6zspHB4|.h');
define('SECURE_AUTH_SALT', 'in>@4vm)i0]8|5n&-;ZAGE]5WtZ*_!.M/)H~*jXsm F1S<WIV!mLRK1rZ|QCb#Tl');
define('LOGGED_IN_SALT',   '2$TsN!;sCl}|3GwnsadSPKq:79gHsBwuBPzhV1mVkr?JB[)I++`->T}9pa_]4Q Q');
define('NONCE_SALT',       '0`~PLWr^2?PlSty~1-pNcojkH^{G_j)Ms.&{!G0QmR;jp>4gYSI5))|rTd(!U4 g');

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
