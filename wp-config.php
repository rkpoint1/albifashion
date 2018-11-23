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
define('DB_NAME', 'albi_db');

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
define('AUTH_KEY',         'crnCLra>Ap~S~%sr=A6,7E0P;r&z(,YnQZ%bm:Q<DGDTw59ml_|aJ{lhlR|^jclI');
define('SECURE_AUTH_KEY',  '%BW?rg9N%@4~svtz;n:37{}NK:]xy@n&5P<6#Qo;VI+cIRTl@?n!+wG#<-gkE,(<');
define('LOGGED_IN_KEY',    'c0s?Efv[_&62wx{<)lMARV=SF5RL(,aih1d!|W]b=u%~,p+c|mQoHhQ$%6m96~TL');
define('NONCE_KEY',        '9B/Sl@hn;&|%nA#LKQ|OInu~$U6/P`4Jw8v>XJbn-_[8B|>_N2pkq].XI;&.bbGg');
define('AUTH_SALT',        '2X:Bs}e|#E<pVOMB{Z(IU gZV?r-uVxtn2^fd7(]r4E(1_G:]P;C`ERglSzp1]oj');
define('SECURE_AUTH_SALT', '0wC2T$yJFj-BBn}@X4q}i`CSY8&-SGHj@iMvkg7P6@8Q[Q]F;4HU/a_-{3an[hqW');
define('LOGGED_IN_SALT',   '5U5|c@X$+pu~tKrhcjPiaO=Vw=X>Sgl2~z^~{VfmOl.+7g<2rWE~``D#pbMBiT)A');
define('NONCE_SALT',       'Qm6io:!f!e+eL=/::ky[*n0dJ+XXE)VQdFBE0SX{YMLzi0*rRX_bT>gtyYf5`FgS');

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
