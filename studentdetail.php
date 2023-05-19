<?php
include 'connect.php';

$afirstname=$amiddlename=$alastname=$adob=$aemail=$amyclass=$apassword=$user_id='';

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
    <style>
        .container{
            margin: 25px 0;
    font-size:0.9em;
    min-width:400px;
    width:60%;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow :0, 0, 30px rgba(0,0,0,0.45);
        }
        .new{
        background-color: #009879;
        width:60%;
    color:#ffffff;
   
    font-weight:bold;}
    hr{
        border: 1px solid #009879;
        width:60%;
    }
        </style>
</head>
<body><center>
<div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'studentnav.php';
        ?></div>
 <span class="container">

    <p class="new"><b>First Name</b></p>
    <p><?php echo $afirstname; ?></p>
    <p class="new"><b>Middle Name</b></p>
    <p ><?php echo $amiddlename; ?></p>
    <p class="new"><b>Last Name</b></p>
    <p><?php echo $alastname; ?></p>
    <p class="new"><b>Date of Birth</b></p>
    <p><?php echo $adob; ?></p>
    <p class="new"><b>Email</b></p>
    <p><?php echo $aemail; ?></p>
    <p class="new"><b>Class</b></p>
    <p><?php echo $amyclass; ?></p>
    <hr/>
    <?php echo "<a href='update.php?id=$userid'><button>Update Details</button></a>" ?>
        </span>
            </center>
</body>
</html>