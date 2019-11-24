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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'constellation' );

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
define( 'AUTH_KEY',         '_Q@B:n0g2l5`e#+WkM1BOM*;G6=Lq0a1G7a+8gfd&sYX>F{L{7URB>Mx9nV+#RZt' );
define( 'SECURE_AUTH_KEY',  'Rv@$0SlyG< XcF:=db8 woK:cih$+>b$QaKrE}GSc30T`F[jRXlA0|Pxb!XI1H:e' );
define( 'LOGGED_IN_KEY',    'M8H%N8G.^>tSS|:^f8s}Pu(oA*Up7i^26%02@]I5(;ydat0~ >HQ0|G*D4g?*jjv' );
define( 'NONCE_KEY',        'RX]*{|edwY[IMN@tvPN#!_2h+v]0Y~G%c6$%<>i@1M<z$qQA:qnE++H[moQ{2Z|o' );
define( 'AUTH_SALT',        'tD3>%KAelrJcV+{q_xl!?CEYzPUhyh(xRh3[$}-!Cfa2 OBi/U$SoN)DHmUiryv;' );
define( 'SECURE_AUTH_SALT', 'u3#kON]6-< Z=qQHeS+}|m]rzUKV*/.@%NYF6A]U^G03{Z!,&O71`Dk&8-eb_tM<' );
define( 'LOGGED_IN_SALT',   'B&R0k@|tzYG{-&bdMi_MTrP. 2.M(:f1#Db<FU0;X /]r,HcKz= !GT4/A@7un-h' );
define( 'NONCE_SALT',       'wLh/YYw^7)Y|;dKG)SL4RUV4S~tab`rlw0+LG~dHe,<7UXOBF;aGHPe.iQ5 Bu6w' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
