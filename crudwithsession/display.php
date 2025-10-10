<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
</head>
<body>

    <h3 style="text-align:center;">User Records</h3>
    <table align="center" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Gender</th>
            <th>hobbies</th>
            <th>Action</th>
            <th>update</th>
        </tr>
        <?php
  $result = mysqli_query($conn, "select * from owncrud_tbl");
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['phno']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['hobbies']; ?></td>
                   <td><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Delete this record?')">Delete</a></td>
                    <td><a href="form.php?id=<?php echo $row['id'];?>" >Update</a></td>


             </tr>
        <?php }
        ?>
      
    </table>

    <div style="text-align:center; margin-top:20px;">
        <a href="form.php">add data</a>
    </div>
   <form method="POST" action="search.php">
                     <input type="text" name="txtSearch">
                    <input type="submit" name="btnSearch">
                </form>
                <a href="login.php">Login?</a>
</body>
</html>