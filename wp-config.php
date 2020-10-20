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
define( 'DB_NAME', 'Astrawordpress_db' );

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
define( 'AUTH_KEY',         'YJnq8?(Q-GEdrcvb0|qD6Ysd7367n6`]|}s%EjlbK}qL|14F&`WD.b@p#6!IcCu>' );
define( 'SECURE_AUTH_KEY',  'VgclOG0~o/ps[ :+&Q:}_fWxw(sD^e=ZJd??K}o9MwtcmsFf7!F2|*n@1HVfSk>u' );
define( 'LOGGED_IN_KEY',    'R<J+F|ZReJu5@`sb%^c(8|M/H9>{^AV;C?m~p(HY@dT*B[.NWXtlJMGuF*r:t[Q0' );
define( 'NONCE_KEY',        '09^,~)aTfln8G_Q!$$fJ;];ypW[s^@&_5S([ Z!fQ7gC?Lb+{]fIQ(/qv<)7WJy]' );
define( 'AUTH_SALT',        ',Hl}PNuQ-#?a;5N.t2gq)luJ*A;njxI{c_hLOx#vqtLy{kyQbX&gZzId.jl4dOkR' );
define( 'SECURE_AUTH_SALT', 'rdTj&ct}5t$c&,,(Wo^f`kjs3Z:_Nxj.C;_13`M{>H)-T}~V#G(Yc5/5^90Odv-e' );
define( 'LOGGED_IN_SALT',   ',&JcET$zjen8,6|L^}lHLAPqARZ N`&]):oew~jyBVf%1Xd;{T0$++R*hru4I4x ' );
define( 'NONCE_SALT',       '1}NAvtC:A2.3,7DgKI+;g2GiXIW3CjRC`c4_UzipJ}-`n8b6,GM09)j*HF){)6I9' );

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
