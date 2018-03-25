<?php
define('WP_HOME','http://localhost:8081/wp-beirut-boilerplate/public_html');
define('WP_COREURL',WP_HOME . '/core/');
define('WP_CONTENT_DIR',APP_ROOT.'/public_html/content');
define('WP_CONTENT_URL', WP_HOME.'/content');
define( 'WP_DEBUG', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbeirut' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '[K+)xHUO;s}KVS&g2Xvi|LL+lm-uL-d+Ip#x%q3|@-?CobyJperT:I4Joq=qGXC}');
define('SECURE_AUTH_KEY',  'DMuB5!.bc9(^EBpBS+hH2P_v`f0H>az^*,,!_UeT>LD&A}|c&T0;3K:lWQ7OU04b');
define('LOGGED_IN_KEY',    'pw{Vf7/xF IX wm>|7e3Rn=E}~.lY>aT~_@LWf%dL]rGi1i:<a.>+$l}.~$[iKv5');
define('NONCE_KEY',        'Pmk6BhMmGme57I8yv(@Sk>ebySOV,Z/C|YWn6-jq:vl-BT|-FBXMTo<5aAt0,6my');
define('AUTH_SALT',        'g|n*go?-Bm!z1z5bW94~e+y&oRRWG=!^:-2@Xb,d<=&m-U`?E|&hlZrLEQo;16X[');
define('SECURE_AUTH_SALT', 'Blp# [0?%bQK}07Hlby*PV$.rL%:3-G[`-515NTuf%Vg3Fj^<lqBWg g5[w>&%Pw');
define('LOGGED_IN_SALT',   '|P=0l#i5z-Df-n_HtCM`$>wy2VC*X|3!5m  0 FEZpx$,)Gx /(>_<k0~>ShM<lr');
define('NONCE_SALT',       '&N[@_v{hSH1PXZ8v?Qdq_Jhvcu@7$M(QE)H$=^<[o~iZdp#Je0_xV:quMTwyxk5E');

/**#@-*/