<?php 

include "connect.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    // delete related records from the payment table
$msql = "DELETE FROM payment WHERE student_id = $user_id";
$mresult = $conn->query($msql);

    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>