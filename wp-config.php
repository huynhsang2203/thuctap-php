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
define( 'DB_NAME', 'thuctap-php' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'W9a4ZtsotR_mFf?&/-I?Z3qv5B5$4Az,Q}>tLu%XB?ln({hMR*[a<$@AVnUP9h$h' );
define( 'SECURE_AUTH_KEY',  's4w$>~+Hm=3g<}JizR7Q@hoyA!*e9O?FkA4/eR,Ii{m`zA@ny9S0(bo=53GstDCs' );
define( 'LOGGED_IN_KEY',    'LKrvH|=*b^ZRM+Kj}S1T0m|Mf?Rc0L=} EM,y$&Y^/!_?u{%>b#dIL`kQ4`6G<XU' );
define( 'NONCE_KEY',        'sQfVuQnujw$%MM_T6$ou9roa+Ee=7K,v0qlNX@%gIhT.]-9nhiF<mcL+$<x;xbvy' );
define( 'AUTH_SALT',        'P>9Y4AZ@GBSSSJ*7HdVfE->?R#Lgg0x;#;KVx>NUEVyDHjU?I+Bk>ntZ.?aLd@vB' );
define( 'SECURE_AUTH_SALT', '5uwa%!m*NaVDcf/Zr!=LObdlOpTqLve96N^%DefSh]J[%NX m(lwRx7iGb?77Nwd' );
define( 'LOGGED_IN_SALT',   '#vC:j9T:MX*:Za2E+ub()M&$8imCfhhG0Hy|k3YX_s)933p,7}n>^##.x>h.?3!&' );
define( 'NONCE_SALT',       'W_-yu2zd97cT@pnR_uC2Fxc4L1b#Y<4jxCn^o</yApiIA}p{Ynkb`4C;(alTN}pw' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
