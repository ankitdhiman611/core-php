<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <table border="2" align="center" class="table table-success table-striped ">
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Roll-No</th>
            <th>Branch</th>
            <th>Address</th>
        </tr>
        <?php
        include "config.php";
        $q="select * from students";
        $z=mysqli_query($con,$q);
        while($rows=mysqli_fetch_array($z))
        {
            echo "<tr align='center'>";
            echo "<td>";
            echo $rows["id"];
            echo "</td>";
            echo "<td>";
            echo $rows["name"];
            echo "</td>";
            echo "<td>";
            echo $rows["roll"];
            echo "</td>";
            echo "<td>";
            echo $rows["branch"];
            echo "</td>";
            echo "<td>";
            echo $rows["message"];
            echo "</td>";
            echo "</tr>";
        }
       


        ?>
        
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>