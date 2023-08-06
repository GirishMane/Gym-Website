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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'media' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'RWMhEL_;gQN,-j<*4lII9N^6>PNT<$_n%MME~Fu~([g)H[FA3xTCrA[a1`OL*#*Q' );
define( 'SECURE_AUTH_KEY',  '1i6;k9$^K:Ov(n2^yk/ceRE,;)=?lGO2]eFJBh,IIPUFgV(Yqe|q},;3Vm39+.w?' );
define( 'LOGGED_IN_KEY',    'YVt*SXAZ_+{dP~+*#@|Fs_]v8vU:W|QIZ*/1k%2V-<,$+E(R#NAh72Qwbm;w <V2' );
define( 'NONCE_KEY',        'AewrrW:~hgP{=SUL8~3%HoM2Cm&tX%3EYe|VZje.AUl,hYv3`@zG?KTA#}%#ls>A' );
define( 'AUTH_SALT',        'g:%L.w%]8]a@lb0]S_nNF:n>hD,_q-;Wue&5yBKt/ SB$w,0CsfANi>R;Ev20R$&' );
define( 'SECURE_AUTH_SALT', '`D&4Z~uTa!*dWwl&,l/OVC}(RBHEx<p+vegRs$39Z}(2.yP P*~9g2BmYCJF}UMi' );
define( 'LOGGED_IN_SALT',   'FLiI1.l[SqsM*=v8D3Q,u#o6z?,ha,kh@+aQtE.w_A(u-AqO<B:diJK=q[VhV {b' );
define( 'NONCE_SALT',       'wLpyRHtV!3R4mE3_$H]<!BL@0:Nd+xU?D$Wr@RI^-c9@u{=!fv/!7N(0G&HzgN;x' );

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
