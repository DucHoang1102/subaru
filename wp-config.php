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
define( 'AUTH_KEY',         '}KK,6tTB984SN1%TNi.5u%m4$vB}jd<e;8jZPUK&m>o|tsna}[B`^,w44% ]vz=Z' );
define( 'SECURE_AUTH_KEY',  '{@3hAR9&2V[,Y*qVAki0P$dMn!-[p#d8 U@5nx!-kK^;?SP6q5wisUT|aZWe|{O*' );
define( 'LOGGED_IN_KEY',    'yw8@5o#F`nID*pOI?1*HmdHD(F I-?$~R9YC_#XDUB3@h8d|lL(TAWf;>y!]];NN' );
define( 'NONCE_KEY',        'ai^}xWoc$XY.NV@3.(8~zby5x6/vd}{bFg[*kne`WnXS2ZB*M_sGlI<isc}KbC6*' );
define( 'AUTH_SALT',        'hH;ljUDu ^nq5-ci s]J4*>BY^`:>#s6Q$V<LGO)Se&y~Gd]V+XpN#CD7u$:V|Eq' );
define( 'SECURE_AUTH_SALT', '/BvCFYqo/{)dZ&aY_EOF3/H;eyH;3+4nK7-W1qjKGp56ybQo<vxO^Z:?Z.@m9Q1E' );
define( 'LOGGED_IN_SALT',   '[C)=sePpn-Ta/5?OSeB~u>KC* ,fD0-{8!m,jjD$C.;[Ugn3O$>geZ[Fg6XL8D*&' );
define( 'NONCE_SALT',       'm|[q8yh^{;D:g@H@Mldsvz(ZcJ:7K?<RW>!Se9%h?_?.MFiY,Cbr# rzZ_Q8t53V' );

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
