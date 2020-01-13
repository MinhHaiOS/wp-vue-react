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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define( 'WP_ALLOW_MULTISITE', true );


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-react' );

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
define( 'AUTH_KEY',         '%R<A590oXf&Fx4JKLtk:ka}]iIHT?j$RDsW|?;ti}1^-^dP$&A|3sD_/7j.+zaA}' );
define( 'SECURE_AUTH_KEY',  'DCL?tL_ke()|D5M]TegkeJx^E*ssW Jmjz<s&JIKJq_+P-7(!Q)rRf]W2;hSWQ:e' );
define( 'LOGGED_IN_KEY',    '/B8Y4!Qre<P>sBJD _Qo 8}6pN;SQr9M0Y>E=D}ilt[Ry<:}% hC].Ap#8uIS_VJ' );
define( 'NONCE_KEY',        'Ylg UkLc|fNP/taSwVg8eUS],j]Gj>oq1|0YUIrL]Tq>~FOl(|b}+f=GeOqLs^w]' );
define( 'AUTH_SALT',        ',6(6+zLa SFQJ;V_`1=O_(aZs!b?7+_=&]u3}LQ8mdSYtXz,PVXc%VB@@;vy;1F[' );
define( 'SECURE_AUTH_SALT', '(x`z7kboGK.LS~z?Nul=u[u+5;iSe~x7JO,`Z?*CK8Hz$vFu<=ziY@D8@[t&`h_;' );
define( 'LOGGED_IN_SALT',   'oRJcj,/;z{)b+BlHD{U,ID#$m0G0c;=]hoPz 0e.EovM8[K:s6LEI~BTLDAhzC]i' );
define( 'NONCE_SALT',       ':cAKV={,y6Gc{5p@n5H;pXF;+54vI~@3r]0w)H`Yeo]0*OWhgot1g7OM(aG-_#O-' );


define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', 'e>T@LY^wMrR?z?`Fy<SZH9kb._]?&LQ VQdm(*0uo%3P8oP{zBd|_`+Z#1`)]LyI' );

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
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wp-react.local');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
