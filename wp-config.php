<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'albasir_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '#2Ud^a7W' );

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
define( 'AUTH_KEY',         'UQ~dQTtV^*#?>W!lK`Q|=K=W%Xp3u]a!79Qul^9sQb<&v/13!JdX^QAwk,2_`7bg' );
define( 'SECURE_AUTH_KEY',  ']v{#!qveJ)kHDzz3F!khf,jU6lgp0M[y,rC*G?b7E$YW10!NA;fGW8#|x)jn}![q' );
define( 'LOGGED_IN_KEY',    'NyyPCulQ[B,41,kh`dDe=z g%VI*2|@7P:bN2f.;,]/`6>`Vj&xQEG<k^KN^P)iU' );
define( 'NONCE_KEY',        '~VL<4_yx:$D>%R8-&H6A0NFdvBQ% =Qq+cH<X{U=Td+#[E3_1.W%BEB;s!rhJO]=' );
define( 'AUTH_SALT',        'gkLX.1Kz[8iE6;ez~lK{i;Seh-N9nY oYjB3S^lCj(#o3O]T8o[S3]WHCq0Z8`kv' );
define( 'SECURE_AUTH_SALT', '~X1+sW%e@K6gP2h>)c*S8tf|lWqx&+]DxTH8(qj1M:Bx~BukcUC)Hl4zXzf_L/et' );
define( 'LOGGED_IN_SALT',   '>Iz]GC)e7~e?KPYkhJ={$9;>u*G_-ziLlIE3w(p_2&8o48wm:B@FU5=AB6YisX y' );
define( 'NONCE_SALT',       'aL-+0RJMB!p*c z)AGjI?NIWo`p!,qh`jtuM/rV7;Xif=}{-XVuC|>/E:(W$PVA2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'al_';

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
define( 'CONTAINER', 'containera' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
