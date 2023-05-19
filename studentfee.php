<?php
include 'connect.php';

$afirstname=$amiddlename=$alastname=$adob=$aemail=$amyclass=$apassword=$user_id=$thisid=$thisdate=$thisamount=$mthisid=$mthisdate=$mthisamount=$omthisid=$omthisdate=$omthisamount='';

session_start();
	if(!isset($_SESSION['id']))
	{header("location:index.php");}

    




    if(isset($_SESSION['id'])){
      
            $thissql = "SELECT * FROM `users` WHERE `id`='{$_SESSION['id']}' ";
    

            $result = mysqli_query($conn, $thissql);

            if (mysqli_num_rows($result) > 0) {        
        
                while ($row = mysqli_fetch_assoc($result)) {
        
                    $afirstname=$row['firstname'];
                    $amiddlename=$row['middlename'];
                    $alastname=$row['lastname'];
                    $adob=$row['dob'];
                    $aemail=$row['email'];
                    $amyclass=$row['myclass'];
                    $apassword=$row['password'];
                    $userid=$row['id'];
                } }else{
                    echo 'there are no records to be printed';
                }}
        







    

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
        include 'studentnav.php';

        $mysql="select * from payment where student_id=$userid and term_id=1";
        $result=mysqli_query($conn,$mysql);
        if (mysqli_num_rows($result) > 0) {        
        
            while ($row = mysqli_fetch_assoc($result)) {
                $thisid=$row['payment_id'];
                $thisdate=$row['payment_date'];
                $thisamount=$row['amount'];



            }
            }



        ?></div>


   <table>
    <h2>Term One</h2>
    <thead>
        <tr>
            <td>Receipt Number</td>
            <td>Payment Date</td>
            <td>Debit</td>
            <td>Credit</td>
            <td>Balance</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo "2725".$thisid; ?></td>
            <td><?php echo $thisdate?></td>
            <td>20000.00</td>
            <td><?php echo $thisamount  ?></td>
            <td><?php  echo 20000.00-$thisamount; ?></td>
        </tr>
    </tbody>


   </table>

   <?php 
   $mysql="select * from payment where student_id=$userid and term_id=2";
   $result=mysqli_query($conn,$mysql);
   if (mysqli_num_rows($result) > 0) {        
   
       while ($row = mysqli_fetch_assoc($result)) {
           $mthisid=$row['payment_id'];
           $mthisdate=$row['payment_date'];
           $mthisamount=$row['amount'];



       }
       }
   ?>

<table>
    <h2>Term Two</h2>
    <thead>
        <tr>
            <td>Receipt Number</td>
            <td>Payment Date</td>
            <td>Debit</td>
            <td>Credit</td>
            <td>Balance</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo "2725".$mthisid; ?></td>
            <td><?php echo $mthisdate?></td>
            <td>20000.00</td>
            <td><?php echo $mthisamount  ?></td>
            <td><?php  echo 20000.00-$mthisamount; ?></td>
        </tr>
    </tbody>


   </table>


   <?php 
   $mysql="select * from payment where student_id=$userid and term_id=3";
   $result=mysqli_query($conn,$mysql);
   if (mysqli_num_rows($result) > 0) {        
   
       while ($row = mysqli_fetch_assoc($result)) {
           $omthisid=$row['payment_id'];
           $omthisdate=$row['payment_date'];
           $omthisamount=$row['amount'];



       }
       }
   ?>

<table>
    <h2>Term Three</h2>
    <thead>
        <tr>
            <td>Receipt Number</td>
            <td>Payment Date</td>
            <td>Debit</td>
            <td>Credit</td>
            <td>Balance</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo "2725".$omthisid; ?></td>
            <td><?php echo $omthisdate?></td>
            <td>20000.00</td>
            <td><?php echo $omthisamount  ?></td>
            <td><?php  echo 20000.00-$omthisamount; ?></td>
        </tr>
    </tbody>


   </table>
</body>
</html>