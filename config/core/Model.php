<?php
class Model extends Db_connect{

    protected $db;


    public function __construct() {

        $this->db = $this->connected;

       
    }


    public function load($file) {
        
        $dir = "app/model/".$file.".php";
        
        if (file_exists($dir)) {
            require $dir;
            
            $classname = $file."Model";
            return new $classname;
        }
    }


    
}


?>