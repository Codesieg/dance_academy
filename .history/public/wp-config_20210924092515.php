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
define( 'DB_NAME', 'dance_academy' );

/** MySQL database username */
define( 'DB_USER', 'codesieg2021' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Celia26500!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'u890$=i;QP8S D)%}yVUCZ|^5xlwSy0|lOoLOJnQiC99z*2kuaHPFL]@993cflRx');
define('SECURE_AUTH_KEY',  'rE| 6vgtbKQk386Z$JB|(@g ;G@Ab5~TQI9/+tRP2t3vk7Oc-1F+y{(i%4m$tEG<');
define('LOGGED_IN_KEY',    'V1iTpeL`|mRtCn:s?Ev4FTPw&jc<[:-!?wjz4g`kba!@RpG{ne$+mA-k6FWbv<3}');
define('NONCE_KEY',        'Va 9(H2eOtLpBo`#oSSGOR,X.;B)I5v{g!=;|n5=v1qg[c(c1~ZjgoQs`;uutG3R');
define('AUTH_SALT',        '4vgQ~;]BDgsCg ^y$-p4A}68B2_[T+sEyepAQH+l_j<.}>p.rg+)gy,)Sh34!PU<');
define('SECURE_AUTH_SALT', ' }3Nk3*@uCPbut~?iO~pd(L$s|xso6}!8 SwD87I6#n{YMydR:J|ZF)/eY_6$A?%');
define('LOGGED_IN_SALT',   '|c2wKHhqs]8&;_L&OekE#!o* 3JU|a1z+KBr4s0a$9dI>qDPAZ$o;VR{AK4XT_O/');
define('NONCE_SALT',       'egh#s;:$R#^W1,TN#m=Jh!_Q1TgnX B1?He{g9lDiG|j-=Ms-,!7LuIo[C;,`p_X');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dance_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// url vers la home (la racine) du site wordpress
define('WP_HOME', rtrim ( 'http://localhost/dance_academy/public', '/' ));

// nous spécifions dans quel dossier sont installés les fichiers de wordpress
define('WP_SITEURL', WP_HOME . '/wp');

define('WP_CONTENT_URL', WP_HOME . '/wp-content');
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');

// on peut installer des plugins/theme directement depuis le backoffice
define('FS_METHOD','direct');