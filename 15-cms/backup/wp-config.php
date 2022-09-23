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
define( 'DB_NAME', 'cms2338200' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '?/aYJT8]=~ @y><UaibUdGB=p6kJk|?FwE%A(RD(sFiJMYVmR:LTbTs&`,pB1xD*' );
define( 'SECURE_AUTH_KEY',  'BqAn4L!qnMNov1=^-Nmtb;{GzF mTJ5?AVtYuT~}V*X3pxb@8e<NkUgFu(8g011C' );
define( 'LOGGED_IN_KEY',    'Fl/|^K,LNA kk_[m,-ZmO4#qM:..|Wcc)iV9lH^-qt@aBL;=,Fe8zAXk!RpDJ!Se' );
define( 'NONCE_KEY',        '%=@F)IZU#O;kfNjBYLVf-BrYp9J5GeihfD-n4.l8?AA%)X!?E{ JJIG|L*dqsE`o' );
define( 'AUTH_SALT',        'Nj-j*b|@}`Ofh<g}YD2q*sLbu]7pTn/M!UT~@ar^[4PFX^mmz?|+v~=dLkOUp@oT' );
define( 'SECURE_AUTH_SALT', 'Zb#>cw+`bSF:)fLmIt dx9aPp9&KAXZ~a|J1G%<)^qf67!l=?^@RTZTKxQpxZ4h(' );
define( 'LOGGED_IN_SALT',   ',eJfHl6R^)KT+9#8Ypx$j3;Svl0s3UA@ln}hQBt/)>Ybi5F@7o>w`B(bR)+5L5PR' );
define( 'NONCE_SALT',       'B!j{Xy]F_YiL=cvrtUN74h!02x}J{U UF*&NoXY+K*N[O(N8fiSk*:)daP?P[u(9' );

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
