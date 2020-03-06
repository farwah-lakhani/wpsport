<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'datatable' );

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
define( 'AUTH_KEY',         '2KYV{unTx%qt(L R>1-@jUe[NH4G#m{gliPC1Mr~p+8gVE&i/b-]A9FBpUhaSzIC' );
define( 'SECURE_AUTH_KEY',  ':?Zv&bvn<-P_5RvM6d_4d ,[URc,|2QHFBm-1{T@b{/d*G0h.uJa-vZa/7:4tvCJ' );
define( 'LOGGED_IN_KEY',    'FmB^=}:8Z[4JPV!`Uh4)n$[`vO.C=bAM!w|JB{k4m8udVLS#4vtl d,Dc_z#!ezE' );
define( 'NONCE_KEY',        ']4k6~+RCl9&?mtq=YQv.l+xHwf#5nqeA<EAS%l-LP9ZLB|A0}i73vZIIr=gLlj:j' );
define( 'AUTH_SALT',        '{<KH~$ER2hZsF#BK4<wnBQak%O668ZyVdPr;H=UG[}]ewJUFH4sS5K3-Z0!9Z4#9' );
define( 'SECURE_AUTH_SALT', 'u~+ vd jPUqrWd8P a,k|j5ggW(la,?@,?qljzg3nOW!VM+GB};?p,asy8l!rkCs' );
define( 'LOGGED_IN_SALT',   '_sAG-<T`92z I<eEjn8&N?gY_ p-ogYi2@v[#M?LC@x8g<5wQoa1oE&$fo:xNlef' );
define( 'NONCE_SALT',       'Qx:sK3QVn~m$_bK5ySU9KfP/3|yy:uytX)_;^D0}$~Eq/Kn,x,hpd/2:0OB%KVQ9' );

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
