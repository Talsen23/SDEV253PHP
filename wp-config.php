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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'xvZz#nk|82l6F-{_QB6J/O4}X`ZAJsZ93WL-9f(Y=;<!rb`F]%]4YZ+ !BdX~iaF' );
define( 'SECURE_AUTH_KEY',  'fTP$D[7wJeCMSL+HLGglxl%zAQ_P`3Q^g#FZL$ LxcEeM^Qj<5=%F[hBy6M!HlFO' );
define( 'LOGGED_IN_KEY',    '6~QT<OSB=-/rwo^U+QG(mqE!L!S!4]K1d6ME`ASyTRa<C3:,?llI/B}r^7/:wE;N' );
define( 'NONCE_KEY',        '[B61j{bB0Yvm&Fz8=1Ni}x3|m_9nY/A5Z1L0@*;W2;q^fN?Yq2TXM%8wY<M 3+8A' );
define( 'AUTH_SALT',        '_d#QZ{lio#@51>T+T[%;+uKdmT=BUd-@uJ(~mK~6sP5`lj}Vn7NN;B4LIjfxwqc^' );
define( 'SECURE_AUTH_SALT', 'ap[aEO5$1b4UiMN@wuINGW,Btf11a7[4N)-R;H4vo%7Ir+&yHDu]UU$@Ar0ko_<-' );
define( 'LOGGED_IN_SALT',   '/<9VszaAPZF17{(F0I+-7<h])B40bao&*R>tYF_s]G[}~!d{pRE7mKebbK&`=14a' );
define( 'NONCE_SALT',       'Qe2$l!29Bo:MzGLZBCp*l66X4@wIT;i->0S9#T,3{V,_$Uz%ghuT>w>^bTVr@Ld9' );

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
