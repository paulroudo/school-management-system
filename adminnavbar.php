<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.navbar {
  overflow: hidden;
  background-color: #009879;
  font-weight:bold;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
 
.dropdown {
  float: left;
  overflow: hidden;
}


.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  font-weight:bold;
}

        .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

        .dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}


.dropdown:hover .dropdown-content {
  display: block;
}
    </style>
</head>
<body>
    <div  class="navbar">
        <a href="adminhome.php">Home</a>
        <a href="teachers.php">Teachers</a>
        <div class="dropdown">
    <button class="dropbtn">Classes</button>
    <div class="dropdown-content">
      <a href="form1.php">Form 1</a>
      <a href="form2.php">Form 2</a>
      <a href="form3.php">Form 3</a>
      <a href="form4.php">Form 4</a>
</div>
</div>

<div class="dropdown">
    <button class="dropbtn">Update Timetable</button>
    <div class="dropdown-content">
      <a href="form1time.php">Form 1</a>
      <a href="form2time.php">From 2</a>
      <a href="form3time.php">Form 3</a>
      <a href="form4time.php">Form 4</a>
        
</div>
</div>

<div class="dropdown">
    <button class="dropbtn">Fees</button>
    <div class="dropdown-content">
      <a href="feepaymentterm1.php">Term 1</a>
      <a href="feepaymentterm2.php">Term 2</a>
      <a href="feepaymentterm3.php">Term 3</a>
        
</div>
</div>
<a href="library.php">Library</a>
<a href="result.php">Results</a>
    </div>
</body>
</html>