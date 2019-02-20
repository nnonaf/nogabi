<?php

class Data_center{
   protected $router = [];

    public function __construct() {
     $this->pen = [];
   
  }


  public function routs($url,$root,$a){    
    array_push($this->router,$root);
    $GLOBALS[$url] = $root; 
    
  
 }


 public  function router_settings(){
   
   return $this->router;

    

 }


}


?>