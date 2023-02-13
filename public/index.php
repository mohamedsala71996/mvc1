<?php

define("DS",DIRECTORY_SEPARATOR);
define("DN",dirname(__DIR__));
// echo DN;
define("APP",DN.DS."app");
// echo APP;
define('CONFIG', APP.DS."config");
// echo CONFIG;
define('CONTROLLERS', APP.DS."controllers");
define('CORE', APP.DS."core");
define('MODELS', APP.DS."models");
define('VIEWS', APP.DS."views");
// echo VIEWS;
define("USERNAME","root");
define("DATABASE","big_project");
define("PASSWORD","");
define("TYPE","mysql");
define("HOST","localhost");
define("PORT","3306");
define("DOMAIN","http://localhost/mvc/public/");



require_once("../vendor/autoload.php");

$app=new MVC\core\app();