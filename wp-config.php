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
define( 'DB_NAME', 'aunthentic_campaigns_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{7{R$e)-PJ~ 6B?^Nw/QuJ1xy{Z!^,-O|Cr_=9F<hTa$ovdmHBxy)S9ez/h:nc2M' );
define( 'SECURE_AUTH_KEY',  'J9CPXUPuc7^WUFE@KIt>p0LOc-)D5RhF0Le0f]q{]G#V_/mV@a?V)nv%C?#i],RY' );
define( 'LOGGED_IN_KEY',    '3pt1k8z*NP*H].OZy5W*cT=q[)qUWoM`@z]V8T<?pP+Z`hl:BLZx/=1Pbfhd4S3O' );
define( 'NONCE_KEY',        '&ikdV7m~<YHt;RE6.?7u!&xn#V~u}9z|t,{*)#3f$GVAA)diB<!8&#4;CQ;g|mGS' );
define( 'AUTH_SALT',        's0[ XVqX~HMG`!S)z>aaaL@-%SO*(h-FutTH.gU?Qr,Mh|[gW%,T.TD$}YK=jq*t' );
define( 'SECURE_AUTH_SALT', ',YuOfg/nkPaJL]or>lKRP3~NS !9&{eW.h[/O)2~wYCF.zZaDJF$[+B4:vk PWHP' );
define( 'LOGGED_IN_SALT',   'LKAKhXzGZJ5,KK6v<+H3b-t`0/}a%4G~UTK;CsO^7vYQfHU01%|~)&OQ@;_JZHX]' );
define( 'NONCE_SALT',       'C?qvabh{eVYi^Os.`9Y=~$Wt9RVJ!YQC(HQ8#FG@gb.vzf@-)X&}_#J180v;)wW1' );

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
