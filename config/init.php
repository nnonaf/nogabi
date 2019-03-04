<?php
//vedor
require_once "vendor/autoload.php";
require "env_connect.php";


//lib
require "lib/init.php";


//config
require "core/Bootstrap.php";
require 'error/Wrong.php';
require 'config/router/Router_functions.php';
require 'config/router/Store.php';
require 'config/router/Route.php';

//database
require "database/core/Db_connect.php";
require "database/tables/Core.php";



//router
require 'router/web.php';





?>