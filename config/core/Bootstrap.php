<?php
class Bootstrap {
    private $controller = "Home";
    private $method     = "index";
    private $params     = array();
    private $base_url   = true;
   

    public function __construct() {

        //GET URL
        //CHECK IF IT IS FALSE AND SEND RESULT TO ERROR PAGE.
        //GET THE RETURN URL AND CALL THE PAGE
        
        
        $route = $this->urlParse();
        
       
        
        if($route !== false){
            $this->base_url = false;
            $this->controller = $route["controller"];
            $this->method = $route["method"];

        }     
       
         //REQUIRING THE PAGE
         require_once "app/controllers/".$this->controller.".php";
         $this->controller = new $this->controller; 
        //SETTING UP DATA FOR PARAMETER
        $this->params = $this->getParameters() ? array_values($this->getParameters()) : array();
        call_user_func_array(array($this->controller, $this->method), $this->params);
        // call_user_func_array(array($this->controller, $this->method),array_values($this->getParameters()));
    }





    private function urlParse() {
        $base_url = " ";
        if (isset($_GET["url"])) {
             $url= explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
        }

        if(empty($url)){
            $base_url = "/";
         

        }else {
            $base_url = $url[0];
        }
         
        foreach($GLOBALS["route_url"] as $key => $value){
            if( explode("/",$key)[1] ==   $base_url) return  $value;
            if( $key ==  $base_url) return  $value;
           
        }


        return false;


       
       
     }

     private function getParameters(){
     
       if(isset($_GET["url"]) &&  $this->base_url == true ){
          return  explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
       }elseif (isset($_GET["url"])) {
        $url= explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
           unset($url[0]);
            return $url;
       }else {
        return [];
       }

     }



     private function https_security($url = false){



         //RETURNING VALUE AFTER CLEAN UP
         return $url;

     }



}



?>