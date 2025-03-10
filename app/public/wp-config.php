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
define( 'AUTH_KEY',          'pphiH@NU_F]Vs`Hv5&-~-iBvV{(3N~]@0-GXazA1@qBte8s(d$ng(Vc<?d[}W0N/' );
define( 'SECURE_AUTH_KEY',   'F:41q7,|Iv:tF%h=7F8TZAkj++,l~jfm6mOu8kT64o@Xl]o|L@<F&XOqv=F$`&Hb' );
define( 'LOGGED_IN_KEY',     'C87J&6!pVFP&}LI0x5`yC2DT&#Y=s %*69b;x}TP5shif3g.(DVd{w6aj&(EG|-m' );
define( 'NONCE_KEY',         'qf,H`6r3_vun&4{k;>2;PKA5KLLm9LN^n32@>8=h4``7QGyp5e3M,|2I`dHb]>d~' );
define( 'AUTH_SALT',         'I&9@p26F-3-^:F~j.n/oi8kTHfJAZ?N@X5ld,ku4HB<gu55C?8fk]J6atxG>2x=z' );
define( 'SECURE_AUTH_SALT',  'I,eAS>POpyMjDcV~1h%k{q5y416(rfPb:jY6N+q80/u)hR]g7rGn2d0ySD *_y`R' );
define( 'LOGGED_IN_SALT',    'wvli&75qB:{^ibE<uo?a]fwaaQnmTB.-#*EyR86}r}t[T<n5PNc9x~-;(6AQu%##' );
define( 'NONCE_SALT',        '2C}nvA[@{)Y8M5}o?$h0GsCT33s1dw4Q*=w.56>.b;r5B)IpM!iJ=c@D%*oP_H!7' );
define( 'WP_CACHE_KEY_SALT', 's3l-?vC@Y[MnQ;(m9Z|2;&^$+!eB/{wBH74_#W.,l.UbWU`MpC_:75pXMX=]bl+m' );


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
