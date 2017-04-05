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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'bk>ex]U].t:#3n3Eyx$o+p)E(u()}Y!dHQnc#bToPKRmevnfGK3UWUV|xJdktvr!');
define('SECURE_AUTH_KEY',  'oqf<z+=J,$nl%u,z&#y]-N9~~[3$a0)FC0ek>k<VKY)=LvFFE5`w*dPwW-+(8W9k');
define('LOGGED_IN_KEY',    ' ,<z9]Bt]OB=]{9z#:Gkj*>GNU;}8`$}3!A0wg0U83aw{jE6;a2VWCRBT~*AdX8{');
define('NONCE_KEY',        'qm$HS,@> =5~|{NYpe[ul//#VOf((}emBk%UW.8%^2YH 5]qA]mQ]W>@{]|6;/-j');
define('AUTH_SALT',        'GF$`9!a(ZCjuIwjgo]O4Um16iL8 xz{OHD0[ZIbZgdwT)M_Oqd;Y%WqC?y]+40JD');
define('SECURE_AUTH_SALT', 'O:o.FO.tMV3Em$|8{Avdy}mL>@r=_abSZZ<DwNq3nL5il;()~,STQdW3_`DGjLTX');
define('LOGGED_IN_SALT',   '(=;)L1G_nMR/{s(F`Ku<80nt^IZaD9-;X>f`RY],hEa^mb3mhW|N&s,!aCf5~w=%');
define('NONCE_SALT',       '83,[xL:Qg0<,O.Z.e3#zF%VarSG4 fI;2uj&8IkUQCKw?MFXpy?{YT.^0.TfIsD@');

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
