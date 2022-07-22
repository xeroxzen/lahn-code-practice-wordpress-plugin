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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'hZGN.sl|J9gV#35(%d??z{!A:Pw8N_I1R=0$)7tl}Z49,%|rY-hfKC}OF.AM`B8M' );
define( 'SECURE_AUTH_KEY',  '3[)!!{cF9zJ{!_)Bwd_/INSF&]FN tcQJfY1$=:BT_Zb/)u2W)!T_.JG{Kmh97k>' );
define( 'LOGGED_IN_KEY',    'N!hx;)/(dv;oOVW]x!n)^Ga{zlWEWG3ZIrmSVek$$3(sP{|ax*|.NK_LfXs59ceJ' );
define( 'NONCE_KEY',        ')3yR6!|=m?bxV+}B.?Q6iXJGGr>?^WU8^QBM=keYES)DXmW>Lh+XgLiY.F+^G$_n' );
define( 'AUTH_SALT',        'm~X>Ie&q?@^o!zutSyrAM3*eO.$iZLu,p(b(F(+p*^e2esYZ:80.JhyKsC?_^fuh' );
define( 'SECURE_AUTH_SALT', '~Yurs_vBnmCI!RG50o.A@##KD&?fPA3%y,U~&?L[dUxZ9m0_$i*6M$gQ4L@{wR}@' );
define( 'LOGGED_IN_SALT',   'l6f3YP4:.xp%:-b3sjW:%dcltd}[Vl.0H`x%p0(&s=x@tRP.zB@u5o}Y,z!ZCD&a' );
define( 'NONCE_SALT',       'Al>_qQ7KckopvIAdp-uogJ2I0:LVG$jDS}DcG; s|+7|$2K]?<%%;9kzA#.gus.8' );

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
