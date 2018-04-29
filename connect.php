<?php 
    $conn = new mysqli('localhost','root','','login');
    
    if ($conn -> connect_errno){
        die("Connectioin failed".$conn->connect_error);
    }
?>