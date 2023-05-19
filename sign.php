<?php
include 'connect.php';
if(isset($_POST['submit'])){

   $afirstname=$_POST['firstname'];
   $amiddlename =$_POST['middlename'];
    $alastname=$_POST['lastname'];
   $adate =$_POST['date'];
   $aemail=$_POST['email'];
   $amyclass =$_POST['myclass'];
    $agender=$_POST['gender'];
    $apassword=$_POST['password'];
    $arole=$_POST['role'];

    $sql="INSERT INTO users (`firstname`, `middlename`, `lastname`, `dob`, `email`, `myclass`, `gender`, `password`, `role`) 
    VALUES ('$afirstname', '$amiddlename', '$alastname', '$adate', '$aemail', '$amyclass', '$agender', '$apassword', '$arole');";
   $result=mysqli_query($conn,$sql);
   if(!$result){
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }else{
    if($arole=='teacher'){
        header("location:teacherhome.php");
    } else if($arole=='student'){
        header("location:studenthome.php");
    }
}

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
    <br/>
    <br/>
    <br/>
    <br/>

<div class="thisform">
<br/>
    <br/>
    <br/>
    <br/>
    <h2>Register Form</h2>
    <form method='POST' action='sign.php' onsubmit='return validateform()' >
        <input type="text" name="firstname" id="firstname" placeholder="First Name" required><br/><br/>
        <input type="text" name="middlename" id="middlename" placeholder="Middle Name" required   ><br/><br/>
        <input type="text" name="lastname" id="lastname" placeholder="Last Name" required><br/><br/>
        <input type="date" name="date" id="date" placeholder="Date of Birth" required><br/><br/>
        <input type="email" name="email" id="email" placeholder="Email Address" required><br/><br/>
        <datalist id="myclass">
            <option value="Form 1">
            <option value="Form 2">
            <option value="Form 3">
            <option value="Form 4">
        </datalist>
        <input list="myclass" name="myclass" id="myclass" placeholder="Class"><br/><br/>
        <datalist id="gender">
            <option value="male">
                <option value="female">
        </datalist>
        <input list="gender" name="gender" id="gender" placeholder="Gender" required><br/><br/>
        <input type="password" name="password" id="password" placeholder="Password" required><br/><br/>
        <input type="password" name="password2" id="password2" placeholder="Confirm Password" required><br/><span id="passworderror"style="color:red;"></span><br/><br/>
        <datalist id="role">
            <option value="student">
                <option value="teacher">
        </datalist>
        <input list="role" name="role" id="role" placeholder="role" required><br/><br/>
        <input type="submit" name="submit" value="register" id="register"><br/><br/>
        <a href="index.php"><input type="button" value="Log In" name="login" onclick=></a>
<br/>
<br/>


    </form>
</div>

</center>
</body>
</html>