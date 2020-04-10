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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kzyhcink_emistry' );

/** MySQL database username */
define( 'DB_USER', 'kzyhcink_root' );

/** MySQL database password */
define( 'DB_PASSWORD', '(q2O#6z}#8^U' );

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
define( 'AUTH_KEY',         '5ctwyipffklnm3wefes79z6l9gpm15ra3lkpbddd3rbc9kfgpbdxtuwbbfaancpr' );
define( 'SECURE_AUTH_KEY',  'gmkmf4ufzhggrzsjfnycqb94casoccvx6im1zvekmgdey2y92hqmgcsfgogjm4vu' );
define( 'LOGGED_IN_KEY',    '2dcjjk9cwboshtqwacaahkn4fgvwqemti8vvkxanfm4io9srlp6pc41x2dl7itqf' );
define( 'NONCE_KEY',        'mqtmemxurgybxhade2swmlzf3gtkya1nal28nvichq3cp1nbncdkt9ndfrlngwin' );
define( 'AUTH_SALT',        'zyl7kf9mzcx87derwk3o570gu8smsb7y5g9zya1xksxzag6taqfh37nssun8rpca' );
define( 'SECURE_AUTH_SALT', '4j4eezja1imknmw79nhk140npr2bvc9lurk33wlf6vjevhzlmzs751recs94fo2t' );
define( 'LOGGED_IN_SALT',   'ulquulghzjm9jlx2aot8uwcptsrcr4erhfdvh2acwopvbwpj6vwgwdthdhyfrgfa' );
define( 'NONCE_SALT',       'seobubw0wp70mymdjzrapvascadtiyx2szeoxm9zm7639k1cyr2jugdpqqvyojvf' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
