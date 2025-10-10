<?php
include 'connection.php';
?>


<?php
$name=$phno=$password=$address=$city=$gender=$hobbies="";

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $result=mysqli_query($conn,"select * from owncrud_tbl where id=$id");
    $row=mysqli_fetch_array($result);
    $name=$row['name'];
    $phno=$row['phno'];
    $email=$row['email'];
    $password=$row['password'];
    $address=$row['address'];
    $city=$row['city'];
    $gender=$row['gender'];
    $hobbies=$row['hobbies'];
}

if(isset($_POST['submitBtn']))
{
    if(!empty($_GET['id']))
    {
        $sql="UPDATE owncrud_tbl set phno='".$_POST['phno']."',email='".$_POST['email']."', name='".$_POST['name']."',address='".$_POST['address']."',city='".$_POST['city']."', gender='".$_POST['gender']."',hobbies='".$_POST['hobbies']."' where id=$id";
        mysqli_query($conn,$sql);
        header('location:display.php');    
    }
    else
    {
    $sql="INSERT INTO owncrud_tbl values(NULL,'".$_POST['phno']."','".$_POST['email']."','".$_POST['password']."','".$_POST['name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['gender']."','".$_POST['hobbies']."')";
    mysqli_query($conn,$sql);
    echo "Record Added";
    }
}  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
<body>
    <br>
            <center><a href="login.php">login</a></center>
    <form method="post" style="text-align:center">
         
        <table border="1px" cellpadding="10" cellspacing="0" align="center">
    <tr>Add Data</tr>
            <tr>
                <td>Phone Number</td>
                <td><input value="<?php echo$phno;?>"type="text" id="phno" name="phno" required>
                </td>
            </tr>
            
         <td>E-Mail</td> 
        <td><input type="text" name="email" id="email"required></td></tr>

            <tr>
                <td>Password</td>
                <td><input type="password" id="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><input type="text" value="<?php echo $name?>"  id="name" name="name" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="textarea" value="<?php echo $address?>" id="address" name="address" required></input></td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <select id="city" name="city" required>
                        <option value="Surat" <?php if($city=="Surat"){ echo 'selected';}?>>Surat</option>
                        <option value="Ahmedabad" <?php if($city=="mumbai"){ echo 'selected';}?>>mumbai</option>
                        <option value="Vadodara" <?php if($city=="pune"){ echo 'selected';}?>>pune</option>
                      
                    </select>
                </td>
            </tr>
           
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="Male" required <?php
                    if($gender=="Male"){
                        echo'checked';
                    }
                    
                    ?>> Male
                    <input type="radio" name="gender" value="Female"
                    <?php
                    if($gender=="Female"){
                        echo'checked';
                    }
                    ?>> Female
                </td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td>
                    <input type="checkbox" name="hobbies" value="Tennis"<?php if($hobbies=="Tennis"){echo'checked';}?>> Tennis
                    <input type="checkbox" name="hobbies" value="Volleyball"<?php if($hobbies=="Volleyball"){echo'checked';}?>> Volleyball
                    <input type="checkbox" name="hobbies" value="Dance"<?php if($hobbies=="Dance"){echo'checked';}?>> Dance
                    <input type="checkbox" name="hobbies" value="Singing"<?php if($hobbies=="Singing"){echo'checked';}?>> Singing
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="submitBtn" value="Submit">
                </td>
            </tr>
            
        </table>
    </form>
 
        <center><a href="display.php">View  </a><center>
   
</body>
</html>