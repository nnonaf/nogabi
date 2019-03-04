<?php
class Db_connect{  

    public $connected;
      function __construct() {
       
         try {

            $dbConnect = $_ENV["DB_CONNECTION"];
            $host =   $_ENV["DB_HOST"];
            $dbName =  $_ENV["DB_DATABASE"];
            $charset=  $_ENV["CHARSET"];
            $username = $_ENV["DB_USERNAME"];
            $password = $_ENV["DB_PASSWORD"];
             
            $this->connected = new PDO("$dbConnect:host=$host;dbname=$dbName;charset=$charset",$username, $password);
                // set the PDO error mode to exception
            $this->connected->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               //  echo "Connected successfully";

         } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
         }

        
    }
}
?>