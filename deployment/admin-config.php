<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8080/opencart/admin/');
define('HTTP_CATALOG', 'http://localhost:8080/opencart/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8080/opencart/admin/');
define('HTTPS_CATALOG', 'http://localhost:8080/opencart/');

// DIR
define('DIR_APPLICATION', '/data/www/opencart/admin/');
define('DIR_SYSTEM', '/data/www/opencart/system/');
define('DIR_IMAGE', '/data/www/opencart/image/');
define('DIR_STORAGE', '/data/storage/');
define('DIR_CATALOG', '/data/www/opencart/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', getenv('DB_HOSTNAME'));
define('DB_USERNAME', getenv('DB_USERNAME'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
