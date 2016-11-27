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
define('DB_NAME', 'hbrcdatabase');

/** MySQL database username */
define('DB_USER', 'hbrcdatabase');

/** MySQL database password */
define('DB_PASSWORD', 'H8r080t!c5');

/** MySQL hostname */
define('DB_HOST', '68.178.143.47');

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
define('AUTH_KEY',         'd[<B^Y]ei3dTWw!gwRhHRTAcnA6N? I u9CD6PJW;GZ[ L=4v5rqJbASk72s*?u)');
define('SECURE_AUTH_KEY',  'dVTO7HB94x%#|DydosP=sc5RDN]97}tq)Wt-zu2zc{JV^)]#Zr4+;7+7]*B3Ac&v');
define('LOGGED_IN_KEY',    '<*jVD5UI3gWVzBVXp{MY%!9n7#du>GebH<yE-k=Z>^|w)]4QG~FF{]RB/abb@o-;');
define('NONCE_KEY',        '7}TH{W-cIE1zpS1U(Y H%7A(@{$]X-,I|GZN`iA^ENJq%nX6OWI_>5Tyr0)sWU:B');
define('AUTH_SALT',        '2Ds!@G7bpF`qW`^@x7*n|@$x*+a+N^lrAq2$kBvAB]h=|e=K}eFV^-SR#u1ls8:q');
define('SECURE_AUTH_SALT', 'Au//nKI~=/72(bmU;p65^BEV18i EnxG}UD!rM}{aP>Sl/nV*H_UIfu]Mx >G}q~');
define('LOGGED_IN_SALT',   'YoD 7]4?N7,+T7^.ZCE^K&B10q{tvqP;jhs2R]F5+XDcmD$7!L*uK {Y4s#z^b`}');
define('NONCE_SALT',       'u$r)%Wr0GDNCv~%b/F3D:?<Y:?XT):S%wD<sRHH@R+ CJYc#s?P]*/(H4 -P>@`#');

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
