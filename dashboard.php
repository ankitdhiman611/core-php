<?php
session_start();
if(empty($_SESSION["matchit"]))
{
    echo "<script>window.location='login.php';</script>";
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
    <h1 align="center">Welcome to Dashboard</h1>
    <center>
        <a href='logout.php'>logout</a>
    </center>
    
</body>
</html>