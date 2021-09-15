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

define('FORCE_SSL_ADMIN', true);  
define('WP_HOME', 'https://www.castrads.pl');
define('WP_SITEURL', 'https://www.castrads.pl');

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
    $_SERVER['HTTPS']='on';
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'polish_woo' );

/** MySQL database username */
define( 'DB_USER', 'database_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Maryam@1984' );

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
define( 'AUTH_KEY',         '[VrC9Oija),(M #UiPe4~(H39[v>vVz&p4Ty a302)H-100=3k)N(hn2kEi|3mIv' );
define( 'SECURE_AUTH_KEY',  '.IcF,DaN?oC!f3MomV`URl4Cc/[YRm1S{XL[xf51l-rw >ACtRSH9L7H@/bUQsg[' );
define( 'LOGGED_IN_KEY',    'Xkv-Fr=Q<1Wl{.wiH>Hp/QN~!o3c@cdi69(H;HD9t2%S89lu-z6.T/xH}4B/xh`v' );
define( 'NONCE_KEY',        '>(]X/bv+vk&@j0L>^78RZt:o7.=l_zT2JvB}fuQFx4<(gHLhrr=THz7tfN^Uq~57' );
define( 'AUTH_SALT',        'WJ D/8p-,1Oh.8g<7,+,-So/Tv1XY1J4!|[[8VeR;)H<UhoDq#~ {?bqFrsIg8*D' );
define( 'SECURE_AUTH_SALT', '[6N`qQ|Rbkf--+?.8Xz+j`%fkSnp,jv^q#KH<dno0g d^oU_*t{sY1E]8zvC3n~X' );
define( 'LOGGED_IN_SALT',   '3T7cqvcj;rCS9AW&Z5^lbqJ]A/$kpWe&d.AsndC6HcZ7i+(uRmQTz0z81Cs-P-9=' );
define( 'NONCE_SALT',       'LO%?I(n.gV7;[+g6~/6[#bp.-ZBS!F4If@Zu}qS$P>45fG&2N)w] (jhCU52!P]6' );

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

@ini_set( 'upload_max_filesize' , '30M' );
@ini_set( 'post_max_size', '30M');
@ini_set( 'memory_limit', '20480M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



