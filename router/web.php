<?php
 $router = new Data_center();

 $router->routs("/checking", "Home@get",1);
 $router->routs("/checkout", "Home@put",2);
//  $router->routs("/checkout", "Home@put",3);




?>