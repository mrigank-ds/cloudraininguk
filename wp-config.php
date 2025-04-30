<?php
define( 'WP_CACHE', true );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cloudraininguk' );

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
define( 'AUTH_KEY',         '>Y?#d! 4%AWMMfm(tOsL[&s{TV]L]1;n!oe~b^c<ZUR?MR9i=?g7TKGc26.~>/{z' );
define( 'SECURE_AUTH_KEY',  '0`E7Sy>:=hQ(eV4LrEF S &%8.PUe~aA7_8D[jMF%t@aN>PCw}(e ^f[[}Vx[))l' );
define( 'LOGGED_IN_KEY',    'gDc;Fq<uZOCh4xE!PPXY9qF_]Sc,^lNGY|S}J|2&[-uNvaKw8Uyb%2:t3k#b1MLB' );
define( 'NONCE_KEY',        '/5nkl6%1V:&ti<P5C>V/cdXEj6T*L(*aZ3Wd$:eC?#?qxWtrBvQ~q`$]=UDOKR%L' );
define( 'AUTH_SALT',        'o5q7%<QqcO8*(&~1?_g?cjl5:&*Ey m^({i{Lu;r.fD/rd_R[CFu::es^z(S(dNb' );
define( 'SECURE_AUTH_SALT', 'm0G~RyfJkew9~#%#TU$#lx;cGGL#k[/O=g^`w>[7=6^i`<:W=<I!},#DlKPOFJl%' );
define( 'LOGGED_IN_SALT',   'Rhaq?f,sH/Wc1vG+0N2gTgq1#J>{~q-6cyQ|@Vp48JmG$tgi{D&8fh&{B?B$+/kn' );
define( 'NONCE_SALT',       '`2x(C9P:WK2xVMNr7|#[sP[URQ8v40z#`b39l<de[$yogsnLT@-K(qK41vU$Af]v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
