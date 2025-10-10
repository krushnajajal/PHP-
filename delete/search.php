<?php
$conn=mysqli_connect("localhost","root","","clg_-db")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <h3 style="text-align:center;">User Records</h3>
    <table align="center" border="1" cellspacing="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>delete</th>
        </tr>
    <?php
        $result=mysqli_query($conn,"select * from del_db where name='".$_POST['txtSearch']."'");
        while($row=mysqli_fetch_assoc($result)){
            ?><tr>
            <td><?php echo $row['id']?><br></td>
            <td><?php echo $row['name']?></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Delete this record?')">Delete</a></td>

            </tr>
        <?php
        }
    ?>
    <a href="form.php">add</a>

   
</body>
</html>

