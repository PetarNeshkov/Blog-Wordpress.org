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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'C,gfJ@OdG $!~@/b2(rs:HCVX<rD)X-,[}Y< QThbx0EV{vn$kO|@iIMt8JTJsH ' );
define( 'SECURE_AUTH_KEY',  '4dAY0T:y2z{}<BxG1UWoY%7,h;C$T:m(>JimR/UGQ$AcG_N8{&z:x6TAc.;eseua' );
define( 'LOGGED_IN_KEY',    'Qm3{7o|;UEHXguNa1+Jz*w8A|N)^pCV8D5X.U$y~~x.ly!RP.ZYA~^dYOxR1|=o?' );
define( 'NONCE_KEY',        ' ELXj^sa)ZiomNg^?d(`Yn6H,T>RjKbH3i>4Y_}2$&0&xlQo}}v$Ta3BszaAh3%x' );
define( 'AUTH_SALT',        's&A_U4O*[Hp)T~%>;A52We(oJ<UwkTCD$K_Cj3Iu7~ (D<fzGo?jA*5Q^Wv1b-oR' );
define( 'SECURE_AUTH_SALT', '#)jk<bL 3ck=ctBSNty@^DH^(%A:Ts$Kc&O!cIi),iUIszfiGFhZ-^NH,o~kglck' );
define( 'LOGGED_IN_SALT',   '.zokp#{.otS%5+R[t_iOSxu8*IS&<|[^jj(DEQ]j?&};xRZBjO)[dxHrnQsG0FD4' );
define( 'NONCE_SALT',       '4Tuz1pqil|=}wJ[c89U[#/4o3!QT5E0RPhgzP9,*A3RXrY{v8Cm6oRM6,OGkUv%_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp84_';

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
