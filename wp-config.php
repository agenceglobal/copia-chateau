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
define('DB_NAME', 'chatepi550');

/** MySQL database username */
define('DB_USER', 'chatepi550');

/** MySQL database password */
define('DB_PASSWORD', 'QgSh74XzkHEQ');

/** MySQL hostname */
define('DB_HOST', 'chatepi550.mysql.db:3306');

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
define('AUTH_KEY',         'j2QkvXyDZiogH0m2R3SFpFNh5CzgEd88eNj2OsaJJzOpLoJqwmnEj3fXKTvV');
define('SECURE_AUTH_KEY',  'hLmq0HMOuUqYOwBzkNNWIeCfaN/5T08kstUZcVIPkPB9NQyJoSFJdGiieW4y');
define('LOGGED_IN_KEY',    'fpVREUfYjwkTzzQ2d3kt65eJ5FR8Dc4U11UTXCcpUqWPdTjpiS+V3d6biMwp');
define('NONCE_KEY',        'HIAyo4gAbHQNSaMIr7E622v0p/SWon+BZKrfMDUAv11ZUnaQmaNhmnmw0v7a');
define('AUTH_SALT',        'G74V2O3EBb3jxaswY3HJvyQwLb9gRSVWfA9XTqfqwoS683ogtnGIA8epYvtf');
define('SECURE_AUTH_SALT', 'MFq0pHZ3hDtqmQwJVQAwaSkAsbhAbKmPEXKOFETN5qVbyQaZ8ubbjdspGXqc');
define('LOGGED_IN_SALT',   'hhkeyzaVfO4HhJg5alDz/CwMdp7pAsE0k0231GFPCGLAjYO+3g6jhQhCvw0W');
define('NONCE_SALT',       'Mc0NjEjMHjTk3SZ8qWKYwwP6VIJL1lNIjMXSMo9RjInuIOv7Mu0wZqiyz7Rv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod843_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
