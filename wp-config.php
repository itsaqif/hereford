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
define( 'DB_NAME', 'cleaning' );

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
define( 'AUTH_KEY',         'tPDkZ[%_}@o+ieyLlFvACX,D)1UvFcW<gKZuWE?;U?NH]!#RDN(dh-qcl=]]TNy+' );
define( 'SECURE_AUTH_KEY',  'z&&_?O&*r{k}.rnjf8;}SX{q&Es3HQkzyFhSzm39`]ewwa+-(QQ5V](5R_c$pda^' );
define( 'LOGGED_IN_KEY',    'i*$m[%-wad1KGc31$AT0O45j3sbGe1ZF&YN$47Ix:C!jmi_A^]w{[M&u?tl~fqnA' );
define( 'NONCE_KEY',        '96=N]IPXg?jIdk0=@~nVdzv$;`9Xr<h[|pMNJg+pud_5~V?t/6;S Edd(_,QIOq&' );
define( 'AUTH_SALT',        'W5)*>D=9|)oVqu)9L,5.C)+ )Jdu@)0^gjTpE6y^P(?1E)c(gv$.b8%b=M`90P}e' );
define( 'SECURE_AUTH_SALT', 'yKr)iP^PbO)(Vj-coXSq@b! 9w9eUqJ+>S_Q|S/8+TS}rIz1Yz0=~-ZDY m=qcI)' );
define( 'LOGGED_IN_SALT',   'pU|1B/S2aWEfzY&@R_;MmqMYj#96y0kHr}2)+!O{3EP_fM)WnV65~;<J&vg ~}eW' );
define( 'NONCE_SALT',       'TqYM$Y}k8Laui3DmQA:KNb#uY,gvp;O6jF2qeyESa_L-]dq!O>`^Z1L16?`kU.&e' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
