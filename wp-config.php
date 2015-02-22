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


define('WP_HOME','http://tremend-training/');
define('WP_SITEURL','http://tremend-training/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tremend-training');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#SZ^7.<ad[C0;HM)vtF0rF|%np3*] ^4[SCYHla$-%;M8-//AcV[Hy!zIa65>Bfv');
define('SECURE_AUTH_KEY',  'Ii|s[S(=r]!uCl{Ib$/7Lc[Tr&]AW/Z{LIEvWYW.U3W-|yb-0X(/2B#Q8Z0]ly4;');
define('LOGGED_IN_KEY',    'Y?]9TU8{:v:eA3YDz0XU8{mrQ _Osh#9+cJ.k*%5ucS~#DuBa9l&n:0C^^c4 Zn^');
define('NONCE_KEY',        '81311*P>IEn[%m2|#8 Jx+0*p5O`g?;?{q?[1_+l+:W?i!)U-E/yprL/$e*)a0ym');
define('AUTH_SALT',        'KV3{a4x[mz4f[G2>3a1|_)Ty-_8)8hU3-vk3kLgLsX#r|TrFTh[Qy[tqsYRH~+S|');
define('SECURE_AUTH_SALT', '(6f/SCy.}f-q>4yrfXoZK=zfZ/j24%Cy!vz1kF4X/!z7?mL:Qj+>S7p@&}^&5zbc');
define('LOGGED_IN_SALT',   'vL0(brfK4_|z(t+-78V9$KRSy+T/B2t0F{MT6:>]5B*L4oJDZn_^Q-R[n73~eZw#');
define('NONCE_SALT',       'rkZh+ze7L5k#f7t)U>`<s7lQ=g-V>B0=XJW5 K;ip;>L-!(sCah|@g|4mzV*T1T8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_';

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
