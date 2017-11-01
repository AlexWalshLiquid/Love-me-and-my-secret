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
define('DB_NAME', 'lovemean_aqxt');

/** MySQL database username */
define('DB_USER', 'lovemean_aqxt');

/** MySQL database password */
define('DB_PASSWORD', 'p8msi46wsw8xh7si');

/** MySQL hostname */
define('DB_HOST', '10.169.0.70');

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
define('AUTH_KEY',         'a7CGqPcnAd8tH8iWBhWJrVS7UGKEPikA5vjnaO8che35mDV2tGPiRoXKI29jZ7Bs');
define('SECURE_AUTH_KEY',  'i8iJ0oL6bwcj83JQhDLP65uoqvjZdje9dRv4D26Catf1fkt6TDfnIzSbf36tq9gq');
define('LOGGED_IN_KEY',    '8trEOxrQlHqdwcJaUKlG3ta42kRZNhDaNyd1jHYksbWtrFKQJZAutwaL53LxIdRX');
define('NONCE_KEY',        'V6OCyETQ9w2t17kQvn5cOYWi3L8VrRnyKukPk69YP2U6VSjvLyGsFKq7dj1GfVt7');
define('AUTH_SALT',        'YwKMa3dDQ8F9UzfppvC7moOq28VMm69l8VtqOzQZ4W22uShuXoia56jAIil17kRE');
define('SECURE_AUTH_SALT', 'b0SpXZMOKQGpbUW5T6w7wZOg9da9lwLL1XtBZWFrNkH0A8v9qlESY06rhxDKCkCd');
define('LOGGED_IN_SALT',   'hQ3UiRDxYdGhP3DM3Xo4nKRxbZFTBCIpxem3HW19Qccx5K49UmXYc8D2gcSRo6lz');
define('NONCE_SALT',       'G6dLNBbPc5tGMHhbKBCipV9tAsKDbd3IuyzjlEQDRMn1IW7Wdorykph6oz9HMkbf');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sotf_';

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
