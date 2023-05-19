<?php
include 'connect.php';


if(isset($_POST['submit'])){

    $abooktitle=$_POST['booktitle'];
    $acategory=$_POST['category'];
    $aauthor=$_POST['author'];
    $apublisher=$_POST['publisher'];
    $aisbn=$_POST['isbn'];
    $acopies=$_POST['copies'];
$sql="INSERT INTO library (book_name, category, author, publisher, isbn, copies)
VALUES 
('$abooktitle', '$acategory', '$aauthor', '$apublisher', '$aisbn', '$acopies');";
$result=mysqli_query($conn,$sql);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body><center>

<div class="thisform">
    <form action="addbook.php" method="POST">
        <h2>Add book<h2>
            <input type="text" name="booktitle" id="booktitle" placeholder="Book Title" required><br/><br/>
            <input type="text" name="category" id="category" placeholder="Category" required><br/><br/>
            <input type="text" name="author" id="author" placeholder="Author" required><br/><br/>
            <input type="text" name="publisher" id="publisher" placeholder="Publisher" required><br/><br/>
            <input type="text" name="isbn" id="isbn" placeholder="ISBN" required><br/><br/>
            <input type="number" name="copies" id="copies" placeholder="Copies" required><br/><br/>
            <input type="submit" name="submit" value="ADD">
            
    </form>
</div>
</center>
</body>
</html>