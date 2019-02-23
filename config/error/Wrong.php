<?php

class Wrong{
    function __construct(){}

        private function errorReporter(array $message){
        // CHECK FOR METHOD OF REPORTING THE ERROR AND APPLY IT
          print_r($message);

    }

    public static function _400($message){
        //BAD REQUEST FROM URL

        (new self)->errorReporter(["staus"=> 400, "message"=>$message]);
    }

    public static function _401($message){
        //AUTENTICATION ERROR , WHEN THERE IS RESTRICTION TO A PARTICULAR PAGE
        (new self)->errorReporter(["staus"=> 400, "message"=>$message]);
    }

    public static function _403($message){
        //NO PERMISSION TO YOUR VALID REQUEST
        (new self)->errorReporter(["staus"=> 400, "message"=>$message]);

    }
    public static function _404($message){
        //DEAD OR NOT EXITING LINK
        (new self)->errorReporter(["staus"=> 400, "message"=>$message]);

    }
    public static function _405($message){
        // This is used when the request is well-formed and the resource it asks for does exist, 
        // but the request method (such as GET or POST) is not appropriate to the resource
        (new self)->errorReporter(["staus"=> 400, "message"=>$message]);

    }
    public static function _415($message){
        // This generally used for file uploads, when the request entity
        //  (the file being uploaded) is of a type not supported by the server
        (new self)->errorReporter(["staus"=> 400, "message"=>$message]);


    }

   
    
}



?>