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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gaia' );

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
define( 'AUTH_KEY',         ']/WLE&(SSBD({-irCGJxL]^$p]|TclH60no2h|,d,)&K_4K =Ef ,hK/m=G,nzr$' );
define( 'SECURE_AUTH_KEY',  '),,9{yYP#!L%SsUPO Ey}t/FjyL.zM?GS*o__H3Lj= x(Rk[pp)-z?LW43HRJ3Ec' );
define( 'LOGGED_IN_KEY',    '@=QTgo-JvD}iF3I~fAAL!Y=~CKJ/xCsYs=+&MfFQFMd2*0R-&=V18OXuMm{os*vQ' );
define( 'NONCE_KEY',        'p.E?yc32a}%FpaJ<C*/?U|J(CjC&LZFDg.?9w~ULf0^iY!iMsb_$<<d#HUvhRz$-' );
define( 'AUTH_SALT',        'I]N3Tx`Q{@01,!gJvKE,yL.H=k6(+`ql(` F}9xp]}jDINzCl$AEJ8.2xJiA4:$?' );
define( 'SECURE_AUTH_SALT', ')Dh-n&!.L<JFKbS~,E2Gr->[wY%Dlp.sG:T$=dIe/a[B(`,<r<<uDv1&tpdT1@9r' );
define( 'LOGGED_IN_SALT',   '*z $[ujXF}%%AmsO6Q]T3^~Fig}0&XQ6)9A_0a4H2Jn$!ZRb!Z=twVxcX2g2PL:9' );
define( 'NONCE_SALT',       'C$nk7}#x bAkXEShK&e^#uJ_v8t`C@~Ttv0}91sQM<1:9lea<[bIL|pYE,qyC>zy' );

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
