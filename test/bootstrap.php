<?php

define("BASE_PATH", realpath(dirname(__FILE__)));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    BASE_PATH . '/../library',
    get_include_path(),
)));

require_once(BASE_PATH . '/../vendor/autoload.php');

$config = parse_ini_file(BASE_PATH . '/config.ini');

\CommandCenter\Connector::setDefaultOptions($config);
