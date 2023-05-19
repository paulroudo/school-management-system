<?php 

include "connect.php"; 

if (isset($_GET['book_no'])) {

    $user_id = $_GET['book_no'];

    $sql = "DELETE FROM `library` WHERE `book_no`='$user_id'";

     $result = mysqli_query($conn,$sql);
     echo "this is a line of code that does not work at the moment";
     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('location:library.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;
        echo "this is a line of code that does not work at the moment";

    }

} 

?>