<?php
class  Db
{
    public static function TableExit($tableName,$connected){

        try {           

            $stmt = $connected->prepare("SELECT * FROM $tableName"); 
            $stmt->execute();

            return true;
            
        } catch (PDOException $e) {
            
             return false;
        }
       
       
    }
}



?>