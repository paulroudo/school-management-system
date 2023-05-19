<?php
include 'connect.php';

$aclass=$aterm='';
$term=$class=0;
$thismath=$thiseng=$thiskisw=$thisbio=$thischem=$thisphys=$thisgeo=$thishist=$thiscre=$thiscomp=0;

$afirstname=$amiddlename=$alastname=$adob=$aemail=$amyclass=$apassword=$userid='';

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
<body><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'studentnav.php';
        ?></div>

<center>

<?php
$term=1;

while ($term<4){
    echo "<br/>";
    
    if($term==1){
        echo "<h2><u>";
        echo "Term 1";
        echo "</h2></u>";
    }elseif($term==2){
        echo "<h2><u>";
        echo "Term 2";
        echo "</h2></u>";
    }elseif($term==3){
        echo "<h2><u>";
        echo "Term 3";
        echo "</h2></u>";
    }

    

  echo "  <table>
        <thead>
            <tr>
                <td><b>
                    MATH</b>
                </td>
                <td><b>
                    ENG</b>
                </td>
                <td><b>
                    KISW</b>
                </td>
                <td><b>
                    BIO</b>
                </td>
                <td><b>
                    CHEM</b>
                </td>
                <td><b>
                    PHYS</b>
                </td>
                <td><b>
                    GEO</b>
                </td>
                <td><b>
                    CRE</b>
                </td>
                <td><b>
                    HIST</b>
                </td>
                <td><b>
                    COMP</b>
                </td>
                <td><b>
                TOTAL</b>
            </td>
                
            </tr>
        </thead>";
    
$thissql="select marks from grade where student_id='$userid' and subject_id='1' and exam_id='$term' ;";



$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){

echo "<tbody>";
echo "<td>";
    $thismath=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='2' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
   
    echo "<td>";
    $thiseng=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
   
   
}


$thissql="select marks from grade where student_id='$userid' and subject_id='3' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    
    echo "<td>";
    $thiskisw=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='4' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
   
    echo "<td>";
    $thisbio=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='5' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    
    echo "<td>";
    $thischem=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='6' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
   
    echo "<td>";
    $thisphys=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='7' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
   
    echo "<td>";
    $thisgeo=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='8' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
   
    echo "<td>";
    $thiscre=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='9' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    
    echo "<td>";
    $thishist=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='$userid' and subject_id='10' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
   
    echo "<td>";
    $thiscomp=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
    
}

echo "<td><b>";
echo $thismath+$thiseng+$thiskisw+$thisbio+$thischem+$thisphys+$thisgeo+$thishist+$thiscre+$thiscomp;
echo "</b></td>";
$term=$term+1;


echo "</tbody> </table>";
echo "<br/>";
}

?>


</center>
</body>
</html>