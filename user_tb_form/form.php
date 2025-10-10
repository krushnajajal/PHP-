<?php
include 'connection.php';

if (isset($_POST['submitBtn'])) {
    $phno = $_POST['phno'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];

    $sql = "INSERT INTO user_data (phno, name, address, city, gender,hobbies) 
            VALUES ('$phno', '$name', '$address', '$city', '$gender','$hobbies')";
    mysqli_query($conn, $sql);
    echo "record added";
}
if(isset($_POST['submit']))
            {
                if(!empty($_GET['id']))
                {
                    $sql="update user_data set name='".$_POST['phno']."','".$_POST['name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['gender']."','".$_POST['hobbies']."' where id=$id";
                    mysqli_query($conn,$sql);
                    header('location:formdisplay.php');    
                }
                else
                {
                    $sql="insert into user_data values(NULL,'".$_POST['phno']."','".$_POST['name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['gender']."','".$_POST['hobbies']."')";
                    mysqli_query($conn,$sql);
                    echo "Record Added";
                }
            }  
?>

<!DOCTYPE html>
<html>
<head><title>Add Data</title></head>
<body>
    <form method="post" style="text-align:center">
        <table cellspacing="1" cellpadding="10" border="1px">
        <h3>Add Data</h3>
        <tr>
        <td>phone= <input type="text" name="phno" required></td><br><br>
        <td>name= <input type="text" name="name" required></td><br><br>
        <td>add address= <textarea name="address" required></textarea></td><br><br>
      <td>select  City=
        <select name="city" required>
            <option value="Surat">Surat</option>
            <option value="Ahmedabad">Ahmd</option>
            <option value="Vadodara">Anand</option>
        </select></td><br><br>
       <tr><td>select gender=</td>
        <td><input type="radio" name="gender" value="Male" required> Male</td>
        <td><input type="radio" name="gender" value="Female"> Female</td><br><br>
        <tr>
      <tr> check hobbies
        <td><label><input type="checkbox" name="hobbies" value="Tennis"> Tennis</label></td>
        <label><input type="checkbox" name="hobbies" value="Volleyball"> Volleyball</label>
        <label><input type="checkbox" name="hobbies" value="Dance"> Dance</label>
        <label><input type="checkbox" name="hobbies" value="Singing"> Singing</label>
        </tr>
        <br><br><input type="submit" name="submitBtn" value="Submit">
        </tr>
</table>
    </form>

    <div style="text-align:center; margin-top:20px;">
        <a href="formdisplay.php">View All Records</a>
    </div>
</body>
</html>