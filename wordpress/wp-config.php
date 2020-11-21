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
define( 'DB_NAME', 'home1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'panda123ira' );

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
define( 'AUTH_KEY',         'KUF38_y2}]U>Kn|+-eX}z83=wQZ<K.zJJDQ]019qoVS/SW[lC@,umWh!4xlEt2q?' );
define( 'SECURE_AUTH_KEY',  '9+u0`($y36oN!A@7f&| AFA0JG_y^M Oc$}X+ ZfiVjKUO]cJllQ9WnuSM;>Qqg*' );
define( 'LOGGED_IN_KEY',    ' m8&|O59]RH%`t#@@T#7s3_)bdC8bdx,l_b0F7;_uEBS}:mLF<9Z=XBN<[,cs`R`' );
define( 'NONCE_KEY',        'y]r]~z._IBDDG-8X6V-k*$5%cOp!l/oZQ6<SK#5yUVqnSeK>@20k|PKr|*O0BDgE' );
define( 'AUTH_SALT',        'Ix?F.gVk*yELNI`x}8Pqn_2cf-ru##B$(*iYWqOWR+KeQx?x2wc6wue>jkBv^[x:' );
define( 'SECURE_AUTH_SALT', '3P8J|!i]n9k3L.H~;N6~y2E)Xy5 9+bM@EeG8bN)$>CX1oOrHsz<so9H8W$AxUk`' );
define( 'LOGGED_IN_SALT',   'P:H;[i:03,9D-/iM,0zRk2zgPL_/=b,WgeA714/G$ uIjl#sOac])VWAZ~Ui->Z5' );
define( 'NONCE_SALT',       '8WOX&&70.vYRQcv+sFVR:M7L4&|rHAE$#Cn=7EYRAwAXz1d*/X~9C]gTlpyyq&Sp' );

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
