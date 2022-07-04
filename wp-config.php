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
define( 'DB_NAME', 'wordpress_hk' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '}(PQhGKG.*(I@d$YpVeY(ruZ^qEUw+9!&&d(Eq8xx!#b4r,s3CkHxVX>4M~bs,%1' );
define( 'SECURE_AUTH_KEY',  ',S%LDW5OkMMs5cEDUWfi|107|9-qNn%(%WE#LJnx{}++Fvl[VQR)R3mdMo:1`tA+' );
define( 'LOGGED_IN_KEY',    'GUr*At`q`l&Gn[=P$fy0OF0(2K=L5U-|S%;ZBQB(_Dr/tg`d`m)M+2 O~WE%][Rl' );
define( 'NONCE_KEY',        '1L,%Iy~QMmK1SPE:C?B)8cd^S(?x^{|VC84W5BAhLf8/z5eU6Xnc,%!=N~L4s>i9' );
define( 'AUTH_SALT',        'F[yq0nJ9y.SY!oEu5r}{t8_0Wp+/yeHiMpml@WFZ&-&A3[85TLze`T[p*yIm +{/' );
define( 'SECURE_AUTH_SALT', 'RbILusUANB/jz6,K|5><y7QH)(v:?YzthgXd (v7F2(Na_rmu]:>1jke EvF>ZSO' );
define( 'LOGGED_IN_SALT',   '2NEc7Tj*UP^j7=!xlI9gm<=iAwVy.ptIJ-8cXR.RVh3|//1&7?FS/d?* eoK<5tW' );
define( 'NONCE_SALT',       'oBXb47&3B,*0]C6::n9i,Ap*b|^RGqb Y8b{3CY@P[zz~6v.bHB5:XG*l..H_QD#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hk_';

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

@ini_set('upload_max_size' , '500M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
