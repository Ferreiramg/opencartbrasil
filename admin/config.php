<?php

$sqldb = parse_url(getenv('CLEARDB_DATABASE_URL'));
    $host = $sqldb['host'];
  //$port = $sqldb['port'];
    $base = ltrim($sqldb['path'], '/');
    $user = $sqldb['user'];
    $pass = $sqldb['pass'];



// HTTP
define('HTTP_SERVER', 'https://lp-cart.herokuapp.com/admin/');
define('HTTP_CATALOG', 'https://lp-cart.herokuapp.com/');

// HTTPS
define('HTTPS_SERVER', 'hhttps://lp-cart.herokuapp.com/admin/');
define('HTTPS_CATALOG', 'https://lp-cart.herokuapp.com/');

// DIR
define('DIR_APPLICATION', '/app/admin/');
define('DIR_SYSTEM', '/app/system/');
define('DIR_LANGUAGE', '/app/admin/language/');
define('DIR_TEMPLATE', '/app/admin/view/template/');
define('DIR_CONFIG', '/app/system/config/');
define('DIR_IMAGE', '/app/image/');
define('DIR_CACHE', '/app/system/cache/');
define('DIR_DOWNLOAD', '/app/system/download/');
define('DIR_UPLOAD', '/app/system/upload/');
define('DIR_LOGS', '/app/system/logs/');
define('DIR_MODIFICATION', '/app/system/modification/');
define('DIR_CATALOG', '/app/catalog/');
// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', $host);
define('DB_USERNAME', $user); 
define('DB_PASSWORD', $pass);
define('DB_DATABASE', $base);  
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');