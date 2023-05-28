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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'JoItJt/PyH+GId/zEheVrYRhzc/X4XyT4nOR69F/XD8B+Z8DRiPcYsUOp4U5qLB4ZjQMIkiBflyUauS/CT2Qzw==');
define('SECURE_AUTH_KEY',  'ZUbjBB1aP5D1zoJFLPTyBciqhdgXUd+rWS1iVMTkeX0Fyh66sXves+P1NrFcP87v+0NiPG5lbCoqB+goGlSRpQ==');
define('LOGGED_IN_KEY',    'e2131+gcU9NsicUA4IagGJM8aptu0Da3yKdJ7Kjm+kCA4gIOGP8QraJEB813S9/RPDGmWsjzWmMEDAYKi8YIUg==');
define('NONCE_KEY',        'VsKiLLGYLZ8N/l/ddhhisjwTxFJHtbTS+E6JpR3oVWVPSGA/7RDSRspPJXq/DolG21YZaBNKB4GtpncocdtHtw==');
define('AUTH_SALT',        '/58jL64spOd9/yOQ8DasWA69lYBiLYETNb8MDTwa/Jeb5C+5jFWlOudxcC7UZQ+tdWbJg/Po00DhpS7aWKh7sg==');
define('SECURE_AUTH_SALT', 'fMey7itQX/PClYdK65NOZA2FryWojvdCacXhX6MaugzZogJRNcT6AE4RcZMUl5XQ9yhuJI0/77/ttUz0OqCxNw==');
define('LOGGED_IN_SALT',   'pGxEHo5BXlc9BQZcelQVMPN4EvS6y8hnaShd1HFLNoWudVnBv6PVRqhUqsUqHJaYNVQ4IvVgCW6ZxD3Dal0DPA==');
define('NONCE_SALT',       'JpFgluYPs03dWV3DSfmvbPgnBkOlMAPXlXMdqGoYdgYzPg/JfGQ8hlvOrhKrzdmsPj624rTTvEl0oCMfSIIkNQ==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
