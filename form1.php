<?php
include 'connect.php';


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="table.css">
</head>
<body><center>

<div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'adminnavbar.php';
        ?></div>




 
    <p id="f1">
        <?php
       $sql="select id,firstname, middlename, lastname,myclass
       from users
       where myclass='Form 1'; ";
       $result = mysqli_query($conn, $sql);
       if (mysqli_num_rows($result) > 0) {
        echo "<table> ";
        echo "<thead> <tr>";
        echo "<th>addmission</th>";
        echo "<th>First Name</th>";
        echo "<th>Middle Name</th>";
        echo "<th>Last name</th>";
        echo "<th>Class</th>";
        echo "<th>Action</th>";
        
        echo "</thead> </tr>";

        echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']. "</td>";
            echo "<td>".$row['firstname']. "</td>";
            echo "<td>".$row['middlename']. "</td>";
            echo "<td>".$row['lastname']. "</td>";
            echo "<td>".$row['myclass']. "</td>";
            echo "<td><a href='update.php?id=".$row['id']."'>    <i class=\"fa fa-edit\" style=\"font-size:18px; color:black\"></i></a></td>";
            

            echo "</tr>";
        }

        echo "</tbody>";


       echo "</table>"; }
        ?>
    </p>
    
   


    </center>
</body>
</html>
    
