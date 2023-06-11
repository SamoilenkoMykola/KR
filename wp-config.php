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
define( 'DB_NAME', 'prototipe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#6f{cy$!)9a5$#]1_nfX%^2]w!/Gq+4#rTI<fO06TWL:`wQ=#PUWR7o <k(aT]CY' );
define( 'SECURE_AUTH_KEY',  'XB n8^9,$pmBZtjr/ZV=!qk]mvJmJ.!%XUS8/^}cV!Q_{MP+$Vjq{2O9e=T_,zSM' );
define( 'LOGGED_IN_KEY',    'l9R`4[L],qP.BUAt{`w]&MmV9!4Hi))qM0etajgs~1auqR*T8V;g``(TF,+QVk>n' );
define( 'NONCE_KEY',        'R}7[{)o9D?NnRd,xgD=J=0C#oeAV5n|QSk7`[ZztGL,7kJn,.&d@liO]7e4:A$<}' );
define( 'AUTH_SALT',        '% n/IhL}a_pM^jBUImH2y#p_mW5M?^}wWK~BnKe[Fmxs+Jt`Ve#0MJZKo{<Lxi<0' );
define( 'SECURE_AUTH_SALT', '+RD=9<%N_x%X^5z|2~Xg;f,;)74Y>SH&mvi37(&-h4^y79v9N< o1Kt{9m;u`@J1' );
define( 'LOGGED_IN_SALT',   '#i;WR<EX!dw3OO8yS[xXKZ7A`|:O/mk0&~81fY]eY+,7ka9{-frd6J(6b}2[lCi}' );
define( 'NONCE_SALT',       'e^bjvK!/O)ZX&i<6caf0}E?Z=6w+AUPf8F;Y9~a/;~`=G0n!I867rJ{9:$`#I#J}' );

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
