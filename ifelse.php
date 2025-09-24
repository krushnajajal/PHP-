<!-- comparison of 2 numbers with dynamic data , no database used -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        1st number
        <input type="text" name="first"><br><br>
        2nd number
        <input type="text" name="second"><br><br>
        <br><input type="submit" name="btnsubmit">
    </form>
    <?php
        if(isset($_POST['btnsubmit']))
        {
            $a=$_POST['first'];
            $b=$_POST['second'];
            if($a<$b){
                echo"a is smaller";
            }
            else{
                echo"B is smaller";
            }
        }
    ?>

</body>
</html>