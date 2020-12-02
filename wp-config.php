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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zu JG*jctXq,,,Zu+.N* IB,%~(yF4I4fc!bVQOp|,u-o,m6V*ONf}r{M!9Tfg4a' );
define( 'SECURE_AUTH_KEY',  '9ZhN Uqou(eq?C;qNsjP-F;t_Q_sw ;*HSjecjnH4dsE}_YhK5whxBh}Z]EZnRH]' );
define( 'LOGGED_IN_KEY',    'k8]FIJej&7h(PpRrSC%P+vC%f11p9K~&eSTK;< r8#7E}-R^N|BB{n&0<$].mC?-' );
define( 'NONCE_KEY',        'ja?Bl21UC[&UHBF;}Q;LpWe!eA=7@9go?XEzPDhG#f`gI]r8@&gzU;]*$!k%}ni}' );
define( 'AUTH_SALT',        'Fpk@A/TQ6_vRp;x$[G2A{O[T}*RDO;~oea-{X#+j]r(@GS cG(N;@ AL9S5_}yPc' );
define( 'SECURE_AUTH_SALT', ',iyCgQV(|cEpV4kg8pEcp-Sd1{6ldIzZqmpkm~gs)QO>+QO*G!yX@l_{?Zh6Z*0d' );
define( 'LOGGED_IN_SALT',   'O3RsUNm[Y9>SD+mq6.B3,qvwwR!;Mxhdh@S$PAn5&q1$,H-di{)MZjc&`DmVqaVj' );
define( 'NONCE_SALT',       '8WT{jSE.nm!6Z@Jx[NE,Ac~BYmyL_@,~EmXus+r,_HG?h@yIEX`rNYW>n|s<6w<?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
