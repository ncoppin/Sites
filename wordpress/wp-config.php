<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coppin_wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress2');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '>_afRS3R@t6WL.(Fo_h-;l2jr4BVK4{0K~DBGiOEX?^-8spa pD-}k8#=^F-V~p|');
define('SECURE_AUTH_KEY',  'uAA l9di-0ynq>w$.b-u:,|Y4e^u.T+[5H0X=naGxysekaZ>1MwY)@W+|]& {J/P');
define('LOGGED_IN_KEY',    'xB+a!OGjkD@sqjEx%zvr),$]#bG!o0-MLPM+C6$cd.7-)]o}=;*0hWD~EM90}U3G');
define('NONCE_KEY',        'DG|viU,0;P?>J7-/E:ylm@Z@<Sh:(l!tt7)V-I~fxQnpq#Y$/_+x*AlbSprbFzs}');
define('AUTH_SALT',        '(Wg#fv!|_9B0-NW:*:t$+JF++$/5F-NRwl?JabLYuCw(8#qq:|tl:F9bYXTRAgo:');
define('SECURE_AUTH_SALT', '1@ZVt|63*B-uG)f2cxAd7=1GPyJ`Eo3%R[-=>d04&up2>sFtS&^&2l`4g]&J.5 j');
define('LOGGED_IN_SALT',   ':U[m{Rd=_<bHYQ93Y+?5Nx!o2;k`jhA#oL;WQ.gI+WEO+@ MW[9-$PMu_X=iX9Fm');
define('NONCE_SALT',       '8/v.Yf~S}V7h3!p.B!XWP~^cgpn_6cDWoV4ivTEC?vDleu~IZ!r8qt_+:Hn9g=~g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
