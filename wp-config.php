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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin1234' );

/** Database hostname */
define( 'DB_HOST', 'database-2.czjl7yukrwwh.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'iU*43q n67t`;QO|Yht2/d=$@q}+=$J?w)+>f]+4cN,oKyAD.#%<gXT$5uB-#P`:' );
define( 'SECURE_AUTH_KEY',  'v#TxPElKTz|}%=A+mK&m{aT-qMYks2DqvB- F^Ug@`c%;%,~{Kg9kC?W k/zEaG=' );
define( 'LOGGED_IN_KEY',    'QWb%&?4IBC| F8r3q82-P%|]iL6bA;M4ze;H:pkd]15uAx2K2^wTchI+IDLy-b`$' );
define( 'NONCE_KEY',        '9-5&|yC$DiGzt#CDj@x6S:ss,zEu3JX)qLiWj:t:d`I~tqXE=!^ilyVK+vFfmoU1' );
define( 'AUTH_SALT',        ' ~@=;&-`aL5uP<-o{9lZ*ZYe$x^2g<{s!*PR,p7JKE$s{<-f7ta3XOR;D@-wa_f8' );
define( 'SECURE_AUTH_SALT', '$ep#B+gHV0=m$znL)[hxj~M+T~+9AiA,Vj`w&g]pF0l{%Ih bDI(O6<AoOm.1K;|' );
define( 'LOGGED_IN_SALT',   'Ra.0d_qj4ln:Md4D3|zf%|H`M1QNF]29T6uWg7YqQrreC;J13lP>]^)AKSH]BML$' );
define( 'NONCE_SALT',       '[fB.OWTf=^h4NP-yVA9&Zt=>F=TX3| 9-7E.H/I6K66V5T ?[MVF+t(!h)^u3/I)' );

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
