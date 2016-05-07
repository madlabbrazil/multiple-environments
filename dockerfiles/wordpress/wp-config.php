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
define('DB_NAME', getenv("MLP_DATABASE_ENV_MYSQL_DATABASE"));

/** MySQL database username */
define('DB_USER', getenv("MLP_DATABASE_ENV_MYSQL_USER"));

/** MySQL database password */
define('DB_PASSWORD', getenv("MLP_DATABASE_ENV_MYSQL_PASSWORD"));

/** MySQL hostname */
define('DB_HOST', getenv("MLP_DATABASE_PORT_3306_TCP_ADDR"));

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
define('AUTH_KEY',         'a1D+gUDKXny+^X<lVJq+.f@i-/^|HLMngW!:1n}EJ}(EbJY<nTaVU;N1Fq{hUHFj');
define('SECURE_AUTH_KEY',  '`BFj1JOZsQ{/}RP2i%nfIWhj=f`` VtG+f6r020ML5<+cJG^pu~B$2q5 N1i$*Sz');
define('LOGGED_IN_KEY',    '!Yno>~>Up8a|D+@FY 45 @H: i8K!g`/F[NHW6v@zF_`#SpTbwae2$RWXIrdV_S8');
define('NONCE_KEY',        'n C:9teSuos^ -T*nn?1bXttaawDoXI7-Dvi-937^7c+|^l)DP9fO`0YqB|<Yu8H');
define('AUTH_SALT',        'NsUf#jPq&^mKL]-l`DoHAwZ*nPIDe,DTxi!eJVS/rP^g OpC0 .T;uzFMfO E+N/');
define('SECURE_AUTH_SALT', '$vqXUIDp$$$,8VvL_/0uwwh+~z_3+^KGs{JKR_tf1AV(4oF2}K2xrsn~rh0h_Q6B');
define('LOGGED_IN_SALT',   'u:-{HXe{,ewDD&lULxaa@N0#[+uy_P4801H`66H^Y|Wm1Ui=6*r4ZMJ;m6;W=Yi^');
define('NONCE_SALT',       'LoIr0K#w<4-{`G..)4U1H,h<z|}$IjR[Zu()HQ9iNngwx?PK{g,DNl<D<+w!r;XP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
