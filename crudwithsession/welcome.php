<?php
    session_start();
    include'connection.php';
?>

<?php echo "welcome ".$_SESSION['user_name'];  ?>

<a href="logout.php">Log-out</a>