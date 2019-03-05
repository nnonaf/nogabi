<?php 
 class  Home  extends Controller
 {
     
   function __construct(){

    parent::__construct();

   }

   public function index(){
 
    //  echo " am index";
   }

   public function get(){

    $this->view->render("welcome.php");
   }

 }
 



?>