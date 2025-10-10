<?php
include 'connection.php';
$id=$_GET['id'];
//echo $id;
$sql="delete from user_data where id=$id";
mysqli_query($conn,$sql);
header('location:formdisplay.php');
?>