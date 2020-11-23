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
define( 'DB_NAME', 'habsontario-wp_db' );

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
define( 'AUTH_KEY',         '(|!au_W-iI4XVcRg4U}$0$[~7V>4sa/nQR[0:+[jZ_T~-ZvWY#~_rUDK%)[LgFl[' );
define( 'SECURE_AUTH_KEY',  '7?Zp 9)NkxcXS#t[T>H-]_+ioXS}9Cq.e*<E`b$RZu2114= mLk?7MPLfft|gj`a' );
define( 'LOGGED_IN_KEY',    '=Q#$1{H6DAW4`TL$K[x5JgWF/Lgy!E%UhE#Z0v[{(Hx<TkiXf)zANd_IU?V0!/Jt' );
define( 'NONCE_KEY',        'P)$#o=aLJ.s0wmq9jge/<U~_WftD^(v41ARvQ|a>a3=jKM)([Y3iO)*^X}<V!D]{' );
define( 'AUTH_SALT',        '5`^@oJ1M4sr9$@Y(xneO1o|jKVRodKN{$7E:-l9L--E~a2@>g(1gc8,au`&At@,R' );
define( 'SECURE_AUTH_SALT', '`{_I9r#8>~zWOpp86ov|;t; CO`z-0;mS@`.U<9]ph6,+y{$$IxI*jhcL6H:ok8$' );
define( 'LOGGED_IN_SALT',   'en}Pcx}&LVd<6wP?R])%mJM%Jn/SS+|A&7]LD&0 E/)9or=Fp-Ld+q/BJk?r)>>A' );
define( 'NONCE_SALT',       '`?kH#]~`y>OHTq<ybe<TzRHu{Uha!UyT,B}dh*1hJKYmsFnn~5#Qz$L%EkKnSjui' );

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
