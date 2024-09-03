<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitwp' );

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
define( 'AUTH_KEY',         'MMh8oI0s*H,UFz=sS==?T8cDc,t6}H)oF|QX>8zGdnNz/=0lq5g*-gh++,uX+|I:' );
define( 'SECURE_AUTH_KEY',  'D;YiZRDJ|1.4i`4GnZG((aQ&a<Z+U)F~{A.X)la,~s>uH)`vXG@%FT@`OInrg->C' );
define( 'LOGGED_IN_KEY',    'F/hEC@Uw`[!X}zm`TRgfzw_%RG}+i<-w)eQRYvJucQ3Prl}};d(fw|; PUP{C8Me' );
define( 'NONCE_KEY',        '4${z3pQ*38(N999zj[OoXwTeta:HJ3wxk9ly2=h%o@VF-~D.,G6$,uk|87+? RU`' );
define( 'AUTH_SALT',        'SQmoYE*a?d^C^2xVC52?NB_+70BGv2R^,8oR/UMFun&/5-M@_k,?U0LvDWAuIA<4' );
define( 'SECURE_AUTH_SALT', '6za2|]rGZFlPuha;lEF9sc0r6yV{[/o?HvDizqRKVYd9b26{@mU;dyE4d|GFGTiJ' );
define( 'LOGGED_IN_SALT',   'Wh`THN_`UuBA7%+-cRD,*0aob]W8S(|O&d7C`<FkW#mq5EG*=Yn.dI0 FPWmz+my' );
define( 'NONCE_SALT',       '#F1N~R7;7oKVv0$0~jc2t!kP1x*dSex8|0Am4VyISmp~1GE/%^0LFcli^T^>.#td' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
