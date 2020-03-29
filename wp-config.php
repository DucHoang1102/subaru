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
define( 'DB_NAME', 'subaru' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F}>8T+$AfeK^0N,2Jnq7+OB`2Er#qBPvP $]S$bffn=&mYl_hUL>twI+qnR)K#+<' );
define( 'SECURE_AUTH_KEY',  '7:S0E8$F?BWv*AZz0AJM@5#yS+0y !,{/NJF*1eI1o9S`~Hf~|,!Ni@PXiE):.S2' );
define( 'LOGGED_IN_KEY',    '2<pU=9s%6?Wx|(b&79eY1;AWzN3[3Rq[E-Gi&+Nf+s<m,@@6NPEtN(D0v&3Zw:Aw' );
define( 'NONCE_KEY',        'VYn=q^oG_|EWttrfJl$Pe[y@Y;>?g:59UoBPE/.)6Rs*h^zWofQS qaCzWI9~DtG' );
define( 'AUTH_SALT',        '[u MyHJ-S]~Id`e7 SbLX&hzLR[37NzC0TQ!N[To<>C|<;.jMzz+j#@c~A!<*dzm' );
define( 'SECURE_AUTH_SALT', '-wxo)vo!ZbBFw#y]q~!KgUzs!vbnTmMiTaB2/p ;,[_jno=T<jw6~:;z[5OnxN!Q' );
define( 'LOGGED_IN_SALT',   '89vk_G }Yi6S}M5y#Mc<,00cv7&8yZja.c8VYAN:g1vp6ls?:Y*}B^y2YD(G[1**' );
define( 'NONCE_SALT',       'bezf^98aP#x`PGE/Hd) [Eo_?zmi>T0ZQKV$aC1TOzi Ye?dz`Drc;1PN?R@D]:z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
