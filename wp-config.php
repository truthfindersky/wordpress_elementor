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
define( 'DB_NAME', 'sanjana' );

/** Database username */
define( 'DB_USER', 'sanjana' );

/** Database password */
define( 'DB_PASSWORD', 'sanjana' );

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
define( 'AUTH_KEY',         '}c)Fe/QQV<LbSz~lt}4F[,A{~e{IoJB+75384*-:bWUzuf<nH&8,VSJ:}o W;D-n' );
define( 'SECURE_AUTH_KEY',  'Ks5J!bmc)Av09tJ_D6}ul|np9S2r eSn)mEU)E(a.pa)F=6?EkqCWt?zT,2&~&?-' );
define( 'LOGGED_IN_KEY',    '!,{(a2>)~?,+KnrYD>^_}~CsfT->bv22/PMy7Y_z=+8:1;pa <(BLcSdo*[FBbf_' );
define( 'NONCE_KEY',        '.sa]B@zXEk9xYLnhFdhga-?TMFmpLxU9u@]!Qo:T`)$wA|zws~hb9*U?hY0#2: -' );
define( 'AUTH_SALT',        'NJac*YP84>Mj[lI`v6f0XB-_~$X)&[PR4R[q5y39l )ld.Da@,K&,xQWij5<U?sc' );
define( 'SECURE_AUTH_SALT', 'g%|w.,ie)>oPwZ(HR3Xf*U^t43oP94P7 ?qzju8?5=ox?{wP:U-]Z+|:b?+C(ax.' );
define( 'LOGGED_IN_SALT',   '3Gbk^a9yHVjEgNKuRBPBz/I[3a4KAQ)ehWRYM3<!@]O&JxiwZ5`)~!^f:?Rp=<cm' );
define( 'NONCE_SALT',       'f$xRx*JAHG 7}vM7:eK=EsX$8(JP{Lf!I%YQOC!EP7+k+h~C#_|)kL8Ig+QOuhvh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
