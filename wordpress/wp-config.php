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
define( 'DB_NAME', 'digitpayz' );

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
define( 'AUTH_KEY',         '#YW4GodMjd>npth$QzY+UpP>Zb6+?^@tY)EsRrYIS{n_bA`6}LtmMEyyG|;uB[SU' );
define( 'SECURE_AUTH_KEY',  '5ddg3HZYq^4{5DxZfjH0I- [!) |HsU<U(YKq+wRM(+(Vn6:q*heS8a6R,T^`N j' );
define( 'LOGGED_IN_KEY',    '?Yzf--?qm2G8,z0oS*=;?$yMhq3Y/YQDEH6C61$DrxC9r~b*U&vITCt0W@3]kgFa' );
define( 'NONCE_KEY',        'FUIOG$gV-=_Om*3?4]f&,hI5h{Lz>^R&#xGPrppDpet}>c%}lTn^tmXp>F0ly-Z*' );
define( 'AUTH_SALT',        'Owq&,xH*NI8tBZ18^ JMGQ=Vgb&HB?+bhws X2kZ;v[:# LO^Ppz8D_)VfSNTg H' );
define( 'SECURE_AUTH_SALT', '1N9k)N8.m76/BdH&/3D1~YIAZde]}L=~`;,[irS]UY+KnP(n(%H(Ui!Y]S^W:uB9' );
define( 'LOGGED_IN_SALT',   'k0>PdahAJ0YxvP?4l@HrpoKWr#,~PUq%S5]!OL.{qC]+6TbcKBNTR0;02TK_`234' );
define( 'NONCE_SALT',       'e]H`(~ILp5]!oEKR[x;aBxfQ&rkV@[MP|7Ek-Y5dE[O/rs,RvYM82 U$S9%}$LK)' );

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
