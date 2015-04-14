<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pdxboardgameknight');

/** MySQL database username */
define('DB_USER', 'wordpress_a');

/** MySQL database password */
define('DB_PASSWORD', 'zuZ*L~M?q#fJj7RN+9c8');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T#qUKfU3(qcjfOvI9rrw*wc)Pw*&khGAnv(zTN6rEVWpyrQNqjQRZCjR8fKn6Tb#');
define('SECURE_AUTH_KEY',  'Vd@NdOXKh^HLhHBGVvItnp&h!oo5!b4%!Q)e%WHmkyQIy!MM#FmT40J%wd)eL8Cp');
define('LOGGED_IN_KEY',    '7Jtn72MR7BxfHon)f00DNyBoJXN7RyD7xY!sPArT6JKaH6ITtedH8@Hu3QxCsDGW');
define('NONCE_KEY',        '2^haF76#U(9X*s9ig!1H1c%R1VlSqz!hcI@QMw*hXo4M7gIEr5DwJWix#Y(4@%iB');
define('AUTH_SALT',        'lAxa(9uREwPST*#DJt3W%SqH&ibR8aK5P^lsOLwN3tidpInktwg5m*0!xjs367V&');
define('SECURE_AUTH_SALT', 'QyaWe&NVHTzOmH*rMyHLXXxhTsS66w9e)UKR!BW&VAPRRnF)deLeKlK9CNtb5i4v');
define('LOGGED_IN_SALT',   'a3t!@RnRvlKE%gvkXfSFfZLpjJKu@X2Y%42^Gcu)*2daMMGw4aVIbSuLk*qrwGD!');
define('NONCE_SALT',       'u(d486!2fJ0pUPLPtitt83lhkPpUYpKgzRPRJrgKledtO!N63Ik9M(baJxQjJxuo');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt869Gw_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
