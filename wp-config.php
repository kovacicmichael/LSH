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
define('DB_NAME', 'LSHDB');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wpadmin');

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
define('AUTH_KEY',         'm~vy8</44|olmr`n*8D>W&0|DbCvx`ljU{W_=w%cp(^HiWn}nkug5zVi+<y[>SPF');
define('SECURE_AUTH_KEY',  '#^Kj@yP`v}6k[RZg6AX5y$[ImA[O).a9D_d$>&t^/aL9qC--`LWQ@ x8E:3fLEwp');
define('LOGGED_IN_KEY',    'uhoD?Y{juz2t3<),uzW: oHFBV!PDscBOb.yD2O|u(vh54F1VIz#mtb,2.EzK[2=');
define('NONCE_KEY',        'wbP_p#IA X%v.[?dXif>5XOeW<cCz[5+i6g,Aajod=d.X3dP]kJwK+_,9R=8<LBP');
define('AUTH_SALT',        '~]c80 :A+B>8I6Kp}t11vmcsh2v<}cg(?SH:y7,<86CW 6I8:U[}~*LK<tVl{ch4');
define('SECURE_AUTH_SALT', 'Ld.C!hX:WY=l:mt2S |`$V5)ykke/=Sd|5ZkY*%L?W@~v@%&tX_o84>RIPxU7oeZ');
define('LOGGED_IN_SALT',   '2usC+`=57vRm4:LkF4.XK.`RWKR40x5phfufGN-skjnmw;A(oyi1BK;>Km SKM-n');
define('NONCE_SALT',       ',]#cYD[!&@$J*uHL:+}3zVnb{aYe^|dWID@[-Htb=3-0UUOtQ5P+uI}JEMx.Nxkd');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
