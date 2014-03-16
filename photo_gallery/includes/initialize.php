<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/14/14
 * Time: 7:52 PM
 */
//define the core paths
// Define them as absolute paths to make sure that require once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
//(\for windows /for unix )
defined('DS')? null : define('DS',DIRECTORY_SEPARATOR);
defined('SITE_ROOT')? null :
define('SITE_ROOT',DS.'wamp'.DS.'www'.DS.'photo_gallery_project'.DS.'photo_gallery');
//C:\wamp\www\photo_gallery_project\photo_gallery


defined('LIB_PATH') ? null : define('LIB_PATH',SITE_ROOT.DS.'includes');
// load config file first
require_once(LIB_PATH.DS."config.php");
// load basic function next so everything can use them
require_once(LIB_PATH.DS."functions.php");
// load core objects
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");
// load database related classes
require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."photograph.php");