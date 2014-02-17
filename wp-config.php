<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'chalas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't -w.KM@ed!xQ-LS-3 QQwBkZ.:b@;/lY 8Lxl4eKIFI$M*I^klgY,.1/%%_mFm-');
define('SECURE_AUTH_KEY',  '@/EsZzHZUaeaS2w]:3f5*>P)!H<4}Gi 0M+H-i*O|Z$y`8p?>5M~<_,S]@vhra_K');
define('LOGGED_IN_KEY',    'yFmM)4!L-AnDqjghE#GQ7,V1J+p.>ugsA!.C8h2nm5J~P+dzo+e85w2n)7REfhRb');
define('NONCE_KEY',        'kZAaK<}C],%&)rO=Vl(2!bq]`)*.o*H /,Ld{aR>h@aT,zcR>Tn9=ONsC,`i<ld!');
define('AUTH_SALT',        'wO9%RmIS9/~B06E$eVZC3PRJAZ18Q,P]j-u#1p_UNR|`&Kd?|Es<;r(FH}Ds-L$_');
define('SECURE_AUTH_SALT', '/K.UQ?@Ul>9W5Nr`Q+Wt6>V;|D,68n&^udK:-mHw%+-`{3`P l1izk^$} 2wxnOM');
define('LOGGED_IN_SALT',   ']_-tf<PWCn2`9:e9(_s-,d-/.2INck:9(#-eXq)BT+UjasDjNR.{G!<A}klr(7qV');
define('NONCE_SALT',       '@/I}4/-${zz}$I-dK kR~wP8hJ+LfL7?m|sv -|QjL-{OyIz;jt;$/LN^B~_~car');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
