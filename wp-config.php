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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty12' );

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
define( 'AUTH_KEY',         '>;yQ#FTX`/n2w7 T%felR0|X.T3tcY~SEB!x^( 8Ca8wV5-_zRMI{78NQ0)#D@|c' );
define( 'SECURE_AUTH_KEY',  '/>;9T%m@`}XIZktNHI&f1J <A]tz!YUK3wCG_O4m3w5H65tbI*H0q|Llfe62-}7/' );
define( 'LOGGED_IN_KEY',    'q6R^o.m{P UH;D7_kT6NT:KdK>S{kC G}a.~DFfw~%ncCDe?0J~?5v+]=3+h`:7<' );
define( 'NONCE_KEY',        'o[~@Fo)y9YJb;ob=bFqin+M%^v~6qW-ncPCw&%T(O&Zr.$t.=j@[XThsKYbH8yU{' );
define( 'AUTH_SALT',        '`e}pO$6:?/jgDjIPu<lUi@pMNVy$~[w_f|z%l_T/c-yk~dklXv;VEaW>3*t3^VV!' );
define( 'SECURE_AUTH_SALT', 'Bbwb|w}=[r%Z>#1N!7$m&[~vs@7!tE-N_Ud/%e*}+qSKj$iP5(^3|DPF<7CcRv$}' );
define( 'LOGGED_IN_SALT',   'y;QF@pj-E|UHuG|bwa7cnqE[E-my2yEm`;zVC0v>_|*L]*,s_qSMo<p.asDI% I&' );
define( 'NONCE_SALT',       'tMMe#,m*62`7&>>3R9^Uha%1M}Z]E)$G^N$k-Ct|S.,A?zE,gJln>^LWWflY,uLc' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
