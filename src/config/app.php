<?php

// Turn on output buffering
ob_start();

// Database config
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog');
define('DB_USER', 'root');
define('DB_PASS', 'root');

define('ENVIRONMENT', 'development');

if (defined('ENVIROMENT')) {
    switch (ENVIROMENT) {
        case 'development':
            error_reporting(E_ALL);
            break;
        case 'production':
            error_reporting(0);
            break;
        default:
            exit('The application environment is not set correctly.');
    }
}

// Base dir
define('DIR', dirname(dirname(__FILE__)));

define('DS', DIRECTORY_SEPARATOR);

// Set default controller and method for legacy calls
define('DEFAULT_CONTROLLER', 'WelcomeController');

define('DEFAULT_METHOD', 'index');

// Set the default language
define('LANGUAGE_CODE', 'en');

// Smarty
define('SMARTY_DIR', DIR . DS . 'system' . DS . 'Libs' . DS . 'Smarty' . DS);

define('TEMPLATES_DIR', DIR . DS . 'resources' . DS . 'templates' . DS);

define('TEMPLATE_DIR', TEMPLATES_DIR);

define('COMPILE_DIR', DIR . DS . 'storage' . DS . 'templates_c');

define('CONFIG_DIR', DIR . DS . 'config');

define('CACHE_DIR', DIR . DS . 'storage' . DS . 'cache');

// Set prefix for sissions
define('SESSION_PREFIX', 'mf_');

// Turn on custom error handling
set_error_handler('\System\Core\Logger::exceptionHandler');
set_error_handler('\System\Core\Logger::errorHandler');

// Set timezone
date_default_timezone_get('Asia/Ho_Chi_Minh');

// Start sessions
\System\Helpers\Session::init();
