<?php

class Router_functions{


    function __construct(){}

    public static function urlManager($url){

        //checking if the url is correctly  writing;
        //checking if there is any such name in exiting
        $explodeValues =   (new self)->urlExplotion($url,"/");
        //CHECK NUMBER OF ARRAY AFTER EXPLOTION 
        if(count($explodeValues) !== 2){
            Wrong::_400("route; Url path is wrongly entered."); 
            exit;
        } 


       


    }

    public static function rootManager($methodPath,$defaultMethod){
        //CHECKING IF CONTROLLER IS EXITING
        //CHECKING IF METHOD IS EXITING 
        //RETURNING THE CONTROLLER AND METHODS AS ARRAY
        
        $explodeValues =   (new self)->urlExplotion($methodPath,"@");
        if(count($explodeValues) !== 2 && count($explodeValues)  !== 1)
        {Wrong::_400("route; Controller or method path is wrongly entered."); exit();} 
        
        //Assigning values to controller and methods from route
        $countroller = $explodeValues[0];
        $method      = "";
        // print_r($explodeValues[0]);
        if(count($explodeValues) === 1){
           $method = $defaultMethod;
        }elseif ($explodeValues[1] === '') {
            $method = $defaultMethod;
        }       
        else {
            $method = $explodeValues[1];
        }
        // CHECKING IF FILE AND METHODS ARE IN EXITANCE.

          //REQUIRING THE PAGE
          require_once "app/controllers/".$countroller.".php";
            $countroller = new $countroller;

            if (method_exists( $countroller, $method)) {

                return [
                     "controller"=> $explodeValues[0],
                     "method"=> $method
                ];
            }else {
                  Wrong::_404("route; CONTROLLER OR METHOD IS NOT EXITING. ");
            }     
    }


    public static function urlRegistrer($url,$root,$protected){

        //REGISTRATION OF URL
         
        
        print_r($protected);


    }

    private function urlExplotion($link,$check_for) { 
       
        return explode($check_for,$link);
     
     }

     private function is_uniqueUrl(){
    

     }

    
}

?>