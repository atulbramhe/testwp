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
define('DB_NAME', 'testwp');

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
define('AUTH_KEY',         'Tmi{([8!IBr2S-*=b,fFex9i5/Q*0FP<5aAFbdgBi9o{93~Fu66h{Q2V]C:}!f8;');
define('SECURE_AUTH_KEY',  '}n]+kxA|M(T5LG7.]E  9Sh7pffh7/75v8BUIfbY7W66!uv~MuE=*a9}>)I_7s?8');
define('LOGGED_IN_KEY',    '`ZaW{-%Z`kRh&G[/4D2Dsh+?!*cDr~i.[&!<tpTljvRr czCDVbUL-GFF+>TZKl]');
define('NONCE_KEY',        'u4i9;_qNaCN+I{S71z(OWwt%QRxm.qN}vzn_(*-MI-taNFRD2}_Ge=fs5N ;3&{W');
define('AUTH_SALT',        'o6bc/;kQN.K+v[*HA;x166Kj.`@qq|(EXsI|{x[IymKK4zvMj#zzKf.S^0CiN1kD');
define('SECURE_AUTH_SALT', '{Z,1=+I1`MuQ_TOE+#l_fB0u?di90FQBgxJzw9?lriz`8J.f{hCvt]l{)<Yd_>k;');
define('LOGGED_IN_SALT',   '$DoA|1s>45i7erC+es^gODb*]iVT4s89]G3/HwuWjs[p&QT8GtdZh(]?9{!Nzd>a');
define('NONCE_SALT',       '$v%=)8,o @-HUQqj?=3SL;`j9OumErje,sV/hcdP-W|z}=4DM4&^e^`Xgb*P2fl:');

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
