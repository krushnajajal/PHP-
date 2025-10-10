<?php
    session_start();
    include 'connection.php';
    
?>
<?php
    if (isset($_POST['submitBtn'] )){
    $result=mysqli_query($conn,"select * from owncrud_tbl where name='".$_POST['uname']."' and '".$_POST['password']."'");
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count>0){
        $_SESSION['user_name']=$row['name'];
        header('location:welcome.php');
    }
    else{
        echo'error at username or passwrd';
    }
    }
?>

</body>

<form method="POST" align="center">
    User Name   <input type="text" name="uname"><br><br>
    Enter Password  <input type="password" name="password"><br><br>\
    
    <input type="submit" value="login" name="submitBtn"> 
    <a href="form.php">Register Here</a>
</form>
<br><br>
<center>
logout by mistake? <a href="login.php"> Login again</a>

</center>