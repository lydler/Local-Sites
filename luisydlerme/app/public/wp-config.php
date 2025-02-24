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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'AG#.+FVbpolEji@is<WeMkJiu#/6~Pb#P!h|OO^oOSI`EloNO)C;}px;DfbQRuQ/' );
define( 'SECURE_AUTH_KEY',   '(Eg%mNS}YB3N-Apt&>kK0eueO}Kk|S-/6v3:EE)di,orL1Ip7M@<PsfW:??JYLe~' );
define( 'LOGGED_IN_KEY',     '&A&Jp,E?(t=Zt?xrMBL#,:-MsJM](Ne{tc_5Kwq^R(pE3YnX0~O(,|,U843_6dWA' );
define( 'NONCE_KEY',         'mexv}8Uz]:pz:0=5!&H0g:PAa|Y[F2BY%~P2AKS,#;Jq{PNe]z*5yl)DXw2tYZ4v' );
define( 'AUTH_SALT',         '_;5F9oc<YVut|%#:*vasu[L9h:)6*3%f+Xpi&D*X=`MhY|EDpx.-&kYSUE}UbL>M' );
define( 'SECURE_AUTH_SALT',  'Eh_$!vf>2B%TIwAMN>i`3KeO96<EHH|7>HfXUw0~uTEUe_:zRbW@O!XH<O`})VTY' );
define( 'LOGGED_IN_SALT',    'd_.Lv*gN+&unO;yMrYLoJ?Se9%~zw9ED(WuGTJwe_sPHFqba06j=%_N1 XB$z{IM' );
define( 'NONCE_SALT',        'l5JgU6#S@!+~~!%tiH_pqnN3h1;uPp~C0Ix{g$t;SbYt$9j?R(CN8dE`Y#$&Fj|}' );
define( 'WP_CACHE_KEY_SALT', ')[LWulInp%gthhULQ0ab@W!{v~Ubjegad-GCxU&ASom^CVAi-c{$`92!,c5=>-|q' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
