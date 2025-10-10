<?php

$conn=mysqli_connect("localhost","root","","clg_-db");
?>
    <?php
            $name="";
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $result=mysqli_query($conn,"select * from del_db where id=$id");
                $row=mysqli_fetch_array($result);
                $name=$row['name'];

            }
            if(isset($_POST['submit']))
            {
                if(!empty($_GET['id']))
                {
                    $sql="update del_db set name='".$_POST['name']."' where id=$id";
                    mysqli_query($conn,$sql);
                    header('location:display.php');    
                }
                else
                {
                    $sql="insert into del_db values(NULL,'".$_POST['name']."')";
                    mysqli_query($conn,$sql);
                    echo "Record Added";
                }
            }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <form method="POST">
    Enter Name <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
        <button type="submit" name="submit">Submit</button>
        <a href="display.php">view</a>
</form>
</body>
</html>