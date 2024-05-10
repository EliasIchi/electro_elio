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
define( 'DB_NAME', 'electro_elio' );

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
define( 'AUTH_KEY',         '<X|dqH0l.mwTr>t0teR8c2<idRk51Xb{DJiL*}Etw+yIzrJh0f5DkQ0gYjEy<.& ' );
define( 'SECURE_AUTH_KEY',  'Qy>*ie)fgc8fiFA#{CTCc$O28}V)$d|x8Q$>M`aD*aV])I>iln]*~`jA1L7V7Nr2' );
define( 'LOGGED_IN_KEY',    'Y^=R<>^~.KOZ%_5]:<ua)j-WY9xyS<%cmdt#+mwlk_Rh:P4I`x:gJ4?vc)EXSs`n' );
define( 'NONCE_KEY',        '^EQ?cNAP*f6|&R7r8y6PrG.I/+O#24@Ij<Z>1/6}$bCNDWlSoI|4aK`GIJKC#&SS' );
define( 'AUTH_SALT',        'BJCgS|uU1CbN+o4(&nYgePJ~aHvE}!A:Z:9EWQjFQmGR9>*W0%Rob65|M9,-`cWy' );
define( 'SECURE_AUTH_SALT', 'iR^p53Hj5be-FvsCx41gUE.[~ML(j0#<Q-~RUUjpPFpanoK$M:^m_+a?,oiU<r/+' );
define( 'LOGGED_IN_SALT',   '5Qnmzka2A+>4dg6`7TjBN?;/MKGh+%D*WBw1+uwmhYV#&X9;EFKfHFS$h@Y%hgni' );
define( 'NONCE_SALT',       '7`y`Z+e(^/QV1.N9pgyywdn-;&%&d(0;v=#|R2`KcdXw~2(y/Yd+rpf&8V=;~oxi' );

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
