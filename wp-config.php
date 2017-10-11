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
define('DB_NAME', 'feroz');

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
define('AUTH_KEY',         '%VVI4i(v1 %Vsncte]sVY0UqK{A;)I^v]B@_DrkXe/<Gm1 HD@m_Q%PPeG#k ~K;');
define('SECURE_AUTH_KEY',  'U#zA)08ZQij[A>GYbX+T#AFH!6m&apnPh09GKG7N-!3MKiD!2}nte|v9|/NhFLcw');
define('LOGGED_IN_KEY',    'H%2@;!Jw]?w_a<m=jy*CX1wrYpMG{yP(TH~a(79%O`A9;}virl`:QeSUCi[[Dawo');
define('NONCE_KEY',        'Xe@BG gr2+}rd=C;tXL1Ef^b:_T$m]D?]Pv^.k)Nf}>Khqu@GF^ydo5+P%NMQNRm');
define('AUTH_SALT',        '2~kaB=_;5.zde[I4^whm?OuaXZ.Dtu0~Dxe];X}RCM7xsg<3fn*Os)b4D]#{&s~i');
define('SECURE_AUTH_SALT', 'V6ghGL-[i4%EWMV`JUJmK{TFdUPrA~3@@1{qcCO#bY4(l9Hfm~<z_723W;oJ}v`4');
define('LOGGED_IN_SALT',   'vfM{x63Q;P>c}pH7/Zhyis7=j4OLCI>CyZ{qg)U@d3=mF#w_!C%m3XS.UEI_e[1C');
define('NONCE_SALT',       'q9&u=+pEcU=oLvkgIS/dn*P{mJ,U?pI<dp5eyX]g{A@~@6QT!WcfKfmwa^iVgyA<');

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
