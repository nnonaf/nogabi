<?php
 class ModelFile
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
        return file_exists("app/models/".$fileName.".php")? true : false;      
    }


    private function createFile($fileName){
       $myfile = fopen("app/models/".$fileName.".php", "w") or die("Unable to open file!");
       $fileName = $fileName."Model";

        $txt =
        
"<?php
  class $fileName  extends model
    {
      
      function __construct(){}
  
        public static function create(){
  
  
        }  
        
        
        public static function selectAll(){
  
  
        }
  
        public static function seleect(){
  
  
        }
  
        public static function update(){
  
        }
  
        public static function delete(){
  
          
        }
     }
                
 ?>";
        fwrite($myfile, $txt);
        fclose($myfile);


    }
 }
 


?>