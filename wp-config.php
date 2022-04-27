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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',         'vxP8oq=0-goMZp>6MV]OMZ&i@zdEsi6&W;H.0N=}h8Pt=T5n!5~tSfK}}{j3(}J`' );
define( 'SECURE_AUTH_KEY',  '^ ;pwrd?JO3LNKDQqA^%U|I`3EEz,C<4FS}gL-LZ6[zn8md,8]Dl:BMeuY@f$~-e' );
define( 'LOGGED_IN_KEY',    '(0^riK94)&K8Yycs/xW#|WtgK!*z+,-5|# LO#393Z$eZJTK6ie[+ | noA~G!nb' );
define( 'NONCE_KEY',        'LMW`SDQXYdd7pslR.9;UoO3+bO*e-czJCiAIk|JQl)AfQ<yzF`r(Qgzbe{*<V@@e' );
define( 'AUTH_SALT',        '&6i{wqI>2B^v#(l1#f2>Dy%9NgRMM2yqR-sKDeZgM|t2WLY)`Mkb>)d,^q>_ V.6' );
define( 'SECURE_AUTH_SALT', ':U#V| jNQ[BQJ|W`NpC)7$ppl5{IhkXT1Zj(r)gP-UI#C|u#53b>0xQ~uB 6/Ylo' );
define( 'LOGGED_IN_SALT',   '03oMk-[oEQY@kA(Vhbc9*HWR/Pl`JX:W0BLzNTu^LJ.|@VwQJ?x9]3t1Sz,r<w5F' );
define( 'NONCE_SALT',       'B[v)F*id 3wSK>08f1HW|pE-% _}H3M5U$1lop/v1Qkg?V-GnMf|7bCp-71*&d0<' );

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
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */
@ini_set( 'upload_max_filesize' , '128M' ); //set this to a value > than your backup
@ini_set( 'post_max_size', '128M'); //set this to a value > than your backup
@ini_set( 'memory_limit', '256M' ); //set this to a value > than your backup
@ini_set( 'max_execution_time', '300' ); //set this to 0 (infinite)
@ini_set( 'max_input_time', '300' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

