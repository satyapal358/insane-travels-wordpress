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
define( 'DB_NAME', 'InsaneTravel' );

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
define( 'AUTH_KEY',         '[/jrHy]GLw-M>= ~Af9:*xclS%jvS(JFEFLdig=JI4YWat#_`:>@x_e>?H{$LB )' );
define( 'SECURE_AUTH_KEY',  'j n^@/OL{~MQ*&2Qys$Yq/mmp!sCo)hZ0e2}+n^:2BQz{9j`GD;_Z`~=M;y,*6ID' );
define( 'LOGGED_IN_KEY',    'la!M)l]gj`IbHgl.Z%/d6}l[(0z.ylKiS-5@S46v,`^0)5XmaU=o3PtuX[64i]gs' );
define( 'NONCE_KEY',        '%CwU/W_R m[HIR}~6g0AEA%F6f4nM|G#;O_@qPM,]C.>e=0}ANE^QZHO2.)PPSS~' );
define( 'AUTH_SALT',        'jc W e97*A:^O&p|,Q`g7z w(!B{AQ8^lq#b)[heynqu>p%dLSL.J(OD{{Qmo;Ix' );
define( 'SECURE_AUTH_SALT', 'JD&sfMhD{Tq[D Nc&X?!ZO`*{YM8m,WCjQS!3P(0AHZf}9w-a<`2pO619uh=YxR)' );
define( 'LOGGED_IN_SALT',   'fOvY+3-}tp>$N{ROSa<!]X0u,4e0IauaruTw%,(H:j zjj>LjA2}QuZFlj<pDN/c' );
define( 'NONCE_SALT',       'yj`_*K<6,k[4x::+nbFhZaYki AqNbYgN(shx0nQY$C`IH<0%g-V~)G-ajXkFNob' );

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
