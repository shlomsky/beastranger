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
define('DB_NAME', 'beastranger');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Machka84');

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
define('AUTH_KEY',         'n>F/XdG$cn*]w3g+7!IW!QSqvEQEftm[IhNh=ZFWa<^sP-JB;&NGy(PVl5TD>p!L');
define('SECURE_AUTH_KEY',  '%pLtus]w>F=}&ap1tbnK|.k,w+jX);+P-gt$5gEwdI>G%(0dB@!|?sR_y5BaH^b,');
define('LOGGED_IN_KEY',    'bS>em(3wN(kh_Ri>{Olg;00eC;/NFY$b^[{R;<Sx`:Z*y@Dg]=gpM2s^6(f0u Tf');
define('NONCE_KEY',        ':;c_hru2%u0?Hw+Q~eE`i:ie&^4PCt]tj5QX2mAR:_S4?Q2<oQ(F--s<g+ZF+h(s');
define('AUTH_SALT',        '[_EQg!#70Kkpq%Ix)EQPJ(%3wL)~l[N1NGG (Q+8$uuM(-_:#|W(F(:(~`tT47|Z');
define('SECURE_AUTH_SALT', 'gyD_mvcUOaoKYwys;(R3m91IORIit[WnUgDWD_/)6H#)}?:I2}[-aE;C0FyKXLe9');
define('LOGGED_IN_SALT',   'b[v+9R8WDST1^%C*SM`44kWc|1dWZ5t;!*ns}x|j`(2THWyE:!^HF]qx{*+8tp2w');
define('NONCE_SALT',       '$pzEj@O(A~L$TV{)XulcfT-K~jXm<]v@b6GWQAO+7Zk>Kk7A)^tETtA9(y;o,NRY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
