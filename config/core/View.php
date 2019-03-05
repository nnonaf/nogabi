<?php


class View {
    public function render($file, $data=[]) {

        $dir = "app/view/".$file;
        
        if (file_exists($dir)) {
            require "app/view/template/header.php";
            require $dir;
            require "app/view/template/footer.php";
            
        }
    }
}
?>