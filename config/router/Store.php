<?php

 class  Store extends Router_functions
 {
   function __construct($url,$controller,$methode,$protected){ 
        //SAVING OF ROUTE TO STORE.
        $url_settings = [
          "controller" => $controller,
          "method"=>$methode,
          "protected" =>$protected
        ];

        $GLOBALS["route_url"][$url] =  $url_settings;    
   } 
   
   
   public static function check_store($url,$controller,$methode){
     //AUTHENTICATION OF UNIQUENESS OF ROUTE
     foreach($GLOBALS["route_url"] as $key => $value){
       if(explode("/",$key)[1] === $url && $value["controller"] === $controller && $value["method"] === $methode  ){

        Wrong::_404("route; DOUBLE ROUTING ");

       }
       if($key === $url && $value["controller"] === $controller && $value["method"] === $methode  ){
          Wrong::_404("route; DOUBLE ROUTING ");
       
        

    }
   
    
  }



   }
 }

?>