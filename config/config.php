<?php

// Define Contstants
// note that you should confirm that constants doesn`t defined in anthor scope to avoid the error that occured in Defining the APP_PATH constant 


if(!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

// Paths Constants

define('APP_PATH', realpath(dirname(__FILE__)) . DS . '..');


// Configration Database Constants

defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'testing');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);

