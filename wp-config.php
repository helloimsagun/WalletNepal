<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'walletnepal' );

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
define( 'AUTH_KEY',         '(cR-p#8yFEa<x}-E2nd+kcq*mU?9u^%E]7cNV8foijRQa7T_kFc%o{Q=}oRvX?1=' );
define( 'SECURE_AUTH_KEY',  ':[Pc3c9j#,pa$x}&Z34-O|Ua=D_&j%Tq[-m9H~2uq94FRW]/PhGhmlE ROYLD05C' );
define( 'LOGGED_IN_KEY',    'n{s1O}:[S&!Z]y^+?@0dx3@U%b.jq>OjScbU.NP0fh;QzYK_U|HiPsSX}&[|yz4v' );
define( 'NONCE_KEY',        'Eg98kf.6BqKiI2sik.+/7ub$Hq~+%?WML/e/@Rn)x=@gvIZ%~c+dFV3X_T,c(jjR' );
define( 'AUTH_SALT',        'R._<]8mx|UW&0qXm_OnmS 0_>4K5~|xYq<xs {RqP%my[wd:.|h=)1p4mHg;3.4b' );
define( 'SECURE_AUTH_SALT', 'F&Gx`op&Hj1CM>slf[7=;1!be.f<eRQ$7K0p52{?o-To/CDpGS0pgf#w}GOcx1~r' );
define( 'LOGGED_IN_SALT',   'XZ_qz7W1nGp6Qn[@]Gux|]b#3,<J0jKhf+M3mL|?pcp]2R>(d<Z9JVnnu`cLF<SQ' );
define( 'NONCE_SALT',       'eNpdNX%WUj>qA@2x@R()_XzlFF4@o9X{,6T[T40lA/8o@=m%-pBGUUjY>Fg+@i@(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
