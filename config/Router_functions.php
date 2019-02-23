<?php

class Router_functions{


    function __construct(){}

    public static function urlManager($url){

        //checking if the url is correctly  writing;
        //checking if there is any such name in exiting
        $explodeValues =   (new self)->urlExplotion($url,"/");
        //CHECK NUMBER OF ARRAY AFTER EXPLOTION 
        if(count($explodeValues) !== 2){
            Wrong::_400("Url path is wrongly entered."); 
            exit;
        } 


       


    }

    public static function rootManager($methodPath){
        //CHECKING IF CONTROLLER IS EXITING
        //CHECKING IF METHOD IS EXITING 
        $explodeValues =   (new self)->urlExplotion($methodPath,"@");
        if(count($explodeValues) !== 2 && count($explodeValues)  !== 1)
        {Wrong::_400("Controller or method path is wrongly entered."); exit();} 
        
        //Assigning values to controller and methods from route
        $countroller = $explodeValues[0];
        $method      = "";
        // print_r($explodeValues[0]);
        if(count($explodeValues) === 1){
           $method = "index";
        }elseif ($explodeValues[1] === '') {
            $method = "index";
        }       
        else {
            $method = $explodeValues[1];
        }


        // CHECKING IF FILE AND METHODS ARE IN EXITANCE.
         
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }



    }


    public static function urlRegistrer(){

        //REGISTRATION OF URL
    }

    private function urlExplotion($link,$check_for) { 
       
        return explode($check_for,$link);
     
     }

     private function is_uniqueUrl(){
    

     }

    
}

?>