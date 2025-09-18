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
define( 'DB_NAME', 'johnfennellycleaning' );

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
define( 'AUTH_KEY',         'aF`!fPgmqEb(gqF#IHI$l$xF{U4Ju#1jj$(A{SG@8I@ZU0`h4pkggiv%n*imzpHe' );
define( 'SECURE_AUTH_KEY',  'I0_miQA^bHn;ns;1Y:.&$)<2e;I|o#LZZ^A!JD<scb4EyKYO&K7Y&/Lb9MB4WRl(' );
define( 'LOGGED_IN_KEY',    '$oXp24 3IC[b x3x7WaPvakE%ZL&PdHz,Fgf=A*]&?;p+M0GsK5>Rs$w]t)nGCZ[' );
define( 'NONCE_KEY',        'q8t_e q_3pEoNiu12BMX/B15PCe1%WlP7RG(Khlg^FC3G}09K>x@&5K/+TTm@l^v' );
define( 'AUTH_SALT',        'bQqfM]~gxl:!@vYf=68<s%RH.M9K?jX/NEz%NP~i=^vF5xCspLL)mQ?/*#~zk?{>' );
define( 'SECURE_AUTH_SALT', ';fP>sVMkN5mbteIU`cI:3cX>{Pj5K,:.u+v}k#*p{Fw}d2~I-VbglhX3lyFE8I{P' );
define( 'LOGGED_IN_SALT',   '^vb!,fKg@4w~XymzJWdC$,X6p4,Pa)-,_5L}}E6]2rC:&&yQg%1!!I;{L2WA7Nq[' );
define( 'NONCE_SALT',       '?wwW[VSbzI/h(7g4g7Z!W63DoZ66Yev`;yrbxk5_[<5V*td_bLMM@WH}y/n9iQf4' );

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
