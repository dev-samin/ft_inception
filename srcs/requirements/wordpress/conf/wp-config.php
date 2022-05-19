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
define( 'DB_NAME', getenv('MYSQL_DATABASE'));

/** Database username */
define( 'DB_USER', getenv('MYSQL_USER'));

/** Database password */
define(	'DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'Lj<NOCu .+jp-]~W88lQ}Z@|NfDCKoVS|4NM8-~-0+EWfX3roD9(s)c(bTs@AtFV');
define('SECURE_AUTH_KEY',  'cNXBWW{s#yU)uFxfrLbE^P~(2po-~Lv96u>^4f ~ydze)|rdL5YG a2#iu^C5<]l');
define('LOGGED_IN_KEY',    'L>^6k|klSKh;REfV}TD|Z|KF1lfsr7r<L4VPh;YVsE[Ay1lo/cjuq]IK.u5Fgqqy');
define('NONCE_KEY',        '9?fE;{&ggz(gUor.>@W!>NDg=y.tPyK(w1swFj}-|#PM-FA+}.9rTnhN-4?xD~D0');
define('AUTH_SALT',        '?Xi{<dQNun4ru#4M>,q>hD8cdH2BkY7l|d;|z f<O}coy;AF{#l2%mw`v8i]Nvj_');
define('SECURE_AUTH_SALT', '$sM+7Lx6B{y~6+!:P~Am<:%; 7 fyA|$up:tlH!p`MF`~KV?}W)0+qdgXb9lw%m.');
define('LOGGED_IN_SALT',   'UI@U)Z1f^K~sUi&#THyok6q+ow`fFz7@+xQZ,Z9Gz#YreKja*f`x8P3f>,vEq98K');
define('NONCE_SALT',       '!~j(A0e>Jw.CE${_-1<z{xU?0l[+t;i8tmEfwgC#&=CY|/YqIFX(hMzvL2lzcWxH');
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