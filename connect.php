<?php

$conn=new mysqli('localhost','root','','P1518972020');

if(!$conn){
    die("Connection failed: " . $conn->connect_error);
}
?>