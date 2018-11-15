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
define('DB_NAME', 'testpresDB4ocoz');

/** MySQL database username */
define('DB_USER', 'testpresDB4ocoz');

/** MySQL database password */
define('DB_PASSWORD', 'wNcny9ITfq');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'OW:9Dx#lgzwFJJlo88Cs^UQY>v@JJc@2e*m2WEXyf{-#DWHi+x5O0gkj37[Vo}>B');
define('SECURE_AUTH_KEY',  'Ha<6mw[KKd!W_D[SlWx]#WdL+*PLe1:4kgz#s5ZGscIv7YYc}>BuX.E]XjQyI.M');
define('LOGGED_IN_KEY',    'v8gz4s4ZGs}ErB$EjBj3v7nX*P#W_M+E{Lx:Ohd!4_SaW#[ok@77Qhdw408MmT$7y');
define('NONCE_KEY',        'fy>g}U0g>Ei{t2L7Xqm6EOt#_SWxDS@NVR!|GGKK-@cYr{yER7g,r3qX*P<IrX${{');
define('AUTH_SALT',        'k0bn$PiBU$Q;+6iPb<uAIEw]#WZ[x]W5OJwN@F}8lRw||Unj3BAYg}}0fxAqHtD');
define('SECURE_AUTH_SALT', ':C{IX^qvQbDTt.SXIq*6-OhRS-5H-8>7rw:8w!XqETe,3.2+]HWw6+6eCZoCV1G-[');
define('LOGGED_IN_SALT',   'wp9SsZ_kFo8v1d4g0o4yQ^I.BnUv>,m9Lea$.*LT.15hO-5t5aHt0@F@w[!z8>Ru{');
define('NONCE_SALT',       '|Y!G8dV-s0BgY$v3nRvo},JBkq$A2XPuY$u3{bTn;eW+t1~D<LDia*+9G4ZV-s0');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
