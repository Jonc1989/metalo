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
define('DB_NAME', 'metalo');

/** MySQL database username */
define('DB_USER', 'metalo');

/** MySQL database password */
define('DB_PASSWORD', '0dbbbe6b');

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
define('AUTH_KEY',         '6KsLLssy]<w1`Dekv}OQH_7Hx*2n-@}h fl~Nx>S3y(=l:XCL@S#ym2@-d^4S1$@');
define('SECURE_AUTH_KEY',  'L-q} y,x]1Ta+WMw0[(|Q`,ogBV:5i78}v?vh9uvCBaY!]Wae%r|FWO?bJ{PkG-N');
define('LOGGED_IN_KEY',    ',xYDh~aR$X]r#%k}kef/D@Olelf:]oieg,>ahq?TOQ,G:2cp!7CHz3Oa&J[4<]VY');
define('NONCE_KEY',        '3YrC#LIP*tpaUs,uVc?Z{Hk[MLLa~s54&312V><.G>cUAw)``MVefkLS{_QvW7mg');
define('AUTH_SALT',        '?]lLMg3 ?r9-bftR<{PEo|!$G]u)s0&{afq%,`on|GzWq_;&yKq0C,lu(dm=UAjE');
define('SECURE_AUTH_SALT', 'KE%J!{iY,)y<E8XM-xD7A;uxJvKH]H:^*Pt3Qc.{!&.V>T7prr9CCFFzPwIa/=jg');
define('LOGGED_IN_SALT',   'C`6Q[Q6ZfZ$zJE2VIE=8=:aHKfs[:]j3Kr WjS{uO.Ru@|>zr%8ch@+-k~^~7$BG');
define('NONCE_SALT',       'UXc-A_bkM]?mdq_thO^/mkP:I=]rXe6M9eaF~(/3p^JlDX$$<SUT[)>M2^R4DTV!');

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
