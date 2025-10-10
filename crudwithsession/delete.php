<?php
include 'connection.php';
$id=$_GET['id'];
$sql="delete from owncrud_tbl where id=$id";
mysqli_query($conn,$sql);
header('location:display.php');
?>