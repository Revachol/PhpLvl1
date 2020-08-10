<?php
    include "config.php";
   echo $name = $_POST[name];
   echo $text = $_POST[text];
   $sql = "insert into reviews (name , text) VALUES ($name, $text)";
    if(mysqli_query($connect,$sql)){
        header("Location:shop.php");
    }