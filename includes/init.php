<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 13.3.2017
 * Time: 13:09
 */

//win DS = "\", Mac/Linux DS = "/"
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'maja');
defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT . DS . 'includes');
defined('API_PATH') ? null : define('API_PATH', SITE_ROOT . DS . 'api');
defined('CLASS_PATH') ? null : define('CLASS_PATH', SITE_ROOT . DS . 'classes');

require INC_PATH . DS . 'config.php';
require INC_PATH . DS . 'db.php';
require INC_PATH . DS . 'functions.php';


require CLASS_PATH.DS.'Player.php';
require CLASS_PATH.DS.'Training.php';

