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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arvixorc_wp211' );

/** Database username */
define( 'DB_USER', 'arvixorc_wp211' );

/** Database password */
define( 'DB_PASSWORD', '6.91-S68p8' );

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
define( 'AUTH_KEY',         'ht7bl0alhsnledrdhomse84c1r23je9d2pnckn4grzkqw6rnxelwohaxmgkwzbvl' );
define( 'SECURE_AUTH_KEY',  'w8iawvbez45fladt1ekk9q3fkyij618tibfrc46xag4q2kjbavewtd8zsz9mdqvz' );
define( 'LOGGED_IN_KEY',    'vxnpmxydb2yeojrb0ce4vwnksgg7fho288htng9lduag4b1i3u7jprokpjrbjntb' );
define( 'NONCE_KEY',        'jqgsf6a8hwnsz65qjlsxytztpafns0bgkkvzsswargrominllf748rfhut627dou' );
define( 'AUTH_SALT',        'glro28lnn0dnxovdnxljmxcuxqpogg2pi6ifvjskyqakasqv5hottusg9sz4dvj2' );
define( 'SECURE_AUTH_SALT', '1am20mbxzdglphy8rf6ifu1ppagdsbjkndhjhokytldfavbzc5u6xmnjlxibclyv' );
define( 'LOGGED_IN_SALT',   'ranpqep1yfqbtfcauuy2upbi4f1hnb3zj2qddhpg4pcvurvv8c1nd5sqqmdj66uj' );
define( 'NONCE_SALT',       '3rk2yhytbwqvhmsb5pi3xazqgn8frg3bquxfuom8n9c8sivagxgedrtgsak780vp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpbw_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
