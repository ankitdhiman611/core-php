<?php

include "config.php";
if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['gender']) and !empty($_POST['state']) and !empty($_POST['address']))
{
    $nm=$_POST['name'];
    $em=$_POST['email'];
    $psw=md5($_POST['password']);
    $gen=$_POST['gender'];
    $st=$_POST['state'];
    $adrs=$_POST['address'];
    $flag=0;
    $q1="select * from signup where email='$em'";
    $z1=mysqli_query($con,$q1);
    while($rows=mysqli_fetch_array($z1))
    {
        $flag=1;
    
        break;
    }
    if($flag==0)
    {
        $q="insert into signup(name,email,password,gender,state,address)values('$nm','$em','$psw','$gen','$st','$adrs')";
        if(mysqli_query($con,$q)===true)
        {
            echo "<script>alert('signup successfully');</script>";
            echo "<script>window.location='login.php';</script>";
        }
    }
   
    else
    {
        $message= "This  email id : $em  already exists..";
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
    <form action="newuser.php" method="post">
        Enter your name :<input type="name" name="name" required><br><br>
        Enter your email id :<input type="email" name="email" required><br><br>
        Enter your password :<input type="password" name="password" required><br><br>
        Enter your gender :<input type="radio" name="gender" required value="male">Male&nbsp;
        <input type="radio" name="gender" value="female">Female <br><br>
        Enter your State :<select name="state" required>
            <option selected disabled value="">Select State</option>
            <option>Haryana</option>
            <option>Punjab</option>
            <option>Rajastan</option>
            <option>himachal</option>
                        </select><br><br>
        Enter your address :<textarea  cols="10" rows="4" name="address" required></textarea><br><br>
        <button>Signup now</button><br><br>
        <a href="login.php">Already have an Account..</a><br><br>        
        
        
        <?php
        if(!empty($message))
        {
            echo $message;
        }
        
        ?>

    </form>


    </center>
    
</body>
</html>