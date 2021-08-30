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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'In+ICXhFZ(Ue3B$VLJgrlR,pYo/Aq=rk-d,e`p!]I4h7hd_jS+9/m%1?|Z`Nk!E?' );
define( 'SECURE_AUTH_KEY',  'oO1^LWSuo2%AH/6|K .bT2s8tF%>$^t%H*HR9,&AtY5^RWCQM.]rbD%&Hk+ND $0' );
define( 'LOGGED_IN_KEY',    '=5ahaa)dF+f`e+}!O}Bb4x#62C?A*vX)?8Swwur.7:2]ymq>M05#N*iL{g>9ZOOg' );
define( 'NONCE_KEY',        'qjH.M[Wt-W#/d9l <&nqZdpZqE:ILcD8gCoR!`DbE;#`Z?sZ0@2yQYDy-Ep-N>)>' );
define( 'AUTH_SALT',        'Hc>(Lc6O%Fd)SFi<16o<nuyCV%,:<.3$Y1SEkmkRlTKrzJ?Y~3mquu)bN2~ZkKMz' );
define( 'SECURE_AUTH_SALT', 'Kt4@3fx|9^y8r]}KQ]iuG{M>uu,fL{1A5><~)xVu60(;)d1T~Lo{@yJgt/KZsSi/' );
define( 'LOGGED_IN_SALT',   'B&[QlT@|,hzro-I[F`>8SNJG5~<0lo-sJQbN=lIfRRM;X#R5PIlS` ?up@Bw#^%3' );
define( 'NONCE_SALT',       '~@;[lmokmUX>z(n1-Q^otxs+&% }4!yUh@|kj?;9Gu+]E:qk2X|}FX 1X7(uUx>G' );

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
