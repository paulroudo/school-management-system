<?php
include 'connect.php';
$abookname=$acategory=$author=$apublisher=$aisbn=$copies=$searchresult='';

if(isset($_POST['search']))
{
$valuetosearch=$_POST['valuetosearch'];
$query="select * from library where concat(`book_name`,`category`,`author`,`publisher`)LIKE '%" .$valuetosearch."%'";
$searchresult=filtertable($conn,$query);
}else{
$query="select * from library";
$searchresult=filtertable($conn,$query);
}
function filtertable($conn,$query){
$filterresult=mysqli_query($conn,$query);
return $filterresult;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
<div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'adminnavbar.php';
        ?></div><br/>
        <div><a style="float:right" href="addbook.php"><button>Add book</button></a></div><br/></br>
      <div>
        <div>
     <form action="library.php" method="POST">
        <input type="text" name="valuetosearch" id="valuetosearch" placeholder="Search">
        <input type="submit" name="search" value="Search">

    </form></div>
    <table>
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Category</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>ISBN</th>
                <th>Copies</th>
                <th>Action</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody><?php  
        
        
        if(mysqli_num_rows($searchresult)>0){
        while($row=mysqli_fetch_assoc($searchresult)){
            echo "<tr>";
           echo "<td>"; echo $row['book_name']; echo "</td>";
           echo "<td>"; echo $row['category']; echo "</td>";
           echo "<td>"; echo $row['author']; echo "</td>";
           echo "<td>";echo  $row['publisher']; echo "</td>";
           echo "<td>"; echo  $row['isbn']; echo "</td>";
           echo "<td>"; echo $row['copies']; echo "</td>";
           echo "<td>"; echo "<a href='borrow.php?book_no=".$row['book_no']."'><button>borrow</button></a>"; echo "</td>";
           echo "<td>"; echo "<a href='return.php?book_no=".$row['book_no']."'><button>return</button></a>"; echo "</td>";
           echo "<td>"; echo "<a href='deletebook.php?book_no=".$row['book_no']."'><button>delete</button></a>"; echo "</td>";
           echo "</tr>";
        }
        }
        
        ?></tbody>
    </table>
    
</body>
</html>