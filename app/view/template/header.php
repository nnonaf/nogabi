<!DOCTYPE html>
<html lang="en" class="nojs">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>
        <?php if(isset($_ENV["APP_NAME"])) {echo $_ENV["APP_NAME"]; }else {echo "Nogabi";} ?>
    </title>

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="<?=URL?>public/css/style.css" rel="stylesheet">
  
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

   
    
    
<?php if(isset($this->style)): ?>
<?php foreach($this->style as $style): ?>
    <link rel="stylesheet" href="<?= $_ENV['URL']?>public/<?=$style?>.css">
<?php endforeach; ?>
<?php endif; ?>

</head>