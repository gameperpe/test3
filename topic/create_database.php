<?php
// connect 
include 'connect.php' ;
// create database
$sql = "CREATE DATABASE myDB";
if($conn->query($sql)==TRUE){
echo "Database created successfully";
}
else {
    echo "Error creating database:".$conn->error;
}
$conn->close();
?>