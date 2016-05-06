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
define('DB_NAME', 'olivolioexamen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(1Z|zQtDUxK}b-{kAz.~Z,)t7*3|lv9&tualh)[((5Di1<u5o!fBz>q|,.Xr%=+Q');
define('SECURE_AUTH_KEY',  'n0q_*LsR<jrEX!@+InW%_NJNhY|PqKh+YI:wjh<pnt=$-C=WARCpHK}K,`qske),');
define('LOGGED_IN_KEY',    '`iGj|cpHBMDmDL>]?]k8~2)UDY7j2D<&r)6i3(*C>695%ZkMZG8ss:V-=58U(5H_');
define('NONCE_KEY',        'TP}~ROX}4#;H8N&DV=ZV:NK;qcp(-^agzwf)R5wVTix+dm}<}-MC/$Cy+Et}:Twt');
define('AUTH_SALT',        '+E,IX|P6o@|0R%2G^J,jiRUy=v7j:R-~c{&#a|z #u$v)q?3!lb<A|vj{)(OLL)V');
define('SECURE_AUTH_SALT', 'D(MH!crZvq4AilgkYg?Gu|7dxuar(XDB-Qr{2~okx+4`s_^f3Ezh!dc~8vUPF1C+');
define('LOGGED_IN_SALT',   'S92LXM|HC}-t1&wh.IWP~|lzv*m06sz(+~pBXr]Ra`&#v%-=f!00jU?>K`YVAX>[');
define('NONCE_SALT',       'J7{A%*d:|em+GLP+7dc^PO38/XMN]H2/W5J4dg#bKWHMztR!PUK9~$CvcY+)HNp6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
