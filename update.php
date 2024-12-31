<?php

if(!empty($_POST["name"]) and !empty($_POST["roll"]) and !empty($_POST["branch"]) and !empty($_POST["message"]))
{
    $nm=$_POST["name"];
    $rll=$_POST["roll"];
    $brnch=$_POST["branch"];
    $msg=$_POST["message"];
    include "config.php";

    $query="update students set name='$nm',branch='$brnch',message='$msg' where roll='$rll'";

    if(mysqli_query($con,$query)==true)
    {
        $message= "$nm record has been Updated";
    }
    else
    {
        $message= "$nm record not Updated";
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
    <h1 align="center">Update Student Data</h1>
    <form action="update.php" method="post" align="center">
        Enter your name : <input type="text" name="name" required><br><br>
        Enter your roll-no : <input type="number" name="roll" required><br><br>
        Enter your branch : <input type="text" name="branch" required><br><br>
        Enter your message : <textarea name="message" cols="10" rows="10"></textarea><br><br>
        <button>Update</button>
    </form>
    
    <?php
        if(isset($message))
        {
            echo "<h1 align='center'>$message</h1>";
        }
    ?>
    
</body>
</html>