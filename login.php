<?php
session_start();
include "config.php";
if(!empty($_POST['email']) and !empty($_POST['password']))
{
    $em=$_POST['email'];
    $pass=md5($_POST['password']);
    $q="select * from signup where email='$em' and password='$pass'";
    $flag=0;
    $z=mysqli_query($con,$q);
    while($rows=mysqli_fetch_array($z))
    {
        $flag=1;
        $_SESSION["matchit"]=$em;
    }
    if($flag==0)
    {
        $message="incorrect email and password";
    }
    else
    {
        echo "<script>window.location='dashboard.php';</script>";
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
    <h1>Login</h1>
    <form action="login.php" method="post">
        Enter your email id :<input type="email" name="email" required><br><br>
        Enter your password :<input type="password" name="password" required><br><br>
        <button>Login</button><br><br>
        <a href="newuser.php">Create an Account..</a><br><br>
        <a href="forgotpass.php">Forgot Pasword..</a><br><br>
    </form>
</center>
<?php
if(!empty($message))
{
    echo "<h1 align='center'>$message</h1>";
}
?>
</body>
</html>