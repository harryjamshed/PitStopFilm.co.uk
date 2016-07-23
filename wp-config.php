<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pitstopf_wp434');

/** MySQL database username */
define('DB_USER', 'pitstopf_wp434');

/** MySQL database password */
define('DB_PASSWORD', '2a3eS(-tP3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'n95axchx5dvvvffr8wvelxevvguzvdxwk3knzxlqquqtmlcfguk43eqztvx4cpeu');
define('SECURE_AUTH_KEY',  'wrkt274p3kzheysjmxqsnge2zdlavgsu8oe8rquvyebslaszeraooxvdogirir2c');
define('LOGGED_IN_KEY',    '1qrcbc80f8t5z6qplhzxsas9ebdcmsbm1pqnfath7u3z06luq91en1sjpoapsiz0');
define('NONCE_KEY',        'oyftkcs71senwsgqhu4gu8ekv9mjncbusy8abx2ejpyifqj0afskxhcm5qsopc3b');
define('AUTH_SALT',        'r8fp00bokjdmmawnmlggqlykzfldopk1rvigzmr9btviilriz1qtzygdvhw8jlmu');
define('SECURE_AUTH_SALT', '9ptp4carw7medgsd1npc2vtlywmt5a9fx7kdjai34shx51sojtrtktumojwekx7k');
define('LOGGED_IN_SALT',   'z5eevebsaq8ym97oa4pjr6lxquwsrahbjpdannqcdmatihvdwizyawlmmek9nal1');
define('NONCE_SALT',       'iyqqocbc5fa7ciovm9nuimih9oeqn3dx1l5npaxfppsljcipx6rahwf3hegwvufg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '3kb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
