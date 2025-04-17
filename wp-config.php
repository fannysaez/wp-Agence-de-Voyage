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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'r|~=:3<Ys//Wx?{Lx~2U|581d!TOO2AG??)cf2uGRI-`IQj/r~1KIRoVP5sY6E(+' );
define( 'SECURE_AUTH_KEY',   '(c/59$>xU3vjm05!_{J%iae#V,qyOQ=5EPgSZX6Z55.udI;tk@X_sla}Z{i2sagz' );
define( 'LOGGED_IN_KEY',     'r>c1u`CX]nDk<Eguw^qfw&w0;yQhteia)Y<+f0o0EoV^5X;`@:cse<.|.(t]#4EF' );
define( 'NONCE_KEY',         't.y8d %^z*ZQEC4EW~!H|8MNe^d*rIGGyBZf.00v`:VCHf?V<lj9AvC5(fK/x@B=' );
define( 'AUTH_SALT',         'JXDyG,<=$a;;&zSn0zo2f8q]3Z8qI}6yU#G$wEL._]l[0C7z]q[([3oP<I@o~2<t' );
define( 'SECURE_AUTH_SALT',  '9g57;9>rj8l-;*G<<1mPzGc&*9H4-Y5~o*wV/y44Bw~Yy5 }_)0$Y9KAxy|6crQ>' );
define( 'LOGGED_IN_SALT',    'Q93WV],VX6#e%+$!85-)8BJ `q**+G2tMo-<4htp_+ZgAYy~8#Bmjo8Zt jNMz>T' );
define( 'NONCE_SALT',        'HTzW>rW#u~b8 iOW@ZN7);O[pmF7VfOMz3g>0+2f2#yNUa=t3>f2MwviuSC%zk^3' );
define( 'WP_CACHE_KEY_SALT', ' isd5`):P-D3`,<#7[*`<5GwY/o)F)(E{l< ngYm9Yl/6x:7AA8=,X&,%.<shTvw' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
