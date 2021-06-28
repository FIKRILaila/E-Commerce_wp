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
define( 'DB_NAME', 'e-commerce_wp' );

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
define( 'AUTH_KEY',         'i?V1Nghu%AjM>},t5>L)4q2=+Z6GfmK>HqagnK&f/!FVg)}s[-ukE*)o[B<2I,:v' );
define( 'SECURE_AUTH_KEY',  'xR)c;7O;7p@(!Z&xdGUF+`gGeps5<#2V>2u?0SO4UT|gBD{nU&9y4<oa$xWD;TvW' );
define( 'LOGGED_IN_KEY',    'i#XN*yoURE=18mK|bS[VKx!<(`BWeA4)`WOfQ:~4GpSGe[4r_ziCOYnCff|(U/pm' );
define( 'NONCE_KEY',        'xMeVljY529?V![I@/ID@m_Tdsg-g}CNRM.5{&K7T%#0UqfNPnN|/c~+9aZ}T<AFB' );
define( 'AUTH_SALT',        '.8/FL/xHsg,10xfk,ml-M^~VaSz13(|bMk*klNtPbYb,Gtq4$-&|X9L$8FLg1.L,' );
define( 'SECURE_AUTH_SALT', '2R@ =~v<BO.b6$`O]g:G:T_nm_.1xj=Hvfu765f53_+F!p^NK=TNdfb-:JO6c61f' );
define( 'LOGGED_IN_SALT',   ' 9e|!L|68$(u>Hjk8:RR4Gv$[Vv?m@)fdBpqr8cHww{t<FGOSYlN4ZSy^?[k~?!O' );
define( 'NONCE_SALT',       '?x2LU@a<R50q4e&SV]]%Su] F.L|w5, z-^~x4lUp[YThcxS(jXpP}]N+e%>1X4R' );

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
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/e-commerce_wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
