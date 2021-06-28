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
define( 'AUTH_KEY',         'y^)9hMBcP0baHVb=5Z&dbbL|G0!duE7m/@dzS UY<{^7FH&4fYCdiMJqnT Hiek]' );
define( 'SECURE_AUTH_KEY',  'Yq%s<br<tkE>J!;M3&v[F?TP#gv!uXTBn7X]*[AoG #?=t<9|_YEQ0-il+fXJIRg' );
define( 'LOGGED_IN_KEY',    '2,$Ea,fk!E$-Cj@&`XNCHAqJ*{a,ol)oxfPswU?ObfOPm/JSC$|aPbFFqe?j2PO-' );
define( 'NONCE_KEY',        'B<(=67g6 4q<&Gv5(P@v6Sa:=,p>=Xhx9mS(pOa!q8~[*izkl/=9*{4MOu4>sA_3' );
define( 'AUTH_SALT',        '~<qX}$n0SRFn{7;U9)X&DTa/f<6oiNg@[;ZLV%iZ@vm4vqpgJqTOI(]rGjPE?cL}' );
define( 'SECURE_AUTH_SALT', '@!4zXHnwhF!sIT]HCYa|TwVNb-1V`FJ?9cT 3S;oVG<0,TtU(Nj~N_PsnR|7tVuu' );
define( 'LOGGED_IN_SALT',   'zCe(g66n7Udef}]g(oJv*Eu8R^v<,<9NZ{C^h$UBIV8AMW5-OqhV>KmnQa]g})mE' );
define( 'NONCE_SALT',       'x{|b|(3&:xi`j9,/3fkIcwckYhH3r>^mO2aP]DYk[(VB2?F6Fp2)XicX{E.E4QPs' );

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
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/e-commerce_wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
