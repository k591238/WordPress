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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'SPY_=A*rGmkyn6a.KW+#p[hFBbEZB==fv8GjWI#_V5D`(_E7V3Ltk:`l`py5D9X ' );
define( 'SECURE_AUTH_KEY',  '@yAza^9Ah O({,UQJ. w%gx-2XE{uF_3SU!^q%s;~U]yoaFk[~y;xoob;E`n<?Un' );
define( 'LOGGED_IN_KEY',    'ZAsJjUL ub(FdpII1/WV?I-xB)R_#U)n1%z%~[>!A+t(n1R$C=0B]*Eh%$lf F,Y' );
define( 'NONCE_KEY',        'dxMf:#GJ5ibX`FpM]T?E%cfUo[E|}fXhnkT6X5sYuPV/xe3+68<^Ytw^KP/#Sf*.' );
define( 'AUTH_SALT',        'T^3b9k=8bWN6%j8S&JhMqyMKLWeqa<z64|`2<_Vv9L:e$`, Os*hLY{lWK]7MS0s' );
define( 'SECURE_AUTH_SALT', '~m$QO)jVisflz(<tM[GPn;I_3hM>r9Dl?*=eF?L[2H5+aLu4-2P=E0xn6eL8J!O8' );
define( 'LOGGED_IN_SALT',   'A}cZ^@+@SmxB!v_7J^Tpk^d?$J-sGCmBiLBSA(u~PTq*Z#civId3i`Y~jxtvn(D6' );
define( 'NONCE_SALT',       'N0`wI.z-n!ve2jpi[(WPf@wk^%LO{e/p$4;0R<Cude#2I-dETNq6=b( U@0g!LGi' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
