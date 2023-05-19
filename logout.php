<?php

session_start();                
session_destroy();              //destroy all data associated with the current session
header("location:index.php");  //take user to the login page?>