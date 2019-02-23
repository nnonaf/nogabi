<?php

class Route extends Router_functions{
   protected $router = [];

    public function __construct() {


   }

    public static function get($url,$root){
      
      Router_functions::urlManager($url);
      Router_functions::rootManager($root);
      

   }

    public static function post(){


   }

    public static function put(){


    }


   public static function delete(){


   }

    public static function render(){


   }


}


?>