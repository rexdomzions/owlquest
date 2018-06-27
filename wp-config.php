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
define('DB_NAME', 'owlowldb');

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
define('AUTH_KEY',         ',U}/W]|Z~>Yht6/x.SKt04AZv$IE02tJ%Yyv5+&KiVc.NB95Sk@oen^G[,r?pt74');
define('SECURE_AUTH_KEY',  'O/suAv~D9XpOeG3oSL9Q>v#,V^{*W7~?=Qk5<p,kf;Skbhqpzy m/:tSqhzF|lVO');
define('LOGGED_IN_KEY',    '&JkIZN%>d5qezcJ>}mROH=m[XcM1US,U><VH,XT2l=rXE`44.ig^N9h/ZN;{rvaE');
define('NONCE_KEY',        '`^2Kbh4.*HK41{!6EzJ:zKVv|OX[-vp-O6KDn}>5|cx({ZssP$P-1qQDI0@~sSX5');
define('AUTH_SALT',        '9VEQT{Ffi9aQ@(iBOg^7H7&PNT5N9 WfvF@ToZ?||;go;Gj+v*Q^6de5nV[u:n,<');
define('SECURE_AUTH_SALT', 'TE%y^7(%G(=ftILQAz5;<wWC<~>|%o>Q}6Q4r+a>!D.uqFz(YWa?dl(f8)p75l<g');
define('LOGGED_IN_SALT',   'Y=ds`0n!c>iuy!0+-D%%TfYL{GSRB~2u}bB!&k+Km!B@B9ZPQ~vJZ=@Y&cB9S^;6');
define('NONCE_SALT',       '_|7MF!iX{nD![WYI#ChxqRl-&V*%<uK?rUA;&c7=1%+XNEs WG[&7KySM0/}VI$9');

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
