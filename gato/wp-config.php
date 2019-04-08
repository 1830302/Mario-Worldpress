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
define('DB_NAME', 'perrito_bd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '/(C;I^boCA,Hfn$;H<EhUh%RtO)}F?X3WD?b#5lJ?<E-K`wDIf&p(y&-x~LP=JeU');
define('SECURE_AUTH_KEY',  '3M3]pjltsI-PyND7rNzYjS^$tOy|5@qO82K6b ~jgM*|j;hp4cnR9)|Bc@,QX1hM');
define('LOGGED_IN_KEY',    'EZW=~4uh5/MDgMu)?)4>NUOLr}9rBC.5/~1,+F1R$6,;o4b,P(|%.h>wZ?5vZ,Cl');
define('NONCE_KEY',        'W87x]0.fR*(L,5g4J_6sa02d6rBUa3aWjB*GiA;ffjf[6K}?8?W9~lD?I-wRnty:');
define('AUTH_SALT',        'k)r5H|hifQVwT#q@&/VYWB7Yey!f}B`+ktxx+9z4=/!:JVLGf`rzw$j4PvXyt>mV');
define('SECURE_AUTH_SALT', '~JbMa9^r$tmDHc8MN0q&kX/|gJrC[71S==@YmRDv6Ykb%jb[*zA}igRO&NYM %/k');
define('LOGGED_IN_SALT',   'f=.j( b@~gY}Mzv+5]cl)Jv}C`bqMxPF1j9+NlMPQXBDt,vD}xxBKygmmLnYo=q)');
define('NONCE_SALT',       '0^Dod!pF#d]JzZSV5~19.ZIE{uvY]]kXLO|Wv1jR.znc|]T?n5`tH=aKR1Bf3Jzd');

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
