<?php
session_start();
include 'connect.php';

$error="";
$aname="";
$apassword="";
$id="";

if(isset($_POST['submit'])){
    $name=$_POST['firstname'];
    $apassword=$_POST['password'];

    $sql="select * from users where firstname='".$name."'  AND password='".$apassword."' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0) {
//$row=mysqli_fetch_array($result);
while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];

if($row["role"]=="student"){
	$_SESSION['id']=$id;
	header('location:studenthome.php');


}elseif($row["role"]=="teacher"){
	$_SESSION['firstname']=$name;
	header('location:teacherhome.php');

}elseif($row["role"]=="admin"){
	$_SESSION['firstname']=$name;
	header('location:adminhome.php');

	
}else{

   $error="username or password do not match";
   echo "<script> document.getElementById('error').innerHTML = 'username or password do not match'; </script>";



	}

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



<body>
    <center>
    <div class="thisform">
        <h2>Login</h2>
       <form method="POST" action="index.php">
        <input type="text" id="firstname" name="firstname" placeholder="First Name" required><br/><br/>
        <input type="password" id="password" name="password" placeholder="password"  required><br/><br/>
        <span id="error"><?php  echo $error;?></span>
        <input  type="submit" value="login" name="submit" id="submit"><br/><br/>
        <span>Not a member? <a href="sign.php">Create account</a></span>
        <br/>
        <br/>
        
</form>

</div>
    </center>
</body>
</html>