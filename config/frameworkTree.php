<?php
 
 
$tree = array(
   "app" => array(
       "core" => array(
           "Bootstrap.php",
           "Controller.php",
           "View.php",
           "Model.php"
       ),
       "controllers"=> array(
           "UserController.php"
       ),
       "models" => array(
           "User.php"
       ),
       "view"=> array(
           "welcome.php"
       )
   ),
   "config"=> array(
       "init.php",
       "Router_functions.php",
       "Router.php"

   ),
   "public"=> [
       "css"=> array(
           "main.css"
       ),
       "js"=> array(
        "main.js"
       ),
       "image"=> array(
           "nogabi.png"
       )

   ],
   "route"=> array(
       "web.php",
       "api.php"
   ),
   ".htaccess",
   "index.php"



);
?>