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

//error_reporting(E_ALL);

define('JS_COMPILE', false);

define('CSS_COMPILE', false);

define('SITE_BUILD' , 'development');


function get_config_consts($build){

if($build == 'development' || $build == 'testing'){
	require('debug/myconfig.class.php');		
	$myconfig = new MyConfig;
}

if($build == 'development'){
	//echo('DEV');	
	$settings = $myconfig->get_Settings('dev');	
	$wpdebug = true;
}

if($build == 'testing'){
	//echo('TEST');	
	$settings = $myconfig->get_Settings('tes');	
	$wpdebug = true;
}

elseif($build == 'production'){
	//echo('PROD');
	$settings = array('dbname_wp_db', 'dbuser_5r4p7', '$nPouS+*)W4tG89m_z', 'localhost');
	$wpdebug = false;
	define('FS_CHMOD_FILE', 0755);
	define('FS_CHMOD_DIR', 0644);
	define('WP_POST_REVISIONS', 5);
}
 
/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', $wpdebug);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $settings[0]);
//echo($settings[0]);

/** MySQL database username */
define('DB_USER', $settings[1]);
//echo($settings[1]);

/** MySQL database password */
define('DB_PASSWORD', $settings[2]);
//echo($settings[2]);

/** MySQL hostname */
define('DB_HOST', $settings[3]);
//echo($settings[3]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

}

get_config_consts(SITE_BUILD);
/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'u3:B+$ZAlVaFTNiqd%n,)z@w Wz=xLh+W{vxJV^$V5v>:ETIO7f:el{{.gn+=H? ');
define('SECURE_AUTH_KEY',  ';:XUc;!5K!+e2[[JHR65+[G;J?O-Fmdc.dG5];[t[z9G([}9y;OoXvu9;h&q=N[K');
define('LOGGED_IN_KEY',    '.m;2:tL6bOx,sT]6B._d=Mjp`f:{kG^&(/qFkpf{)!>wA8.I4S|.YZV%*Db6.NP4');
define('NONCE_KEY',        '-Sd#eL}T.B$-+cMZm%C(-sz*nOiA5( W5<#qd])Cl/Jd&[/{|(jO2pRM)@jMEC~]');
define('AUTH_SALT',        'p0&(%E|pJC]?UKo.gK:Tp-}p[B[zn!L0_>G6( =k80w]}#p%E{@Ky4@(2l9|-$Fs');
define('SECURE_AUTH_SALT', 'gzdKgZ8/kH{chq4;wAEkW4=v91:<~!+XTTf[!n^V0t]H<iir#!W>Y%+|H]w/A/RG');
define('LOGGED_IN_SALT',   'fk$++X=X[o]n:@hzO=}XL~|2Yeo iuSV&|BLfjL(K 3+vSKg-x^KK;gS RtE1Ero');
define('NONCE_SALT',       '0L0Mw;+a@oN]v<t9Jl&P+v+2zkIaWOo_qd|?O=-*X7G^^/z*w+EIZ`wN2CHJ`vUY');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_8fy7oult343_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/* Disable Theme and Plugin Editors from WordPress Admin Panel*/

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

//define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

