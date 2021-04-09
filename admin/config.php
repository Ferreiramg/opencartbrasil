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
define('HTTPS_SERVER', 'https://lp-cart.herokuapp.com/admin/');
define('HTTPS_CATALOG', 'https://lp-cart.herokuapp.com/');

// DIR
define('DIR_APPLICATION', '/app/admin/');
define('DIR_SYSTEM', '/app/system/');
define('DIR_LANGUAGE', '/app/admin/language/');
define('DIR_TEMPLATE', '/app/admin/view/template/');
define('DIR_IMAGE', '/app/image/');
define('DIR_CATALOG', '/app/catalog/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');
// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', $host);
define('DB_USERNAME', $user); 
define('DB_PASSWORD', $pass);
define('DB_DATABASE', $base);  
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');