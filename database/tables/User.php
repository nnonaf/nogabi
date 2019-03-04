<?php

class User

{

     function __construct($connected){
         print_r($connected);

         try {
              //CREATING OF TABLE

              $sql = "CREATE TABLE user (
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
               firstname VARCHAR(30) NOT NULL,
               lastname VARCHAR(30) NOT NULL,
               email VARCHAR(50),
               reg_date TIMESTAMP
               )";
           
               // use exec() because no results are returned
               $connected->exec($sql);

           //  CREATING A MODEL AND CONTROLLER CLASSES AUTOMATICALLY
            ModelFile::__("User");
            ControllerFile::__("User");

         } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
         }

     }
    
}


?>