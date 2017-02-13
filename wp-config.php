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
define('DB_NAME', 'testlending');

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
define('AUTH_KEY',         'ZnpR];Zr}]MW0C,LvI9Mq{?UzY3${lC,e[rij?niK=nr:pEPBI$J@o{{8s1<V@{?');
define('SECURE_AUTH_KEY',  'mWVy>J1]B7b03t/-,Z+Q-q7G-pdHl*cVhbH15Tw0S0gv6!!O:~MX9c[DC2;sjM{ ');
define('LOGGED_IN_KEY',    '{e6GawDFgVW6nEV4S`(_ks29feS!esHVkRs;}$|lq#<1Bk@eI&xu-g Wh_)d<ZD{');
define('NONCE_KEY',        'j )`f49cw|[Q,DxzSE~Q%$S|9`XxS7b@0KrU1OBa]x[7?;Z4q1QY(9T(c.at]/}i');
define('AUTH_SALT',        'G|%X#b^i,v[$P[kAUJE:D?`<~-.9fL]fNeWF8[6US:.aUM4|;N;26=)/%nEUW=} ');
define('SECURE_AUTH_SALT', '}KMcwb C48%^;NR?)7=z+rR#Nxh0|nC%6A!lKd%wRgE^%`cvcGO2/WabNg..p&.a');
define('LOGGED_IN_SALT',   'Gscv5MHTuPp+brISUduZ{LF9lB1=8k<a4l/=0*%s7SRvv$%Y oLAAp/M!Lx3W_%B');
define('NONCE_SALT',       ';pQ+kz4.?;vhQ%<JzWt{7EnwML$pu,yFYLEb(%]K/xu{-za}Ua^3jSm:E#f~`Smj');

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
