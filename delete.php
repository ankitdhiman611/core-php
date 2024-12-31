<?php
if(!empty($_POST["roll"]))
{
    $rll=$_POST["roll"];
    include "config.php";
    $query="delete from students where roll='$rll'";
    if(mysqli_query($con,$query)==true)
    {
        $message="$rll has been deleted ";
    }
    else
    {
        $message="$rll has not deleted";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

        <h1>delete  student record</h1>
        <form action="delete.php" method="post">
        Enter your roll-no : <input type="number" name="roll" required><br><br>
        <button>Delete now</button>


        </form>
    <?php
    if(isset($message))
    {
        echo "<h1>$message</h1>";
    }
    ?>


    </center>
    
</body>
</html>