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
define( 'DB_NAME', 'tokopancing' );

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
define( 'AUTH_KEY',         'gtWCK6,,s`^nS33jrxLN,&`N;4QmnLPP//siI&/Yc~C0) OUQQip3asoA!~O5.;Q' );
define( 'SECURE_AUTH_KEY',  '7YDr$WNO:c,nIDkwY`<)>LdzC:c9fSYp+&!NFXdtMm]4*`:`-Nl;p(kFyZ nz|_8' );
define( 'LOGGED_IN_KEY',    'y84.&%~quC@rv2m(N)UDrcMp@(YvdI/pIu^K60rbCWwaukA1&r=$KELRX58iv/g&' );
define( 'NONCE_KEY',        'biPZ@ND,evlJ/eRf ~32A`g_My.rTHz.FX#@_6Jz`3~D#gDYH4n]DEno)| %+RW[' );
define( 'AUTH_SALT',        '{bgNVbHTD3lPlLG)j,&u:i%!W}Rig/<b-F3S^0x(+mgiC/pWb9eO~KqA*8UWe8CX' );
define( 'SECURE_AUTH_SALT', 'QdE$0Y];N1B,DnUpaW$T$;$E)s0|mdbrm-ae#-3>MUXke7Df4yXo ==;Uka-eM3(' );
define( 'LOGGED_IN_SALT',   '|N2m{RX/R Rc?+NzKHVjN6D<gh.p.~#<E3^V-I6y16#aPP0xBzd]vRrjb[ZSz~T)' );
define( 'NONCE_SALT',       ';!5b(j@-K0Q iLZZZmUX?EjQWV3>g3HH}P,mo^`3i:Qou5`~%d:yh#94Y%(9kUKa' );

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
