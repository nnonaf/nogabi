<?php

class Route extends Router_functions{

    public function __construct() {


   }

    public static function get($url,$root, $protected = false){
      // CHECKING IF THE URL IS CORRECTLY PLACED
      //CHECK IF THE METHOD AND CONTROLLER ARE BOTH IN EXITANCE AND RETURN METHOD AND CONTROLLER
      //CHECK IF THE ROUTER ARE UNIQUE
      //STORE THE ROUTE
      Router_functions::urlManager($url);
      $controller_method = Router_functions::rootManager($root,"get");
      if(isset($GLOBALS["route_url"] ))  Store::check_store($url,$controller_method["controller"],$controller_method["method"]);
      new Store($url,$controller_method["controller"],$controller_method["method"],$protected);


      //wrong noticed , u can making a call to reduce processing

      

   }

    public static function post(){
      Router_functions::urlManager($url);
      $controller_method = Router_functions::rootManager($root,"post");
      if(isset($GLOBALS["route_url"] ))  Store::check_store($url,$controller_method["controller"],$controller_method["method"]);
      new Store($url,$controller_method["controller"],$controller_method["method"],$protected);


   }

    public static function put(){

      Router_functions::urlManager($url);
      $controller_method = Router_functions::rootManager($root,"put");
      if(isset($GLOBALS["route_url"] ))  Store::check_store($url,$controller_method["controller"],$controller_method["method"]);
      new Store($url,$controller_method["controller"],$controller_method["method"],$protected);
    }


   public static function delete(){
      Router_functions::urlManager($url);
      $controller_method = Router_functions::rootManager($root,"delete");
      if(isset($GLOBALS["route_url"] ))  Store::check_store($url,$controller_method["controller"],$controller_method["method"]);
      new Store($url,$controller_method["controller"],$controller_method["method"],$protected);

   }

    public static function render(){


   }


}


?>