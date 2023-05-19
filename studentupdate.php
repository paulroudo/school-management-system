<?php
include 'connect.php';
	session_start();
	if(!isset($_SESSION['firstname']))
	{header("location:index.php");}
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
    <div><a style="float:right" href="logout.php"><button>Log out</button></a></div><br/></br>
      <div> <?php
        include 'studentnav.php';
        ?></div>
    </body>
    </html>