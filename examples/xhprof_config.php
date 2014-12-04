<?php

date_default_timezone_set('America/Los_Angeles');

define('XHPROF_ROOT', realpath(dirname(__FILE__) .'/..'));
define('XHPROF_LIB_ROOT', XHPROF_ROOT . '/xhprof_lib/');

//Please define following properties in order to define back-end SQL server data store.
// define('DB_TYPE',   'dblib');
// define('DB_HOST',    $_SERVER['db_host']);
// define('DB_USER',    $_SERVER['db_user']);
// define('DB_PASS',    $_SERVER['db_pass']);
// define('DB_NAME',    $_SERVER['db_name']);
// define('DB_ADAPTER', 'Pdo');
// define('SERVER_NAME', 'Test');
// define('NAME_SPACE', 'Test');