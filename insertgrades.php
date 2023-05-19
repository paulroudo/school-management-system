<?php
$term=$subject=$class='';
$thisid=30;
$aterm='';
$asubject='';
$aclass='';
$thismark=-1;
$another=0;


include 'connect.php';

$mysql="select * from status;";
$result=mysqli_query($conn,$mysql);
while($row=mysqli_fetch_assoc($result)){
    if($row['term']=="1"){
        $aterm="Term 1"; 
    }elseif($row['term']=="2"){
        $aterm="Term 2"; 
    }elseif($row['term']=="3"){
        $aterm="Term 3"; }

    if($row['subject']=="1")
{
    $asubject="Math";
}elseif($row['subject']=="2")
{
    $asubject="Eng";
}elseif($row['subject']=="3")
{
    $asubject="Kisw";
}elseif($row['subject']=="4")
{
    $asubject="Bio";
}elseif($row['subject']=="5")
{
    $asubject="Chem";
}elseif($row['subject']=="6")
{
    $asubject="Phys";
}elseif($row['subject']=="7")
{
    $asubject="Geo";
}elseif($row['subject']=="8")
{
    $asubject="CRE";
}elseif($row['subject']=="9")
{
    $asubject="Hist";
}elseif($row['subject']=="10")
{
    $asubject="Comp";
}

if($row['class']=="1"){
    $aclass="Form 1";
}elseif($row['class']=="2"){
    $aclass="Form 2";
}elseif($row['class']=="3"){
    $aclass="Form 3";
}elseif($row['class']=="4"){
    $aclass="Form 4";
}
}



/*if(isset($_POST['ok'])){*/
    if(isset($_POST['term'])){
$aterm=$_POST['term'];}
if(isset($_POST['subject'])){
$asubject=$_POST['subject'];}
if(isset($_POST['class'])){
$aclass=$_POST['class'];}




if($aterm=="Term 1"){
    $term=1;
}elseif($aterm=="Term 2"){
    $term=2;
}elseif($aterm=="Term 3"){
    $term=3;
}

if($asubject=="Math")
{
    $subject=1;
}elseif($asubject=="Eng")
{
    $subject=2;
}elseif($asubject=="Kisw")
{
    $subject=3;
}elseif($asubject=="Bio")
{
    $subject=4;
}elseif($asubject=="Chem")
{
    $subject=5;
}elseif($asubject=="Phys")
{
    $subject=6;
}elseif($asubject=="Geo")
{
    $subject=7;
}elseif($asubject=="CRE")
{
    $subject=8;
}elseif($asubject=="Hist")
{
    $subject=9;
}elseif($asubject=="Comp")
{
    $subject=10;
}

if($aclass=="Form 1"){
    $class=1;
}elseif($aclass=="Form 2"){
    $class=2;
}elseif($aclass=="Form 3"){
    $class=3;
}elseif($aclass=="Form 4"){
    $class=4;
}


if(isset($_POST['term'])||isset($_POST['subject'])||isset($_POST['class'])){
$yoursql="update status set term='$term', subject='$subject', class='$class';";
mysqli_query($conn,$yoursql);}
/*}*/




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        thisform{
            width:60%;
        }
    </style>
    
</head>
<body><div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'teachernav.php';
        ?></div>
<center>
<script>
function callPHPFunction() {
    
  
    
    var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "insertgrades.php?functionToCall=there", true);
  xhttp.send();
  alert("javascript code has been called");




} 









</script>
<div class="thisform">
 <form action="insertgrades.php" method="POST">
    <fieldset>
    Choose the exam term:  
    <datalist id="term">
    <option value="Term 1"></option>
    <option value="Term 2"></option>
    <option value="Term 3"></option>
    </datalist>
    <input onchange="this.form.submit()" type="text" name="term" list="term" value="<?php echo $aterm; ?>" required><br/><br/>

    Choose the subject:  
    <datalist id="subject">
    <option value="Math"></option>
    <option value="Eng"></option>
    <option value="Kisw"></option>
    <option value="Bio"></option>
    <option value="Chem"></option>
    <option value="Phys"></option>
    <option value="Geo"></option>
    <option value="CRE"></option>
    <option value="Hist"></option>
    <option value="Comp"></option>

    </datalist>
    <input onchange="this.form.submit()" type="text" name="subject" list="subject" value="<?php echo $asubject; ?>" required><br/><br/>

    Choose the class:  
    <datalist id="class">
    <option value="Form 1"></option>
    <option value="Form 2"></option>
    <option value="Form 3"></option>
    <option value="Form 4"></option>
    </datalist>
    <input onchange="this.form.submit()" type="text" name="class" list="class" value="<?php echo $aclass; ?>" required><br/><br/>

   <!-- <input type="submit" name="ok" value="OK">-->
</fieldset>

 </form>

</div>
<br/>
<fieldset>
 <!--<form action="insertgrades.php" method="post" id="aform"><fieldset>-->
    <h3><u> <?php echo $aterm?> <br/> Class:  <?php echo $aclass; ?> <br/> Subject:  <?php echo $asubject; ?></u></h3>
    <?php
    
    $sql="select * from users where myclass='$aclass'";
    $result=mysqli_query($conn,$sql);

   
    while($row=mysqli_fetch_assoc($result)){
        $thisid=$row['id'];
        $thissql="select * from grade where student_id='{$row['id']}' and subject_id='$subject' and exam_id='$term';";
    
        $thisresult=mysqli_query($conn,$thissql);
        $thismark=-1;
        $another=0;
        
        if (mysqli_num_rows($thisresult) > 0) { 
        
            
        while($thisrow=mysqli_fetch_assoc($thisresult)){   
            $thismark=$thisrow['marks'];
            $another=1;
            //update
        } }
       
        /*if($thismark>(-1)){//check if the marks have already been entered; if entered, update, if not entered you insert into the database
            $another=1;
        }*/
        echo "<form action=\"updatedatabase.php\" method=\"post\" >";
        echo $row['firstname'] . " " . $row['lastname'] . ": " . '<input onchange="this.form.submit()"   type="number" min="0" max="100" name="marks" id="marks-' . $thisid . '" value="' . $thismark . '" > <br/><br/>';
        
        echo '<input type="hidden" name="thismark" value="' .$thismark. '">';
        echo '<input type="hidden" name="another" value="' .$another. '">';
        echo '<input type="hidden" name="thisid" value="' .$thisid. '">';
        echo '<input type="hidden" name="term" value="' .$term .'">';
        echo '<input type="hidden" name="subject" value="' .$subject. '">';
        echo '<input type="hidden" name="class" value="' .$class .'">';

echo "</form>";
        
        
        
    
    
}



    

    ?>
   

</fieldset>
 <!--</form>-->



 




</center>
</body>
</html>