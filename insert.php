<!-- connection of the database and insertion of the data using post method in form and table   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn=mysqli_connect("localhost","root","","clg_db");
        if(isset($_POST['submit'])){
            $sql="insert into perfume values('".$_POST['id']."','".$_POST['name']."','".$_POST['cname']."','".$_POST['price']."')";
            mysqli_query($conn,$sql);
            echo"Record inserted";
        }
    ?>

    <form method="post">
        <table>
            <tr>
                <td><label>Perfume Store  </label></td>
                <td> <input type="text" name="id"></td>
            </tr>
            <tr>
                <td><label>Perfume Name  </label></td>
                <td> <input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label>Company Name </label></td>
                <td> <input type="text" name="cname"></td>
            </tr>
            <tr>
                <td><label>Perfume Price </label></td>
                <td> <input type="text" name="price"></td>
            </tr>
            
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>