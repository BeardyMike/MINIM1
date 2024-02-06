<?php

/**
 * MINIM1 - an extremely simple naked PHP application
 *
 * @package MINIM1
 * @author BeardyMike
 * @link http://www.beardymike.co.uk
 * @link https://github.com/beardymike/MINIM1
 * @license http://opensource.org/licenses/MIT MIT License
 */

// start the session (required for login system), we call this as early as possible, so the session is available in all other controllers. otherwise we would have to start the session in each controller __construct().
session_start(); // this allows us the use of $_SESSION variable, which is an array. Each user has its own $_SESSION array, so this is how we can keep track of the user's login status etc.

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

// This is the auto-loader for Composer-dependencies (to load tools into your project).
require ROOT . 'vendor/autoload.php';

// load application config (error reporting etc.)
require APP . 'config/config.php';

// load application class
use MINIM1\Core\Application;

// start the application
$app = new Application();
