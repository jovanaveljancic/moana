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
define('DB_NAME', 'moana');

/** MySQL database username */
define('DB_USER', 'velja');

/** MySQL database password */
define('DB_PASSWORD', '123123ff');

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
define('AUTH_KEY',         'N|FI} g&1ex;]L_=}G}pc#^AT0*4.19ixRJKfhKHX.`53|-j4m``.wL=#BXF[?Hm');
define('SECURE_AUTH_KEY',  '0XR1~Y@q!&0BeOCb~&DUq!ZW;92L>kq)cxF5xn{0$bCV0<o4`sk.nx_TX:1xo,~l');
define('LOGGED_IN_KEY',    '5A=nu9ChJVF}^9 B/%x,btW*?gFa2h8]8`p[Wst#Mf TMhW,DfBkfPBzRH?u/ZVS');
define('NONCE_KEY',        '%40p1H]e{0n.2|_f iq2qUxUPv`?i`EMexM84X&f2<*h8}m`foAgMW%aS%+wDWLH');
define('AUTH_SALT',        'Hmo/8z9HyR:8+:GOT=;0/YEYfQ:N=A#bZ&1?9uljM$<=7w0+<:YmxRE{9<M}6){Z');
define('SECURE_AUTH_SALT', 'xH@*eOB8R>HAC.c;O:Wa9:f`/]U o>hv6cXNpR~`U|ez:SSndnY?fm;W87mDWnm+');
define('LOGGED_IN_SALT',   'RbxSX#2|SKt3Z7:}1~8T,|s2la%5%08gDo$gZn&Z2fx%(|cV% h.`f&OI5sL150m');
define('NONCE_SALT',       'qY4Raj5PiKT55faH>uE?=1&M$.4^9PeB{TRAbOMdFDr1iDvVh=N{4#g~Q`8&hHC3');

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
