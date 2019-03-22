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

if(file_exists(dirname(__FILE__) . '/local.php')){
	// Local database settingss
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'learningwordpress' );
	/** MySQL database username */
	define( 'DB_USER', 'root' );
	/** MySQL database password */
	define( 'DB_PASSWORD', 'Welcome1' );
	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}else{
	// Live database settings
	define( 'DB_NAME', 'mohits97_universitydata' );
	define( 'DB_USER', 'mohits97_wp241' );
	define( 'DB_PASSWORD', 'JohnRambo$1' );
	define( 'DB_HOST', 'localhost' );
}


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
define( 'AUTH_KEY',         'NK%U6e7Nw{8I*H3(f3aA&ahfV{%qs^208<{4,qA2griwgL$LotF01/N7a87Ms)`+' );
define( 'SECURE_AUTH_KEY',  '*iKhvO*ptS46&/K6O<pZ|6gy`~+sEnMfe:*2V]5}9{v>AmP%lU/s]+LuFyOgBPtH' );
define( 'LOGGED_IN_KEY',    'qD3mXI?WI?5(0VW^K5XZiOf#@ t6~u)FyWT(yD}@~tOovMBsLjSq6u,~xv4oMs:q' );
define( 'NONCE_KEY',        '4$D>X-oPi.^hC^6/*=?2q/n-qm3yJh0jhy-YBRu]T=ANZDM@s)ME`z}5Mh|iY_(.' );
define( 'AUTH_SALT',        '46)#GX+M|d/-hYP]$u(O$tYK!CEDAGRp|SoL0agn<,++2i@j%&oCf?iQ]--Aj.Xu' );
define( 'SECURE_AUTH_SALT', 'Cx?S= Z3H%`)3wYP4ymvS^F7Ro=Z33MhYcH<4,[bP<0S*@|Ba<u!]$?_`;XBb}A;' );
define( 'LOGGED_IN_SALT',   'MLm@[G)?+Kub:$=6h-4,dXcfMV}y8h^<3LNE}c`0pEZEB&zEX1@yOkLu^m:,tq_$' );
define( 'NONCE_SALT',       '~ht{.,7*MH0)Bsw}T1/H_q=j?jBr__^h,3BQvjl^cXh8@gb)O&zBVX):}ux-jidz' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
