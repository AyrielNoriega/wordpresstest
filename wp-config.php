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
define( 'DB_NAME', 'ayriqlgx_wp988' );

/** Database username */
define( 'DB_USER', 'ayriqlgx_wp988' );

/** Database password */
define( 'DB_PASSWORD', 'sp)S(0(9Jq3vp[q.' );

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
define( 'AUTH_KEY',         'nnnq3ixthmcrmqp3sryggs6j1nnddp0f36bdlulldokseiexugayadjrf51qafy7' );
define( 'SECURE_AUTH_KEY',  'mo9c70bix4liu04oes3sbpbwt0xpmb2c67nq7y882pgy9nsbhoyt4nteb0hqjif2' );
define( 'LOGGED_IN_KEY',    'ljz0evlcfzdlg8dwqxuun6krv8vdy6zxmmb0vhz3wew9uez2er0kotcneeauxvmj' );
define( 'NONCE_KEY',        'lq8ksqtxt6xaoeurgb4taqxm1gwlvx0nhkp0kkwlrlqqwk84zvvh9yqgrjdtelpz' );
define( 'AUTH_SALT',        '1qyqtmzvbpjeqjpl0ws0gtc0lyf5f09xjfyrmlgueeiqosx4ytak7yitbdvv7mb9' );
define( 'SECURE_AUTH_SALT', 'znnvxucoei8fv24yhx7nqkpwc10hpt5msyhjci8jsnupbpfeabzboqpi7lfydjg0' );
define( 'LOGGED_IN_SALT',   'viirzkoqg9rtgllefk9f6tcds2kpoell7pt6d9d3v8btor7ig28f53mvjzo3dbes' );
define( 'NONCE_SALT',       'vicfd6dywxuxq8rccmxxkpjc10buiu1xunbpaate1jufz9nwvbmtrszm5fpetkqw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp04_';

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
