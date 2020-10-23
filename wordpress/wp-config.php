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
define( 'DB_NAME', 'ybaoson' );

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
define( 'AUTH_KEY',         'p<C}~q}uv|Q7Q%_2M@I+WMny0i~KdmH~F33A)k6C/vRXKE&&}c)? e_#+,C[=1-r' );
define( 'SECURE_AUTH_KEY',  '{[LHv(PHVX;usGdCdBDKZNp.zqQpXk)d[Ejg#vb+YxEI4=bo{q;(xh8?v ?#3~tm' );
define( 'LOGGED_IN_KEY',    '2pSTuJBlu#{p:+=?DiQn=8-W7WxzMohpe6aq!)fJE*s]R!OuD9YZv|#^5W>403E3' );
define( 'NONCE_KEY',        'RQhWY*n-;2w%Ui$.KK#*&/Uuum(Xkoy_Bar6QgQ/0;;<1T#QotAteB5jQF*-;2tJ' );
define( 'AUTH_SALT',        '`Tb^%_LSC1`3$w4E+nPPR,4R.0!b|mpMfi0FphObp:E?PR|MPZO}#bfO<kK+H]($' );
define( 'SECURE_AUTH_SALT', 'e75%B8y9Z3P~UdP@6%fMR.W<BW+c5&0t){/&dNFdmib4M!UE4_)}e~qQpQ,=^n}Z' );
define( 'LOGGED_IN_SALT',   '30<U}`FQ8Q{nc(K_f>Bix+;5$o]XJ15Bk;P,7-ifIrc`QW@#%`}OXZQkl4dE4ob%' );
define( 'NONCE_SALT',       'K4qLl;u8v6PjKBb?v95Y/1PhD}yjQs+1%=XDNXzNI-$qE+Y+jP<JYQ=<hndSTs&P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hazo_';

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
