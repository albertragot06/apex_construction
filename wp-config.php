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
define( 'DB_NAME', 'apex_construction' );

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
define( 'AUTH_KEY',         'x;S%,@,uJ#|6.EF~fY(%hof}DA^hQv?w2PfQ 9`ZtxVm Za;Ik8S)T4(WFXFhH<x' );
define( 'SECURE_AUTH_KEY',  '>D+2*6wOsm3O;QMN_<eh(x;38pH@|1L+g.d?QB6;$NNo(I4gQWc+44Wq+PGDF9aA' );
define( 'LOGGED_IN_KEY',    '>F?RW`@j)MTquDycmTxYk>ca-_P}&E+?M?<2m.f{D4x/pL7 tIiAe%^v`/R@5J+^' );
define( 'NONCE_KEY',        ']|8<oozD+Et?sgZ/n-*ju|e=mzg)a;ym7oL1$ZVcm;%+8Xq$@}gZ _;WMr;lSg=L' );
define( 'AUTH_SALT',        'EO<BS~HtV S,`@2n8L{],*Dq0 HYS*[8nPQ^FHo>;k@#[joL6+jgJF11kwtG&$:{' );
define( 'SECURE_AUTH_SALT', 'C9Y[&IhAf^e)NsI@}mjlPX)8o/8CKMnaTo<(;J%F@td;gHV/ hx.e~)k?E@#jLVv' );
define( 'LOGGED_IN_SALT',   '%Mp&D)18g4Gqq*SQ!,6$[sC/^.<(sL6yIDP,&mOpahJGh/5lJm|*~#A)_aB7}4s>' );
define( 'NONCE_SALT',       '&ms:(g6LpjC:|>7mJ{dH~kWyTlxq-Jjq!li_-#e`J1O?<|[f/EVRbr^_]+@S(LcY' );

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
