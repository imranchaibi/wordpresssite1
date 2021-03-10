<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'school_db' );

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
define( 'AUTH_KEY',         'x7i;%WG)B8lN8r `obG/S(t3GN _N5d86$3<We]L6SB%WHc9@S9PtkU~p[C<EXm`' );
define( 'SECURE_AUTH_KEY',  'uqPEi_FA&Z!i/Q/{m$CiagRtsCCL(Z#tcB8qAmfsz >=HJhN##N*AqHnA3%(N?$n' );
define( 'LOGGED_IN_KEY',    '3{0pIqSrFGU{D0P=)b%:|ftIT%jZna]~ ..9[*k4PoP3<0cd.P^f*1W[[gFkGkf?' );
define( 'NONCE_KEY',        'RasneS`s)XPK=n(;wost1Uyw1K!PS%N`N<Lz*>by6#D+SYUGUC0L3OL!/D:mF6;Y' );
define( 'AUTH_SALT',        '[/(z$>H2F!8n=ILnkF[UDis[KBio]j03dvw`8sH[weH$a7L-BqJpoD9}L8&.W/{5' );
define( 'SECURE_AUTH_SALT', '}>f;BaAI&h?@V8vRaKsH5|g0+*y(GPcb?<jPU:nK@& A5@doKSW [am8!C[6g{x ' );
define( 'LOGGED_IN_SALT',   ']k0Vj}MAsy1+d=+~[yiN{qz.V;|Os9w=UnwPI#O5+xFp}Ma[%*&]qV3$UB9uHj=X' );
define( 'NONCE_SALT',       '!^`rn31,oq^OdH$so{(zNeC#*:=!x}m#!B;LSt1a7-*F~=i^.~r%:3`, Td4SgX/' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
