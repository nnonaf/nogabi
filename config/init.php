<?php
//vedor
require_once "vendor/autoload.php";
require "env_connect.php";
require "app_config.php";


//lib
require "lib/init.php";


//database
require "database/core/Db_connect.php";
require "database/tables/Core.php";


//config
require "core/Bootstrap.php";
require "core/Model.php";
require "core/View.php";
require "core/Controller.php";


require 'error/Wrong.php';
require 'config/router/Router_functions.php';
require 'config/router/Store.php';
require 'config/router/Route.php';




//router
require 'router/web.php';





?>