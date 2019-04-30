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
define( 'DB_NAME', 'word' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'my_password' );

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
define( 'AUTH_KEY',         '~&N)2EgRkx[W-{Y|G6NLb:@/gu$tsm1oL!)R.k[/_35tV~<Te=K%}?y}1SK)2c{&' );
define( 'SECURE_AUTH_KEY',  '24AU2y%l,?h}V8d98[(&{I4dkJDeU$+(4?Q#Hw!p%$BjtN=r$B<87U1([0}J#$$O' );
define( 'LOGGED_IN_KEY',    '_Rxqip_e-era$@u/!O!Nfdj!xb c(MYy0,tc!YHAGW>vWq`^x#k<`wN^j1nnN(;v' );
define( 'NONCE_KEY',        '#B=Nn?{@NxiMmn^s81$rTGbZ)|?#ew@goQ1e(]Y).a[/{,4-#W u;C=zDQa^O1y^' );
define( 'AUTH_SALT',        '#C4Pr(_)gb-sn}!Pe:5.@l<jFN98z|D/]7!>O]H;qu${t_m=}o<CjO>EQD,u`e70' );
define( 'SECURE_AUTH_SALT', 'WAE6;.E&b|?-eJjY7yJ&yQ_9Jl%8#a`C(4p@@Q5uu5sUWBr:&<lTBlODW-.diIun' );
define( 'LOGGED_IN_SALT',   'N?vE3#P1Y-`v 56,`qyW&(sKwz{]Zc,Q3iik`p1eA^-p|Xxq:0a$eYt{d.R$8#kl' );
define( 'NONCE_SALT',       'uo<4oLoZ@C/ScI&Xu,?54S~K}4]s)Xxs@.wD:3qD|:!{/7Zfn/nBwA@H|wr? *z*' );

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
