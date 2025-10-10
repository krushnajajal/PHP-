<?php
$conn=mysqli_connect("localhost","root","","clg_-db")
?>

<?php
$id=$_GET['id'];
$sql="delete from del_db where id=$id";
mysqli_query($conn,$sql);
header('location:display.php');
?>