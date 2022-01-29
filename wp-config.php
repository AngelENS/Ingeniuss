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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ingeniu7_wp63' );

/** MySQL database username */
define( 'DB_USER', 'ingeniu7_wp63' );

/** MySQL database password */
define( 'DB_PASSWORD', '048SpD3.[1' );

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
define( 'AUTH_KEY',         'ctddvrikmte0np1mxbyterxumxvqrkbuhbq1itezylqiyk5vfza34bftd1cbnttk' );
define( 'SECURE_AUTH_KEY',  'u5yecj7vkuxjmpitxd2bsymb2in6uyllikk2hzcptn1exnq5mh8rur7klyi5zta4' );
define( 'LOGGED_IN_KEY',    'h2mggnnjlwnpjib6ulv4aopalwjq6hv1mvda4tjlllizfcmeqrh5xt9mod1evziy' );
define( 'NONCE_KEY',        'twxavdnvrwsymp2qyqwmpb6jlrnzo8twbiafl9phbsl7tgebjm7ovaawnw3s96kj' );
define( 'AUTH_SALT',        'r3jahq48jhtnoiswcndpb4mmn2haosdydz9gopkry5lssk34dq29zgsnmkox7fjx' );
define( 'SECURE_AUTH_SALT', 'jkhaxndunrz0sxczcwttqfotzvpx9r9jbt6gzfwtamg5r8tjspc26jsnqvmo9na6' );
define( 'LOGGED_IN_SALT',   'uadovv0w2kufawxhcsmahae2k51iby1hak8azblmxcuwhbp6snsuntdsluknaact' );
define( 'NONCE_SALT',       'wxvly6roi7uauqdc1qdgx7kdixd01rjfutgbfaelnsiiyyr3mkkp9ycfrvlzxzom' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwb_';

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
