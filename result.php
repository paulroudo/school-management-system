<?php
include 'connect.php';
$aclass=$aterm='';
$term=$class=0;
$thismath=$thiseng=$thiskisw=$thisbio=$thischem=$thisphys=$thisgeo=$thishist=$thiscre=$thiscomp=0;

if(isset($_POST['term'])){
    $aterm=$_POST['term'];
    if($aterm=="Term 1"){
$term=1;
    }elseif($aterm=="Term 2"){
        $term=2;
    }elseif($aterm=="Term 3"){
        $term=3;
    }
}
if(isset($_POST['class'])){
    $aclass=$_POST['class'];
    if($aclass=="Form 1"){
        $class=1;
    }else if($aclass=="Form 2"){
        $class=2;
    }else if($aclass=="Form 3"){
        $class=3;
    }else if($aclass=="Form 4"){
        $class=4;
    }
}

if(isset($_POST['term'])||isset($_POST['class'])){
$sql="update resultstatus set class='$class', term='$term' where id='1';";
$result=mysqli_query($conn,$sql);
}

$sql="select * from resultstatus";
$result=(mysqli_query($conn,$sql));
while($row=mysqli_fetch_assoc($result)){
    if($row['class']==1){
        $aclass="Form 1";
    }elseif($row['class']==2){
        $aclass="Form 2";
    }elseif($row['class']==3){
        $aclass="Form 3";
    }elseif($row['class']==4){
        $aclass="Form 4";
    }
    
    if($row['term']==1){
        $aterm="Term 1";
    }elseif($row['term']==2){
        $aterm="Term 2";
    }elseif($row['term']==3){
        $aterm="Term 3";
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
    <link rel="stylesheet" href="table.css">
</head>
<body><div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'adminnavbar.php';
        ?></div><center>


<form action="result.php" method="POST"><fieldset>
    select the class:
    <datalist id="class">
        <option value="Form 1"></option>
        <option value="Form 2">
        <option value="Form 3"></option>
        <option value="Form 4">
    </datalist>
    <input onchange="this.form.submit()" type="text" list="class" name="class" value="<?php echo  $aclass;?>"  required><br/><br/>

    select the term:
    <datalist id="term">
        <option value="Term 1"></option>
        <option value="Term 2"></option>
        <option value="Term 3"></option>

    </datalist>
    <input onchange="this.form.submit()" type="text" list="term" name="term" value="<?php echo $aterm; ?>" required> <br/><br/>

</fieldset>
</form>
    
<table>
    <thead>
        <tr>
            <th>NAME</th>
            <th>MATH</th>
            <th>ENG</th>
            <th>KISW</th>
            <th>BIO</th>
            <th>CHEM</th>
            <th>PHYS</th>
            <th>GEO</th>
            <th>CRE</th>
            <th>HIS</th>
            <th>COMP</th>
            <th>TOTAL</th>
        </tr>
    </thead>

    <?php
$sql="select * from users where myclass='$aclass';";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>";
    echo $row['firstname']." ".$row['middlename']." ".$row['lastname'];
    echo "</td>";

$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='1' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thismath=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='2' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thiseng=$thisrow['marks'];
    echo $thisrow['marks'];
   
   
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='3' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thiskisw=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='4' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thisbio=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='5' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thischem=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='6' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thisphys=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='7' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thisgeo=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='8' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thiscre=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='9' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thishist=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}


$thissql="select marks from grade where student_id='{$row['id']}' and subject_id='10' and exam_id='$term' ;";

$thisresult=mysqli_query($conn,$thissql);
while($thisrow=mysqli_fetch_assoc($thisresult)){
    echo "<td>";
    $thiscomp=$thisrow['marks'];
    echo $thisrow['marks'];
    echo "</td>";
}

echo "<td>";
echo $thismath+$thiseng+$thiskisw+$thisbio+$thischem+$thisphys+$thisgeo+$thishist+$thiscre+$thiscomp;
echo "</td>";


    echo "</tr>";
}

?>
</table>

</center>
</body>
</html>