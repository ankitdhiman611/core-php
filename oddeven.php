<?php
if (!empty($_POST['a'])) {
    $ist = $_POST['a'];

    if ($ist % 2 == 0) {
        echo "<h2 style='color:pink'>$ist is an even number.</h2>";
    } else {
        echo "<h2 style='color:blue'>$ist is an odd number.</h2>";
    }
}

if (!empty($_POST['one']) && !empty($_POST['two']) && !empty($_POST['three']) && !empty($_POST['four']) && !empty($_POST['five'])) {
    $est = $_POST['one'];
    $ind = $_POST['two'];
    $ird = $_POST['three'];
    $ort = $_POST['four'];
    $ive = $_POST['five'];

    $total = $est + $ind + $ird + $ort + $ive;
    $percentage = $total / 500 * 100;
    echo "<h2>Your total is $total </h2><br>";
    echo "<h2> your percentage is $percentage</h2> <br>"; 

    if ($percentage <= 34) {
        echo "<h1 style='color:red'>you are Fail</h1>";
    } elseif ($percentage >= 35 && $percentage <= 70) {
        echo "<h1 style='color:green'> you are Pass</h1>";
    } elseif($percentage >=71) {
        echo "<h1 style='color:orange'> you are merit</h1>";
    }

}

if (!empty($_POST['age'])) {  
    
    $age = $_POST['age'];
    if($age <=18){
        echo "<h1 style='color:red'>you are not eligible to fill the form</h1>";
    }
    elseif($age >=19 && $age <=45){
        echo "<h1 style='color:green'>you are eligible to fill the form</h1>";
    }
    elseif($age >45){
        echo "<h1 style='color:orange'>you are overaged to fill the form</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .button 
        {
             background-color: #555555;
             color: white;
             padding:10px;
        }
  
    .button:hover
        {
             background-color: white; 
             color: black;
        }

    .heading
        {
            color:#34adab;
        }
    input
        {
        background-color:#d5f2f2;
        border-top:none;
        border-left:none;
        border-right:none;
        }    

    </style>
</head>
<body>
    <center>
    <div style="display:flex; justify-content:space-evenly; align-item:center; background-color:#d5f2f2;padding:20px;margin-top:100px">
        <div style="margin-top:30px;">
            <h1 class="heading">Odd/even number</h1>
    
        <form action="oddeven.php" method="post">
            Enter any value:<input type="number" name="a" required ><br><br>
            <input type="submit" value="Find Number" class="button"> <br><br>
</form><br><br><br>
</div>







<div style="margin-top:30px">
    <h1 class="heading">Students marks</h1>
<form action="oddeven.php" method="post">
        Enter your EVS marks: <input type="number"  name="one" required ><br><br>
        Enter your Maths marks:   <input type="number" name="two" required ><br><br>
        Enter your English marks:  <input type="number" name="three" required ><br><br>
        Enter your Science marks:  <input type="number" name="four" required ><br><br>
        Enter your Punjabi marks:  <input type="number" name="five" required ><br><br>

        <input type="submit" value="Find Percentage" class="button"><br><br>

</form> <br><br><br>

</div>

<div style="margin-top:30px">
    <h1 class="heading">Age</h1>
<form action="" method="post">

        Enter your age:<input type="number" name="age" required><br><br>
        <input type="submit" value="Check Eligibility" class="button">
</form>
</div>

</div>
</center>
</body>
</html>