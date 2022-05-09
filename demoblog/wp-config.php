<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demoblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nMMktR__TOk HSlUw13`=~fwiVG[{qzEq{#Mxr^by/&RQ =d`K~$1-jc(<4ib%h8' );
define( 'SECURE_AUTH_KEY',  'Ws)^xeDhpEkr1IWV7h) F~axO4:S(XFN19mZV?x*iTa|* 4Ow>@MS!iK8j~u%Y#I' );
define( 'LOGGED_IN_KEY',    'i3T=~?HxACx*O)Y,l?GcW|I4xWE&l4<*n%8` S8^`?kmHY(lNHV!fEzNC~d;9t38' );
define( 'NONCE_KEY',        '*?O70]}JA7!nax*@6}bY;H-9D`VJr<{U+qQ@?|q?I`Ls8B/]^z,t55~ZEp^QqJ)q' );
define( 'AUTH_SALT',        '>*[^6%X`p!/Ko->*:<d5>g0+V(Zq|M?!4,7;>8.q]sy@dfx)F/?hmh`}t7}*4}t=' );
define( 'SECURE_AUTH_SALT', 'QMpo`ww7dpB{<&_ip*hJW9 7^Q#bB!LK<fa6Rr(]-S% L.Z6BDHMbj+>b7t.qlJv' );
define( 'LOGGED_IN_SALT',   '>y$IOp{_L9j&?83do5mZHp=,lDk>@|Y.w%9Q|Bnf4omF_#mbQIMpTb- YS2u`#%w' );
define( 'NONCE_SALT',       '9H@-F)&%O<^Q_hH|##@M[{.Lb4c@*H;t&H<GCk)XAycoML:P%ga` J?y.Ea`t<1h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
