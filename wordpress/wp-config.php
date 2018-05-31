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
define('DB_NAME', 'doDesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`Ly&f=N]86=5<o5;X:Hy1|^7{xQfRxIwA0;e DTGR399eZI-m~^..F@mbM5f|P/P');
define('SECURE_AUTH_KEY',  'jb*;%/<ec#xuTc?oc`%Br%% l#vpxmSkzx7L(/wMPXFbOSz&ounaCw?>+N7^THx_');
define('LOGGED_IN_KEY',    'S/ZNFY]*}0QoE(J?[ZY /@z SU`}ovD)bus2KB]xac& IkjC1P)XU!oHrhS>@{`Y');
define('NONCE_KEY',        'lHC)D5sICe$eRXJIc+wrh799AeNp]a$YU6|&CSIS$i}D{viQf8;cI<Y_l 1)c,9{');
define('AUTH_SALT',        '.cLJ1W,XY(*|0VOX)9 e ]DSAr,EH^[/Y)r yu8Xce]bo!&rAkl%ZV})[vB4HfD+');
define('SECURE_AUTH_SALT', '0lE=`RT[Kb4U@F,dtCEsK-:Uy/DN,{V0F WEdcD%)pxc5.U4F&|%x:C.8xE/hs? ');
define('LOGGED_IN_SALT',   '{YkKJ?)?b8D|rALKJh?w!f@;l@69E:>^2A%T,cVJ!m[WrA7Q#RZZebn?EW<)Q>A#');
define('NONCE_SALT',       'cteSNd7G_+zo(uE6ioZBhuM-GSSSrz7,S1x.!^w@UHwXl35-ohc{VSaIQXq-F(Z5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
