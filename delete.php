<?php 

 include 'connect.php'; 
$id = (int)$_GET['id'];


$sql = "delete from tasks where id = '$id'";


$val = $conn->query($sql);

if($val){

header('location: news.php');

};



 ?>