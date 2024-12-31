<?php
if(!empty($_POST["n"]))
{

    $n=$_POST["n"];
    for($i=1;$i<=10;$i++)
    {
       echo $n."*".$i."=".($n*$i)."<br>";
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
<form action="" method="post">

Enter any value<input type="number" name="n" required><br><br>
<button>Click Here</button>

</form>
</body>
</html>
