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
define( 'AUTH_KEY',          '~X~{S[;l)8jF10Wg]}ihbUd-l7Zvr#>7:f6CUQMcdJ@RAGXR@xK88&c[7eFkFmV7' );
define( 'SECURE_AUTH_KEY',   'xeyki!dWp !w*6=t3+svs6<^|%FQbi5_B)Bz8xN|:CyOQ,8=D{,%sT5[l<(;>+sE' );
define( 'LOGGED_IN_KEY',     'G?*|X=mWr5Wk(vX9x|y[/elX0tPhT*3.~o[a)sCxDp0~F<fX?yJ;OO9dJ(:rVJ0w' );
define( 'NONCE_KEY',         ']f6g~|o|wf.l#WubWAMm-!!*y}K5dMyPN,[dlB{Uj3 m@k2I0RKRP<zOKEl[]A.t' );
define( 'AUTH_SALT',         'bUZ(JFMeRLAC.HncaJKbtkgx+$)J*u~;(mohPutumv]38:ZJyerdp8cp=/@o6dcp' );
define( 'SECURE_AUTH_SALT',  '^y1fgWB&hy!wSm{%qtazFcHIQ=z%h.}4>skb=p{T$N8#_QH&J|@O+&sLKky8BRm^' );
define( 'LOGGED_IN_SALT',    'u:Uki~<PY(!}${^7*jAv>rp$3J}q]87%[G-[Y)0D;+s/iV9Xi`j8tvjmpy&{R^hE' );
define( 'NONCE_SALT',        'gAWG2CbY%Zly,v__6l`MOy8Z/=awbgSi[{*QO<cn]{#El9d_Ar#BlP*r3^hrsCRg' );
define( 'WP_CACHE_KEY_SALT', '#n0Q5?>M&aP}qq~|-0[%atD5M&y<~T^+^^hF`#B^rRpxIu6D+/p{{m#I>XzW5$7[' );


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
