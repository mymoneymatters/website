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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('REVISR_WORK_TREE', '/home/mymonnjq/public_html/'); // Added by Revisr
define('DB_NAME', 'mymonnjq_mmm');

/** MySQL database username */
define('DB_USER', 'mymonnjq_mmm');

/** MySQL database password */
define('DB_PASSWORD', '89s(Ul[S4P');

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
define('AUTH_KEY',         'n4l1vkcej2evyqnjkh7hfpot7yhapomxtvjo1bzo3mwrqqayph16w7hshvhbgxni');
define('SECURE_AUTH_KEY',  'ti8cwfeqwzbjk5f6pk58upwh2u9i5jbr120skssrg4v3uyfrhfcoh6dyggeyd83r');
define('LOGGED_IN_KEY',    '2qsfg5zprebhyagt15mj6mutsivtxcursgvuy2btsfn6dynj3jqpsfjb19yhnjc3');
define('NONCE_KEY',        'w4hhpr4oascaigwdjxaom225abbqgmmmx5l0mahw4q2jawcyplqkcfatdzidl467');
define('AUTH_SALT',        'eyw2vnd0whmbq1pdqxcgexjucewzdbfc7atqvzuwbpazsx6j8ujomfr0jzsdbj54');
define('SECURE_AUTH_SALT', '4mdl2wv1zivi4xhxjud7nbi0mo6r314mdfbjzdiqwzml5e2yrgj0l2epvx8ovt5n');
define('LOGGED_IN_SALT',   'xruz4cvpxlilozeeqpe6uydd574uxvgmma51tjhx8arocdcvozikmdy6dtofa6lu');
define('NONCE_SALT',       'ckmvfobzftngjyilhdkr9uhkw1i2vnuql9tzc40addr7oftgqh7uns3xzln8iklo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mmm';

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
