<?php
include_once("connect.php");
$result= mysqli_query($host,"SELECT name.id,name.names,name.name_work,name.category
FROM work
INNER JOIN (name_work)
ON work.id_work
JOIN category
ON name.id")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">

    <title>Arkademy Bootcamp</title>
</head>
<body>
    <table border=1px>
        <tr>
            <th>
                Name
            </th>
            <th>
                Work
            </th>
            <th>
                Salary
            </th>
            <th>
                Action
            </th>
        </tr>
        
    <?php  
        while($data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$data['names']."</td>";
        echo "<td>".$data['work']."</td>";
        echo "<td>".$data['category']."</td>";    
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";        
        }
    ?>
    </table>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="js/popper.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>