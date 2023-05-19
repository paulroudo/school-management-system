<?php
include 'connect.php';

$afirstname=$user_id=$thisamount='';

if(isset($_POST['update'])){
    
    $afirstname=$_POST['firstname'];
    
    $user_id = $_POST['user_id'];
    
$sql= "update payment set amount='$afirstname'
 
       where payment_id='$user_id';";


       $result=mysqli_query($conn,$sql);
       if(!$result){
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }else{
        echo "Fees has been updated successfully";
       }

}




if (isset($_GET['payment_id'])) {

    $user_id = $_GET['payment_id']; 

    $sql = "SELECT * FROM `payment` WHERE `payment_id`='$user_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {        

        while ($row = mysqli_fetch_assoc($result)) {

            $thisamount=$row['amount'];
            
            
           
        } }}






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


<body><center>
    <h2>Update Fee Amount</h2>
    <form method='POST' action='updatefee.php'  >
        <input type="number" name="firstname" id="firstname" value='<?php  echo $thisamount; ?>' required><br/><br/>
       
        <input type="hidden" name="user_id" value="<?php echo $user_id;  ?>">
       
        <input type="submit" name="update" value="update" id="update">
        


    </form>


</center>

    
</body>
</html>