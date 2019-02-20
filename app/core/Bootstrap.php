<?php
class Bootstrap extends Data_center {
    private $controller = "Error_page";
    private $method     = "index";
    private $params     = array();
   

    public function __construct() {

         print_r($GLOBALS);
        
        //CHECKING FOR SECURITY OF URL PASSED
        $url = $this->https_security($this->urlParse());

         if(isset($url[0])){

            if(file_exists("app/controller/".$url[0].".php")) {
                $this->controller = $url[0];
                unset($url[0]);
            }

         }


         //REQUIRING THE PAGE
         require "app/controller/".$this->controller.".php";
         $this->controller = new $this->controller;
         //CHECKING IF  METHOD IS EXITING
         
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }


        //SETTING UP DATA FOR PARAMETER
        $this->params = $url ? array_values($url) : array();
        call_user_func_array(array($this->controller, $this->method), $this->params);

        unset($url);




    }





    private function urlParse() {
        if (isset($_GET["url"])) {
             return (explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL)));
        }
       
     }



     private function https_security($url = false){



         //RETURNING VALUE AFTER CLEAN UP
         return $url;

     }



}



?>