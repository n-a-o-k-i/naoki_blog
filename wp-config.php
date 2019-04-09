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
#############開発用#############
if($_SERVER["SERVER_ADDR"] == "192.168.33.10" || $_SERVER["SERVER_ADDR"] == "127.0.0.1"):
  define('DB_NAME', 'naoki_blog');
  define('DB_USER', 'naoki_blog');
  define('DB_PASSWORD', 'xixP&bN43');
  define('DB_HOST', '127.0.0.1');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');
else:
#############本番用#############
  define('DB_NAME', 'naoki_blog');
  define('DB_USER', 'naoki_blog');
  define('DB_PASSWORD', 'xixP&bN43');
  define('DB_HOST', 'localhost');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');
endif;


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vQ>9a;+uu1&RSCi~h#;.c -T8%G .#;umGf-:F2Ol<fM9Ky$l6|ZaPb6}!6qCN!c');
define('SECURE_AUTH_KEY',  'ccv6VKYI@@AW#/PKxX o5U:/1*=hqg!CbO/2}H-f$DQzH=<( c&kh+^b5ymC5 Yk');
define('LOGGED_IN_KEY',    'B<0]1PKl_e1Kmm3Nt :C5U7(T]Twd}&Vp}UI{D$!(du~6n%Q Y0!:IO2;C^;LFuh');
define('NONCE_KEY',        'nYBb=(WtM+_GX~-qIBLD8B+*U]QW(Ig)D>B7 q0dWa}JjoRMALwhf>a=MXEu_eMf');
define('AUTH_SALT',        'M:8!h(uyOb,j,Bp l(Gd+NQ+.o3=]*GwHV,%!n>PAY0SqqEvRebq+X:KgXjj0w4;');
define('SECURE_AUTH_SALT', ',EE@R:>k$mG~3`e1CdH*C@5qX$|Eg9C6*[a-C8qEdKzO*UW,jp;~*MN*Q)U&MrXu');
define('LOGGED_IN_SALT',   'P7hzD/L(%.!k([N%]eQDIf(lEq}$6$|D (h[s%1+hzK;k}C>XxKhZ{q`k1pZY~)z');
define('NONCE_SALT',       '>2C$aegwQU}~lcBu:pP2aSZalRReN:SiCPIBYdt29!n#?3BJn<V;?/A!bZ@-Hpb!');

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