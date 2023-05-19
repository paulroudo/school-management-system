<?php
include 'connect.php';

$student_id=$user_id="";
if (isset($_GET['book_no'])) {

    $user_id = $_GET['book_no'];
}




    $msql="update library set copies=copies-1 where book_no=$user_id;";
    $result=mysqli_query($conn,$msql);


header('location:library.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php


?>