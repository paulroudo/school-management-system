<?php
include 'connect.php';

$afirstname=$amiddlename=$alastname=$adob=$aemail=$amyclass=$apassword=$user_id='';

if(isset($_POST['update'])){
    
    $afirstname=$_POST['firstname'];
    $amiddlename=$_POST['middlename'];
    $alastname=$_POST['lastname'];
    $adob=$_POST['date'];
    $aemail=$_POST['email'];
    $amyclass=$_POST['myclass'];
    $apassword=$_POST['password'];
    $user_id = $_POST['user_id'];
    
$sql= "update users set firstname='$afirstname',
 middlename='$amiddlename',
  lastname='$alastname',
   dob='$adob', 
   email='$aemail',
    myclass='$amyclass',
     password='$apassword'
       where id='$user_id';";


       $result=mysqli_query($conn,$sql);
       if(!$result){
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }else{
        echo "Your details have been updated successfully";
       }

}




if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {        

        while ($row = mysqli_fetch_assoc($result)) {

            $afirstname=$row['firstname'];
            $amiddlename=$row['middlename'];
            $alastname=$row['lastname'];
            $adob=$row['dob'];
            $aemail=$row['email'];
            $amyclass=$row['myclass'];
            $apassword=$row['password'];
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


<script>
    function validateform(){
        var password=document.getElementById('password').value;
        var password2=document.getElementById('password2').value;
        if(password!=password2){
            document.getElementById("passworderror").innerHTML="password do not match";
            document.getElementById("password2").style.borderColor = "red";
        return false;
        }
    }
</script>
<body><center>
    <h2>Update Form</h2>
    <form method='POST' action='update.php' onsubmit='return validateform()' >
        <input type="text" name="firstname" id="firstname" value='<?php  echo $afirstname; ?>'placeholder="First Name" required><br/><br/>
        <input type="text" name="middlename" id="middlename" value='<?php  echo $amiddlename; ?>' placeholder="Middle Name" required   ><br/><br/>
        <input type="text" name="lastname" id="lastname" value='<?php  echo $alastname; ?>' placeholder="Last Name" required><br/><br/>
        <input type="date" name="date" id="date" value='<?php  echo $adob; ?>' placeholder="Date of Birth" required><br/><br/>
        <input type="email" name="email" id="email" value='<?php  echo $aemail; ?>' placeholder="Email Address" required><br/><br/>
        <datalist id="myclass">
            <option value="Form 1">
            <option value="Form 2">
            <option value="Form 3">
            <option value="Form 4">
        </datalist>
        <input list="myclass" name="myclass" value='<?php  echo $amyclass; ?>' id="myclass" placeholder="Class"><br/><br/>
        
        <input type="password" name="password" id="password" placeholder="Password" required><br/><br/>
        <input type="password" name="password2" id="password2" placeholder="Confirm Password" required><br/><span id="passworderror"style="color:red;"></span><br/><br/>
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
       
        <input type="submit" name="update" value="update" id="update">
        


    </form>


</center>

    
</body>
</html>