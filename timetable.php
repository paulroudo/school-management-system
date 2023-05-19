<?php
include 'connect.php';
	session_start();
	if(!isset($_SESSION['id']))
	{header("location:index.php"); }else{
        $id=$_SESSION['id'];
        $sql="select * from users where id=$id;";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $class=$row['myclass'];
            echo "my class is".$class;
            if($class=='Form 1'){
                header("location:timetable1.php");
            }elseif($class=='Form 2'){
                header("location:timetable2.php");
            }elseif($class=='Form 3'){
                header("location:timetable3.php");
            }elseif($class=='Form 4'){
                header("location:timetable4.php");
            }
        }

    };
	?>