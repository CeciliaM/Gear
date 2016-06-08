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

 $host = php_uname('n');
  if ($host == "188.local")
  {
  	define("ENVIRONMENT", "develop");
  }
  else
  {
  	define("ENVIRONMENT", "production");
  }
  if (ENVIRONMENT == "develop")
  {
  	define('DB_NAME', 'montres');
  	define('DB_USER', 'root');
  	define('DB_PASSWORD', '');
  	define('DB_HOST', 'localhost');
  }
  else
  {
  	define('DB_NAME', 'montres');
  	define('DB_USER', 'root');
  	define('DB_PASSWORD', '');
  	define('DB_HOST', 'localhost');
  }
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
define('AUTH_KEY',         'xSI}lJkfR=Kd)mqtI+gmVNby]PG1EH_,?mKbiF0V8A+*/Y9&3k<OmwK%38JVAH&[');
define('SECURE_AUTH_KEY',  '7MAvU  /(>)NUhb~:hInXCMMl.b?*cKYRz)<kw%-PJ`(:)vU2k`Kgd=E]Iq[aiXx');
define('LOGGED_IN_KEY',    'qj_vcH(VvqJxD L}v,k|~^OHq;sZ|zK4<4k;_/|oRH),UH3$/^uWBIawcLjKbMRC');
define('NONCE_KEY',        ')$p-|b`J/+{~yZi.Ip>W<!PPU x7Y%.8B,{uzNL>Qk7.(!L@]VQjm2l mt]:|N>R');
define('AUTH_SALT',        'kW;]B%6IdrLL.4eja@l,?SzGlikpM6AlOc]o <ZdHk~+>G>W4hUX~[8/KH_FSQ[H');
define('SECURE_AUTH_SALT', 'za|B(]-Pw4z3LXVt/. Q3(LufNgks{g$8MDHyvAv=mbC3JwEbVjg8QJcT8Pq=h0*');
define('LOGGED_IN_SALT',   'HxtgOa8./=R9,z@[qzvbH[Q1FlYx@>C]+^$4rjg6mD1R}ecJD#h~dqUV$X:G@unU');
define('NONCE_SALT',       ',m$-6iNR6J+xYk=ftWsa~<2zD{RD)WwldlJA5[5=!!F0&Dq|.]l0L&b5[]{H%rcU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'montre_wp_';

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
