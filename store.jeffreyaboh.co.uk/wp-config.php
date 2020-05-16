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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adsproco_wp32' );

/** MySQL database username */
define( 'DB_USER', 'adsproco_wp32' );

/** MySQL database password */
define( 'DB_PASSWORD', 'y]9[p@4z7l@S@k86' );

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
define( 'AUTH_KEY',         '50nfrmelhbai5nmf220j78btnwnevflhdcvd9jrpqodqllxlwxcwrl1tpv81y3ka' );
define( 'SECURE_AUTH_KEY',  'bbdvftd4bftb0ny3dwsz269q1yxh4a8br4zxx5ipofjcifyajznpnj7axq8zkiqa' );
define( 'LOGGED_IN_KEY',    'kpxfmd7zmqqjhmfhxqp3x01nruiauwuvfuxkf1yp2jgpzulr9zriaw2klb7p6vfd' );
define( 'NONCE_KEY',        'frk7nj8jywyxunawfxe1mbfwacmn7dvkpwbc4hkwreo8k6hw0d0mqvaezfw4xsnm' );
define( 'AUTH_SALT',        't3o2jz4jtsvl8wg7vhpzyod6suetynpf9ikusvnlkx30ufe7ewobtc2qaeztmowf' );
define( 'SECURE_AUTH_SALT', 'uwjgh8ubbbrrzjqlvubyebxidrnefmlxeoi8nrdhvn9vnavnqbgwgumf3cyirnbi' );
define( 'LOGGED_IN_SALT',   '4wksuphwvvalsda0pabw3fzfir2pkogr6e4mppis7r3emqiioq2vvyhwqp1pqkl2' );
define( 'NONCE_SALT',       'x66cn3k8i5p9daeivho0bsd3il47ygqcejpccogcaxp8ml7elmmqwipl7wx7i1gm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdv_';

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
