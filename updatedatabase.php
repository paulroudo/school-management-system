<?php 

include 'connect.php';

$thismark=$_POST['marks'];
$another=$_POST['another'];
$thisid=$_POST['thisid'];
$term=$_POST['term'];
$subject=$_POST['subject'];
$class=$_POST['class'];



if($thismark>(-1)){
     if($another==1){
         $sql="update grade set marks='$thismark' where student_id='$thisid' and exam_id='$term' and subject_id='$subject';";

$result=mysqli_query($conn,$sql);
if($result){
echo " UPDATED ";
}else{
echo 'result has not been updated';

    printf("Error: %s\n", mysqli_error($conn));
    exit();

}

     }else{
         $sql="insert into grade (student_id,exam_id,subject_id,class_id,marks) values ('$thisid','$term','$subject','$class','$thismark')";
         $result=mysqli_query($conn,$sql);
         if($result){
           echo " INSERTED ";
         }else{
            echo 'result has not been inserted';
            
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            
         }
     }
 }

 echo $thismark ." ". $another." ".$thisid." ".$term." ". $subject." ".$class;
 header('location:insertgrades.php');

     ?>