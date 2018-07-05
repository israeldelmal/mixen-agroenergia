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
define('DB_NAME', 'wp_agroenergia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'MX~RkU/F@ipkaS`094G>LV8!]Za(WNAXdwoPCL%6F}GKV``ugqVw-I/?Gh_TdbZ2');
define('SECURE_AUTH_KEY',  'b>q4$FWEHD]3D>c_~{6:+Y)Cmg1^M(JCW9`+6&CB2SMrU1|vX[K8Iu+K&coZ?b1_');
define('LOGGED_IN_KEY',    'Hh*7gobN#O}]{!9=(yP-~yZQvw8.?gS^BQSck5f8J!{9=*HK_5vHF`5l3fHy7`VK');
define('NONCE_KEY',        '?#=.!:-O]hwdS%jVP,`xCD9l>117`XC(:6eS[@n7_20v|.54q2p~!v^CNtSco%7K');
define('AUTH_SALT',        'xaWqspmPKkFM(VoPdrm=Sa|%pQOqWsdQN$l$&Z=i>xguC>H7y<Ub!z gANuXUBa5');
define('SECURE_AUTH_SALT', 'F|zta8vQFI)0kSOr.@Gp55hmt<K`+g>WrJ2coHs^$MI7q,K|maMXl] Im-KD}m(h');
define('LOGGED_IN_SALT',   'iDUuee-7XYaI=^}fE !lYvD=qO3|<Y_=@8*av7HWT1@9q2F09}:Yo&Iok0dSd$9:');
define('NONCE_SALT',       '[?.yrY9_L<+t{O3?H]T{zK^:9739 *sg{bO9;^q3a0N@d[.:)q23t1Q$eU@F`oiU');

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
