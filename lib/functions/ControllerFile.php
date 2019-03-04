<?php
 class ControllerFile
 {
     
    public static function __($fileName = false){

        if($fileName !== false){

            //CHECK IF FILE IS ALREADY EXITING
            if((new self)->fileExist($fileName)) return;
            //CREATING THE FILE
            (new self)->createFile($fileName);
         
        }

    }


    private function fileExist($fileName){
      //CHECKING IF FILE EXIT
        return file_exists("app/controllers/".$fileName.".php")? true : false;      
    }


    private function createFile($fileName){
       $myfile = fopen("app/controllers/".$fileName.".php", "w") or die("Unable to open file!");

        $txt =
        
"<?php

  class $fileName extends Controller
    {
      
      function __construct(){
        parent::__construct();

      }
  
        public function get(){
  
  
        }  
        
        
        public function gets(){
  
  
        }
  
        public function post(){
  
  
        }
  
        public function put(){
  
        }
  
        public function delete(){
  
          
        }
     }
                
 ?>";
        fwrite($myfile, $txt);
        fclose($myfile);


    }
 }
 


?>