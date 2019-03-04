<?php
require "User.php";
class  Core extends Db_connect
{

 function __construct(){
    parent::__construct();
    new User($this->connected);
      

 }

    
}


?>