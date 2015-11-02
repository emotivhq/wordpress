<?php
# Database Configuration
define( 'DB_NAME', 'wp_giftstarter' );
define( 'DB_USER', 'giftstarter' );
define( 'DB_PASSWORD', 'vPtLRTPQJTJEbc5C8VEy' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '5r^udiRU6N2Uim]n+*i}jFr%yk-t{D&nr}_-G-s+A?(T$bD{)XJ5l!dey~(Ph*#+');
define('SECURE_AUTH_KEY',  'Xua=]<JP5k {|1K5^0*a,oRNOly~x&xhzV=0,;hK!?jNlee|T9aEUDJ0kX3+zJj,');
define('LOGGED_IN_KEY',    '%FKao1a#_Rp~9JqRup-pJF*{*^+lXCXMTTkklol^);soo(J,w01+C,aM-e1Q[~;F');
define('NONCE_KEY',        'Aw#,01A/G>S27`da|sr4= >TRX/ }:j6$mxGWl$v=|]Hnz?p0G7]H0TCmX;4zY$h');
define('AUTH_SALT',        'LwtUIz+{n]`S0;EKy=j^fgkP}w<<O4]ZHRWsmEB8Ik&2w ??rtZkFOEo*OjZSChZ');
define('SECURE_AUTH_SALT', 'P+r-<X$*97Kn8<LGPq7_n2=.3q{.r+][SEM;M_-8i%l38{w[~`6VrP^Y|pMow,-S');
define('LOGGED_IN_SALT',   '05|Imv`ai[o8H[E+de475@}wqBaDWd|wspF]5oNd$>$w=#)Rj{V+KT_ =/lt/{ou');
define('NONCE_SALT',       'RuD;+:h*t_kXQ+0h{kPPV5SRaEZ&snga5pL~bq.zp4gr!LqJjm$RaWQs*BJcQdyr');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'giftstarter' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '6427a1c9742ad8044870f8900b3aede1bd2c9ab9' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '42940' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '66.228.52.230' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'giftstarter.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-42940', );

$wpe_special_ips=array ( 0 => '66.228.52.230', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID

# WP Engine Settings

# Multisite
define( 'WP_ALLOW_MULTISITE', true );

# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
