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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@kY3q|vOAYWu yW)B~.yE/PydvRQ+l<>b}]#;-H@-A.-Q&)8t|-=_@vdi!vrv)~e' );
define( 'SECURE_AUTH_KEY',   '*=4RWQ*cMC(S6h6<*OrT,36<(-yYHBWKx5~Y^U`+nS5XCGK_{PpZQxejabr$@l#=' );
define( 'LOGGED_IN_KEY',     'l.@%e$5T}J `ksL?)u1R%Sgmuvi<]hUJV$b*.%@,]-/Pg:dZ5{`?`vH_KJXeoclT' );
define( 'NONCE_KEY',         '<?W&<CW}@fQq $>q<zVS#?L@O{ 4:ScwQ]gS@l7t;vkQF(4UWf^EM|@4R+Z!l_?I' );
define( 'AUTH_SALT',         '7Sj9=$Mw|tb-I{E&Zr%V:I&Ue(sDN-_3N ,)iXugv|<%.k=pMPtbCcWPy[|)$bL=' );
define( 'SECURE_AUTH_SALT',  'oEIYC<Q(T#<k&L(u4qP<[SlV&lcmt&E&o}ulYru~Tv #Aq*Tv>c?:(5O}1n60g9.' );
define( 'LOGGED_IN_SALT',    '%?3$>uvzK!r(oa2u88:r5>q$MU ecV^N?9+mHzYVM!CxGSIVAcNu8*[6.C}X^GQ&' );
define( 'NONCE_SALT',        'P[0BCyNSv[;$^ly~^-NbspjQk]!5o,_e55{ 6#OaaD8[~~ksDY(:[E^z#W_Lq>eF' );
define( 'WP_CACHE_KEY_SALT', 'E>r@3CT,OD:%u[_vlXiF5:WTWUC1HK;J N^gfeBY&r|=Blx2O;V_T<S2P/CObz m' );


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
