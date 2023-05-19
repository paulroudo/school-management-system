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

        <?php
        $sql="SELECT users.id,payment.payment_id,users.firstname, users.lastname,users.myclass, payment.payment_date, payment.amount
        FROM users
        INNER JOIN payment
        ON users.id = payment.student_id
        where payment.term_id=1
        order by amount;";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 echo "<table> ";
 echo "<h2>Term One</h2>";
 echo "<thead> <tr>";
 echo "<th>Student ID</th>";
 echo "<th>First Name</th>";
 echo "<th>Last name</th>";
 echo "<th>Class</th>";
 echo "<th>Payment Date</th>";
 echo "<th>Amount</th>";
 echo "<th>Edit</th>";
 echo "</thead> </tr>";

 echo "<tbody>";
 while($row = mysqli_fetch_assoc($result)) {
     echo "<tr>";
     echo "<td>".$row['id']. "</td>";
     echo "<td>".$row['firstname']. "</td>";
     echo "<td>".$row['lastname']. "</td>";
     echo "<td>".$row['myclass']. "</td>";
     echo "<td>".$row['payment_date']. "</td>";
     echo "<td>".$row['amount']. "</td>";
     echo "<td><a href='updatefee.php?payment_id=".$row['payment_id']."'>    <i class=\"fa fa-edit\" style=\"font-size:18px; color:black\"></i></a></td>";
     


     echo "</tr>";
 }

 echo "</tbody>";


echo "</table>"; }

        ?>

    



</center>
</body>
</html>