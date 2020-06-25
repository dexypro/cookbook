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
define( 'DB_NAME', 'cookbook' );

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
define( 'AUTH_KEY',         '|iib`:Y+:$rLqD7]7bl6SK&BLwR4AvvFl>pr1UpRjl:``D}P!)Cd0DavK*dVY2.w' );
define( 'SECURE_AUTH_KEY',  '=p;$]u/J`L[!2;@=q%ss }gVq9io|f{ec1Mx8hxqCc5X863b:o>NN`1v#C#wgG;X' );
define( 'LOGGED_IN_KEY',    '?s7u}B Q{*UPBrsppj,1BWwC]g*XWY#b-4.!_Vb:i/cL@GFGY3y!6H{M~^f_4gHj' );
define( 'NONCE_KEY',        'UqflM_}t_1QJ#/ dg$[@4?+2m>%dP2jXNP}}#_5nWSC^dp{oA-NPSaW9G|Lw!Gq,' );
define( 'AUTH_SALT',        'd{rRiDb`7+Ym^X[TP0f9S^p6V%EEBguMR9Q?Il;*:w!$uq}B;]evWWxN2$b*/kk:' );
define( 'SECURE_AUTH_SALT', 'l4GH&9%,)3,`TND8-*dpk@_|L/SwnVrgNM.i3&}I{B{SZkf/ Lk>^eGaOu8FW~7{' );
define( 'LOGGED_IN_SALT',   ')Q&we=[W0q9i|Xu7E_%sKK>jnTC%q,bhWaUB=nW6Cw~Mt4Ao,AwIGGkJ+Lcy9|1>' );
define( 'NONCE_SALT',       '->0,_i6)ska.e~A@>BR[ P&`W1H#KwcZkF4RP%Di@r.Bt=o&#iYp^_n<O8]Mo~mj' );

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
