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
define('DB_NAME', 'alix-platier-favier_wordpress');

/** MySQL database username */
define('DB_USER', 'Alix_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'i5lf#62TBW');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Mt^yQEmka(T2UN3!#jje^KLa7ow7HUUfxdKa7eGTiloLmZY5n&q@500yji7FBMO%');
define('SECURE_AUTH_KEY',  '6TELQ1#9v4YuJMycxw@V33@emC56naVr%kD70ZFo#&2U*gPfvhRZt4Y(Z9uRpxan');
define('LOGGED_IN_KEY',    'zWfyYcqa%lvPQ%ftUCwI)@Z9xtLpxW2L!@qEevJBw1mzRpYbudujB(UxHxp@vR5J');
define('NONCE_KEY',        'aJG3v)zH8^C*%)0N5m3%T5Ky72SeDEyGyXFCn@GneZ7hAr4C#p#zj!@CyI*RZ@n&');
define('AUTH_SALT',        'SGZOsn*pIL92a)hsKt7S0vYlXSxC9CfcWySGyv5RY(zTf%ysWk#b*Rdrt3lmf6X7');
define('SECURE_AUTH_SALT', '9xav3upcus5T4^WaZJ@MGldU&XleEP)eGfbpSfaHgZa77p4Vh@z18ZH^AUuAn8QB');
define('LOGGED_IN_SALT',   'wNt#YbYiaSRDnY4arHqrymL2Fqna9X0SniKkovQOP2akHzUC%*yaOMVy^lfibTMd');
define('NONCE_SALT',       '&9VK^Brb#QOPlR6o(kyRm6r&JyDKD!omaS*S4cJVKGDh(Xis(P#@a#Y0t9y*izc&');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'r5s2P_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
