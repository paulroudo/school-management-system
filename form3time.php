<?php
include "connect.php";

$mon_8_00 = "";
$mon_9_00 = "";
$mon_10_00 = "";
$mon_10_30 = "";
$mon_11_30 = "";
$mon_1_00 = "";
$mon_2_00 = "";
$mon_3_00 ="";
$tue_8_00 = "";
$tue_9_00 = "";
$tue_10_00 = "";
$tue_10_30 ="";
$tue_11_30 ="";
$tue_1_00 = "";
$tue_2_00 = "";
$tue_3_00 = "";
$wed_8_00 = "";
$wed_9_00 = "";
$wed_10_00 = "";
$wed_10_30 = "";
$wed_11_30 = "";
$wed_1_00 = "";
$wed_2_00 = "";
$wed_3_00 = "";
$thu_8_00 = "";
$thu_9_00 = "";
$thu_10_00 = "";
$thu_10_30 = "";
$thu_11_30 = "";
$thu_1_00 = "";
$thu_2_00 = "";
$thu_3_00 ="";
$fri_8_00 = "";
$fri_9_00 = "";
$fri_10_00 = "";
$fri_10_30 = "";
$fri_11_30 = "";
$fri_1_00 = "";
$fri_2_00 = "";
$fri_3_00 = "";
$class_id = "";

$sql="select * from class_timetable where class_id=3;";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){

    $mon_8_00 = $row['mon_8_00'];
$mon_9_00 = $row['mon_9_00'];
$mon_10_00 = $row['mon_10_00'];
$mon_10_30 = $row['mon_10_30'];
$mon_11_30 = $row['mon_11_30'];
$mon_1_00 = $row['mon_1_00'];
$mon_2_00 = $row['mon_2_00'];
$mon_3_00 =$row['mon_3_00'];
$tue_8_00 = $row['tue_8_00'];
$tue_9_00 = $row['tue_9_00'];
$tue_10_00 = $row['tue_10_00'];
$tue_10_30 = $row['tue_10_30'];
$tue_11_30 =$row['tue_11_30'];
$tue_1_00 = $row['tue_1_00'];
$tue_2_00 = $row['tue_2_00'];
$tue_3_00 = $row['tue_3_00'];
$wed_8_00 = $row['wed_8_00'];
$wed_9_00 = $row['wed_9_00'];
$wed_10_00 = $row['wed_10_00'];
$wed_10_30 = $row['wed_10_30'];
$wed_11_30 = $row['wed_11_30'];
$wed_1_00 = $row['wed_1_00'];
$wed_2_00 = $row['wed_2_00'];
$wed_3_00 = $row['wed_3_00'];
$thu_8_00 = $row['thu_8_00'];
$thu_9_00 = $row['thu_9_00'];
$thu_10_00 = $row['thu_10_00'];
$thu_10_30 = $row['thu_10_30'];
$thu_11_30 = $row['thu_11_30'];
$thu_1_00 = $row['thu_1_00'];
$thu_2_00 = $row['thu_2_00'];
$thu_3_00 =$row['thu_3_00'];
$fri_8_00 = $row['fri_8_00'];
$fri_9_00 = $row['fri_9_00'];
$fri_10_00 = $row['fri_10_00'];
$fri_10_30 = $row['fri_10_30'];
$fri_11_30 = $row['fri_11_30'];
$fri_1_00 = $row['fri_1_00'];
$fri_2_00 = $row['fri_2_00'];
$fri_3_00 = $row['fri_3_00'];
$class_id = $row['class_id'];
}



// Retrieve the form data using the $_POST superglobal array
if(isset($_POST['submit'])){
$mon_8_00 = $_POST['mon_8_00'];
$mon_9_00 = $_POST['mon_9_00'];
$mon_10_00 = $_POST['mon_10_00'];
$mon_10_30 = $_POST['mon_10_30'];
$mon_11_30 = $_POST['mon_11_30'];
$mon_1_00 = $_POST['mon_1_00'];
$mon_2_00 = $_POST['mon_2_00'];
$mon_3_00 = $_POST['mon_3_00'];
$tue_8_00 = $_POST['tue_8_00'];
$tue_9_00 = $_POST['tue_9_00'];
$tue_10_00 = $_POST['tue_10_00'];
$tue_10_30 = $_POST['tue_10_30'];
$tue_11_30 = $_POST['tue_11_30'];
$tue_1_00 = $_POST['tue_1_00'];
$tue_2_00 = $_POST['tue_2_00'];
$tue_3_00 = $_POST['tue_3_00'];
$wed_8_00 = $_POST['wed_8_00'];
$wed_9_00 = $_POST['wed_9_00'];
$wed_10_00 = $_POST['wed_10_00'];
$wed_10_30 = $_POST['wed_10_30'];
$wed_11_30 = $_POST['wed_11_30'];
$wed_1_00 = $_POST['wed_1_00'];
$wed_2_00 = $_POST['wed_2_00'];
$wed_3_00 = $_POST['wed_3_00'];
$thu_8_00 = $_POST['thu_8_00'];
$thu_9_00 = $_POST['thu_9_00'];
$thu_10_00 = $_POST['thu_10_00'];
$thu_10_30 = $_POST['thu_10_30'];
$thu_11_30 = $_POST['thu_11_30'];
$thu_1_00 = $_POST['thu_1_00'];
$thu_2_00 = $_POST['thu_2_00'];
$thu_3_00 = $_POST['thu_3_00'];
$fri_8_00 = $_POST['fri_8_00'];
$fri_9_00 = $_POST['fri_9_00'];
$fri_10_00 = $_POST['fri_10_00'];
$fri_10_30 = $_POST['fri_10_30'];
$fri_11_30 = $_POST['fri_11_30'];
$fri_1_00 = $_POST['fri_1_00'];
$fri_2_00 = $_POST['fri_2_00'];
$fri_3_00 = $_POST['fri_3_00'];
$class_id = $_POST['class_id'];



$sql = "UPDATE class_timetable SET mon_8_00='$mon_8_00', mon_9_00='$mon_9_00', mon_10_00='$mon_10_00', mon_10_30='$mon_10_30', mon_11_30='$mon_11_30', mon_1_00='$mon_1_00', mon_2_00='$mon_2_00', mon_3_00='$mon_3_00', tue_8_00='$tue_8_00', tue_9_00='$tue_9_00', tue_10_00='$tue_10_00', tue_10_30='$tue_10_30', tue_11_30='$tue_11_30', tue_1_00='$tue_1_00', tue_2_00='$tue_2_00', tue_3_00='$tue_3_00', wed_8_00='$wed_8_00', wed_9_00='$wed_9_00', wed_10_00='$wed_10_00', wed_10_30='$wed_10_30', wed_11_30='$wed_11_30', wed_1_00='$wed_1_00', wed_2_00='$wed_2_00', wed_3_00='$wed_3_00', thu_8_00='$thu_8_00', thu_9_00='$thu_9_00', thu_10_00='$thu_10_00', thu_10_30='$thu_10_30', thu_11_30='$thu_11_30', thu_1_00='$thu_1_00', thu_2_00='$thu_2_00', thu_3_00='$thu_3_00', fri_8_00='$fri_8_00', fri_9_00='$fri_9_00', fri_10_00='$fri_10_00', fri_10_30='$fri_10_30', fri_11_30='$fri_11_30', fri_1_00='$fri_1_00', fri_2_00='$fri_2_00', fri_3_00='$fri_3_00' WHERE class_id=3";

      if (mysqli_query($conn,$sql)) {
        echo "Timetable updated successfully";
    }

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Update Class Timetable For Form 1</title>
    <style>
        label{
            text-align:left;
        }
        </style>
  </head>
  <body ><div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'adminnavbar.php';
        ?></div><CENTER>
    <h1>Update Class Timetable For Form 3</h1>
    <form method="POST" action="form3time.php">
        <fieldset>
      <label for="mon_8_00">Monday 8:00 AM:</label>
      <input type="text" name="mon_8_00" id="mon_8_00" value="<?php echo $mon_8_00;?>"><br>

      <label for="mon_9_00">Monday 9:00 AM:</label>
      <input type="text" name="mon_9_00" id="mon_9_00" value="<?php echo $mon_9_00;?>"><br>

      <label for="mon_10_00">Monday 10:00 AM:</label>
      <input type="text" name="mon_10_00" id="mon_10_00" value="<?php echo $mon_10_00;?>"><br>

      <label for="mon_10_30">Monday 10:30 AM:</label>
      <input type="text" name="mon_10_30" id="mon_10_30" value="<?php echo $mon_10_30;?>"><br>

      <label for="mon_11_30">Monday 11:30 AM:</label>
      <input type="text" name="mon_11_30" id="mon_11_30" value="<?php echo $mon_11_30;?>"><br>

      <label for="mon_1_00">Monday 1:00 PM:</label>
      <input type="text" name="mon_1_00" id="mon_1_00" value="<?php echo $mon_1_00;?>"><br>

      <label for="mon_2_00">Monday 2:00 PM:</label>
      <input type="text" name="mon_2_00" id="mon_2_00" value="<?php echo $mon_2_00;?>"><br>

      <label for="mon_3_00">Monday 3:00 PM:</label>
      <input type="text" name="mon_3_00" id="mon_3_00" value="<?php echo $mon_3_00;?>"><br>

</fieldset><br/>
<fieldset>

      <label for="tue_8_00">Tuesday 8:00 AM:</label>
      <input type="text" name="tue_8_00" id="tue_8_00" value="<?php echo $tue_8_00;?>"><br>

      <label for="tue_9_00">Tuesday 9:00 AM:</label>
      <input type="text" name="tue_9_00" id="tue_9_00" value="<?php echo $tue_9_00;?>"><br>

      <label for="tue_10_00">Tuesday 10:00 AM:</label>
      <input type="text" name="tue_10_00" id="tue_10_00" value="<?php echo $tue_10_00;?>"><br>

      <label for="tue_10_30">Tuesday 10:30 AM:</label>
      <input type="text" name="tue_10_30" id="tue_10_30" value="<?php echo $tue_10_30;?>"><br>

      <label for="tue_11_30">Tuesday 11:30 AM:</label>
      <input type="text" name="tue_11_30" id="tue_11_30" value="<?php echo $tue_11_30;?>"><br>

      <label for="tue_1_00">Tuesday 1:00 PM:</label>
      <input type="text" name="tue_1_00" id="tue_1_00" value="<?php echo $tue_1_00;?>"><br>

      <label for="tue_2_00">Tuesday 2:00 PM:</label>
      <input type="text" name="tue_2_00" id="tue_2_00" value="<?php echo $tue_2_00;?>"><br>

      <label for="tue_3_00">Tuesday 3:00 PM:</label>
      <input type="text" name="tue_3_00" id="tue_3_00" value="<?php echo $tue_3_00;?>"><br>

</fieldset><br/>
<fieldset>

      <label for="wed_8_00">Wednesday 8:00 AM:</label>
      <input type="text" name="wed_8_00" id="wed_8_00" value="<?php echo $wed_8_00;?>"><br>

      <label for="wed_9_00">Wednesday 9:00 AM:</label>
      <input type="text" name="wed_9_00" id="wed_9_00" value="<?php echo $wed_9_00;?>"><br>

      <label for="wed_10_00">Wednesday 10:00 AM:</label>
      <input type="text" name="wed_10_00" id="wed_10_00" value="<?php echo $wed_10_00;?>"><br>

      <label for="wed_10_30">Wednesday 10:30 AM:</label>
      <input type="text" name="wed_10_30" id="wed_10_30" value="<?php echo $wed_10_30;?>"><br>

      <label for="wed_11_30">Wednesday 11:30 AM:</label>
      <input type="text" name="wed_11_30" id="wed_11_30" value="<?php echo $wed_11_30;?>"><br>

      <label for="wed_1_00">Wednesday 1:00 PM:</label>
      <input type="text" name="wed_1_00" id="wed_1_00" value="<?php echo $wed_1_00;?>"><br>

      <label for="wed_2_00">Wednesday 2:00 PM:</label>
      <input type="text" name="wed_2_00" id="wed_2_00" value="<?php echo $wed_2_00;?>"><br>

      <label for="wed_3_00">Wednesday 3:00 PM:</label>
      <input type="text" name="wed_3_00" id="wed_3_00" value="<?php echo $wed_3_00;?>"><br>

</fieldset><br/>
<fieldset>

      <label for="thu_8_00">Thursday 8:00 AM:</label>
      <input type="text" name="thu_8_00" id="thu_8_00" value="<?php echo $thu_8_00;?>"><br>

      <label for="thu_9_00">Thursday 9:00 AM:</label>
      <input type="text" name="thu_9_00" id="thu_9_00" value="<?php echo $thu_9_00;?>"><br>

      <label for="thu_10_00">Thursday 10:00 AM:</label>
      <input type="text" name="thu_10_00" id="thu_10_00" value="<?php echo $thu_10_00;?>"><br>

      <label for="thu_10_30">Thursday 10:30 AM:</label>
      <input type="text" name="thu_10_30" id="thu_10_30" value="<?php echo $thu_10_30;?>"><br>

      <label for="thu_11_30">Thursday 11:30 AM:</label>
      <input type="text" name="thu_11_30" id="thu_11_30" value="<?php echo $thu_11_30;?>"><br>

      <label for="thu_1_00">Thursday 1:00 PM:</label>
      <input type="text" name="thu_1_00" id="thu_1_00" value="<?php echo $thu_1_00;?>"><br>

      <label for="thu_2_00">Thursday 2:00 PM:</label>
      <input type="text" name="thu_2_00" id="thu_2_00" value="<?php echo $thu_2_00;?>"><br>

      <label for="thu_3_00">Thursday 3:00 PM:</label>
      <input type="text" name="thu_3_00" id="thu_3_00" value="<?php echo $thu_3_00;?>"><br>

</fieldset><br/>
<fieldset>
      
      <label for="fri_8_00">Friday 8:00 AM:</label>
      <input type="text" name="fri_8_00" id="fri_8_00" value="<?php echo $fri_8_00;?>"><br>

      <label for="fri_9_00">Friday 9:00 AM:</label>
      <input type="text" name="fri_9_00" id="fri_9_00" value="<?php echo $fri_9_00;?>"><br>



      <label for="fri_10_00">Friday 10:00 AM:</label>
      <input type="text" name="fri_10_00" id="fri_10_00" value="<?php echo $fri_10_00;?>"><br>

      <label for="fri_10_30">Friday 10:30 AM:</label>
      <input type="text" name="fri_10_30" id="fri_10_30" value="<?php echo $fri_10_30;?>"><br>

      <label for="fri_11_30">Friday 11:30 AM:</label>
      <input type="text" name="fri_11_30" id="fri_11_30" value="<?php echo $fri_11_30;?>"><br>

      <label for="fri_1_00">Friday 1:00 AM:</label>
      <input type="text" name="fri_1_00" id="fri_1_00" value="<?php echo $fri_1_00;?>"><br>

      <label for="fri_2_00">Friday 2:00 AM:</label>
      <input type="text" name="fri_2_00" id="fri_2_00" value="<?php echo $fri_2_00;?>"><br>

      <label for="fri_3_00">Friday 3:00 AM:</label>
      <input type="text" name="fri_3_00" id="fri_3_00" value="<?php echo $fri_3_00;?>"><br>
</fieldset>

      <input type="hidden" name="class_id" value=1>

      <input type="submit" name="submit" value="update">

</form>
</body></CENTER>
</html>
