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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_mariadb' );

/** Database username */
define( 'DB_USER', 'gcot_test' );

/** Database password */
define( 'DB_PASSWORD', '123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's/~:&0C<sFcPl55~El-(02@3V<*#C%|e$.7_Did&:(PZd<4H3CTy8Ctv)7C,8XD;' );
define( 'SECURE_AUTH_KEY',   '_96fE=0C,V4O8/8C/}#X%;&tN }M!CTt8X^l+%?D*ctDf=+qNc{wqqDuJC,oU~KM' );
define( 'LOGGED_IN_KEY',     '4W?s4e}w]CBc-B?w5.[4AB*F!oD50<Yck]|B{srZ)y#mC!7R*Kp+X5<[f-It<:7t' );
define( 'NONCE_KEY',         '4&hg>(ZMU0&5L8* Z<`yJLPVy2E;HiV04mpz]pLv_-N@Urb&M3mc2 @Nh85W]QYr' );
define( 'AUTH_SALT',         'cPvQcyv%Vjm;6@(vrq P82[c@]S/!CN0mFOGDa=(7g{_]>^Nc}WV.^O2sxuf!Y|Y' );
define( 'SECURE_AUTH_SALT',  'z$NG{d:VQ/ezVQb!2HZ>aGPoVCl!6q+pjq( pp;ci^i1}oxG aT1FiKTGWNEl@`e' );
define( 'LOGGED_IN_SALT',    'qwO}M8IKb?>Muged;88EjzS*XpVc!=Y-57sePYs~,r/zHJNv*@a`g213A=IVTovX' );
define( 'NONCE_SALT',        'GsFlyV[72#_ [E.s$X{06Y~Y2WoDPQXSjQRi-D262v/hgUdH!>Z3uCx9DM*]cM^{' );
define( 'WP_CACHE_KEY_SALT', 'tK!;*5ZCSAuS[T3v*QuY8@<QIRe;X5_Dnzqp+9D].wU 939TF$,RUubRzkRB^hO0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
