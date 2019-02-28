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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         'f|c0ICI;d_$K`}]?>V%MN^YEXU[MtPG9B!; r*d:17f{x)r%,T5-5{DX7#>S6u?I');
define('SECURE_AUTH_KEY',  '{`5},Zn)D>AM_KpE@7wg,o|f*sk{m,*)pe0[3RDq+UI4H#lO;c8rs2b.C/Gq^YKH');
define('LOGGED_IN_KEY',    'fV^Op3j!e~uc[h;WTjfN<9</R@*O7q<i5OU4$fCOLFx?T8xr)$a;!*P58pn0Q:V6');
define('NONCE_KEY',        '%dHp.3N>_?98<# fFLS8*sX}$}6)yG^b]V&>cZp==J^tbA}D)C&`u.h@;;n]WpRS');
define('AUTH_SALT',        'giK]Ij,Y-Jp6LdOn;R|p1$/?VaxbT^&WA)h9LKQx.ujIR%?(mC,}*9cU0S}BU&hZ');
define('SECURE_AUTH_SALT', 'Dj[f9PlP&1;mfjEQHbxl!}Up.8T5 20*Q4-o]`tqsz4[<1l4<g-M2<| 3=jM{_N2');
define('LOGGED_IN_SALT',   '6GqZQiJ:YN5sX*Nv9>{AHeNXEv_t2Y6`Ok(uTFj:5A3<$hafh{MKhW8s%[g-N:zz');
define('NONCE_SALT',       'g!qFiC(_8hb2Hq<eiR}zth5GNQE+|zhZk7*{m0 4K vsP{&pVjYNC^n_Rk_Gl!HQ');

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
