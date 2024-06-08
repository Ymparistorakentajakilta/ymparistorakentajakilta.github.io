<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ymparistorakentajakilta_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'D@cuOG!#37at_t)%#,`wu(v4xVU0FFy`H,=OlVJF^bU$&b({:WJLx{H^H7D|.kdg' );
define( 'SECURE_AUTH_KEY',  '+jz9of #V}Ec229gqP7!D##ZFuPzw2eOJyP/Rbj~+=1d(1e,Iay&T2 !8#&lB:6Q' );
define( 'LOGGED_IN_KEY',    ';JDP@gX rlD$Lu%DO:4raj,loA]4mC7&WfKsHuBt=H!<;6:x=M!ITTrT4&~98/52' );
define( 'NONCE_KEY',        '`F1C@?2$? &(x6;2q %#Y/jUQO*|s,~^(}+zV,S0$@8$;670H5/UsqZ|.b:%0mZC' );
define( 'AUTH_SALT',        'he]gQdjLd*G`T1tiRG.>1z2K$%b0+]ex_-vZY~.#d6oz<2:qoCrPChp|u0`Dc0T3' );
define( 'SECURE_AUTH_SALT', 'pyfB)i_XK#GlQpW*0x0d9OWA?&ou!q;,? Gr?KZHfCQj~6*D~e:/|[fxxgtP;L]{' );
define( 'LOGGED_IN_SALT',   '1XNk[`_0r{KQ/{%p+;vdODFGYgbT+!WLe,~5P>/ZG E1i_nUnN<+2y?cKdO()tmG' );
define( 'NONCE_SALT',       '!wj$&|kbG.,<6fvDu)g37C{`Z<|hYSgFS7<=}%~%[{xEVa!mHe7++0V;z*$Xh4c4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
