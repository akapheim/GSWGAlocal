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
define('DB_NAME', 'GSWGAlocal');

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
define('AUTH_KEY',         '#!3rz]Sw!n<UF)AcC-0X$l8u[l^N3Q|wa0C@3.yy`|4*i3eh0w|P+$@x)oNYQb3e');
define('SECURE_AUTH_KEY',  'DMT+R_p(Yjdk CLh0{3~[[Ld6Awb+Au9m+m*ty$ZBfK|hU;NuC!Dzq-4F^v|WC2U');
define('LOGGED_IN_KEY',    '200|3ejP(4+hj)Y<g4WmnVGJXAfyuQ{P<ud8e-|DexLH&5bgHtk|~xv$8Bb%+*`b');
define('NONCE_KEY',        '$ C[Sf(Bw $8g.dj=a:bjOcnWWX|hc}LXE>mekbpYxg<U;cYT@,X>S|.phOwFKRV');
define('AUTH_SALT',        'z^O)(CnWd&.<|`o%FP$.Fw;h2:CZE$Z>I1oQ0u+-P+6Ou;b:1v#x-[,N hPk;{7;');
define('SECURE_AUTH_SALT', 'j FXBl(-4OG--Nn7T<oKRUS#Q|z-E:)]fA]#q|&.=]o($1WsPw8,s]Tx?!Ua8?xj');
define('LOGGED_IN_SALT',   '3<@) c1Qa+ORLoq<te~hv#ahHCAE>-#clVsTb!0W`aYMVzo|3t~57uL:$^ByP7f=');
define('NONCE_SALT',       'No38j}_9%15<-(r1+#zY5TFg{t,;9?P}8s^d=}-V;-#8g*uECWL}}i<=*8}^]<Bc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpGS_';

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
