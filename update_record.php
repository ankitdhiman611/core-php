<?php 

if(!empty($_POST["name"]) and !empty($_POST["roll"]) and !empty($_POST["branch"]) and !empty($_POST["message"]))
{
    $id=$_POST["id"];
    $nm=$_POST["name"];
    $rll=$_POST["roll"];
    $brnch=$_POST["branch"];
    $msg=$_POST["message"];
    include "config.php";
            $query="update students set name='$nm',branch='$brnch',message='$msg',roll='$rll' where id='$id' ";
            if(mysqli_query($con,$query)==true)
            {
                echo "<script>alert('record Updated Successfuly');</script>";
                echo "<script> window.location='display.php';</script>";
            }
            else 
            {
                echo "<script>alert('record Not Updated');</script>";
                echo "<script> window.location='display.php';</script>";
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
    <h1 align="center">Update Student  Records</h1>
    <form action="update_record.php" method="post" align="center">
    Student Id <input type="number" name="id" value="<?php echo $_GET['id']; ?>" readonly  required><br><br>
    Student Name <input type="text" name="name" value="<?php echo $_GET['name']; ?>"  required><br><br>
        Student Roll-no <input type="number" name="roll"  value="<?php echo $_GET['roll']; ?>" required><br><br>

        Student branch <input type="text" name="branch"  value="<?php echo $_GET['branch']; ?>" required><br><br>
        message <textarea cols="10" rows="10" name="message"><?php echo $_GET['message']; ?></textarea> <br><br>




        <button>Update Now</button>
    </form>

</body>
</html>