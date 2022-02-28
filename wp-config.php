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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '65g(i#fZ5.Pd))% JV4#>AeixnT&0:$hfeQ+(ft<Sg$m3,D@EMGsUSw>^hK6C,=4' );
define( 'SECURE_AUTH_KEY',  '`<^i]T@6VT4Y:j2xMj$ GWbfji](^HPeKU;W{z&s87*aBAlsqA:r_2fHRbMu4{E7' );
define( 'LOGGED_IN_KEY',    'EM5gx6}jzKN<hM7K7`#cU:^<*J~b+>gokk:c @Hl3T+5O<e}l24Q/KY@={fMc>6a' );
define( 'NONCE_KEY',        '95meUTGwYtU&(bPFw+(YSn !>T$31E^..#pohO;y=ijNx?^%ND8Foqp(IRyg@YFz' );
define( 'AUTH_SALT',        '6}V%[rM{u4aM36$7nayDWDV[B3n[rl03WDp`vF*So_|?qlt(v+v074Di=%15rQ((' );
define( 'SECURE_AUTH_SALT', 'W5 ng/gP)reW?W&mXWy2 d.=S9s|RI-og3obFQdZ+LbE[YgG=enE+7ICb*Wp4i7/' );
define( 'LOGGED_IN_SALT',   '2{|NaZ`4pU|De5$2wESBi*j0T)5K|Hj+z`lb@Op@W>![FD]XuAUXbnxy#Gr+$^id' );
define( 'NONCE_SALT',       'oONnA#:WkrJ$xSTN/.~ntLnro~k%QCm>K5kj%idmdp9<tk_ zNEdd_|VwD314]`r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
