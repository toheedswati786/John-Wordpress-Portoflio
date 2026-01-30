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
define( 'AUTH_KEY',         'B!m]sG*SEiKSm{ZDHuKeUySY[vGFF7oX+@FsY$[h>Mt[cLsD87lT/|YzussTZ <8' );
define( 'SECURE_AUTH_KEY',  'yip+qc6|:yN18i|]]XLgz-?+:Pv__-_5~$9pm/0_,Q26<j@k2-S+Tqkt#a)-L!Qc' );
define( 'LOGGED_IN_KEY',    ') 8U}!#Y+3^>GFGGI.~Icaf+Kq07`9zlp]#nm9,alAd@Kgh.!)f|1)lsD=;>1c*#' );
define( 'NONCE_KEY',        '{Lqe2o=HwQr&NKYuJb=Yi(5J@|ILAHI.@m~y/v5*RQ{E:FCVdG@ 4PtV2=DJGv&z' );
define( 'AUTH_SALT',        'tEf5+_;pdYiBxR5URg?|`9d>T&B60QU}OFxP5BU7G]A6ieXA9%]k+Q@P`tqi*b?W' );
define( 'SECURE_AUTH_SALT', 'cstRw8ba}s70KJ*Z7@Svd~ L& Df_EtcJy5iDDdp)&t*cJPe<!~~D03+bSGz1n68' );
define( 'LOGGED_IN_SALT',   ']@ @@(M wgmR(<%viOBo)L}*mL~U_z~|fmi]VRR.G:<?~ZsfmA2<JWn]@V?J6$)C' );
define( 'NONCE_SALT',       'Vuf1IDwiCh}~:SOT.VyCk~k R4D?#(IgV5sX;*nwF7P9Gls^C2w!)O~iO]{3(;o<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
