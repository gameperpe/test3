<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";

$conn = new mysqli ($servername , $username , $password ,$dbname);

if($conn -> connect_error){
    die("Connection faile:".$conn->connection_error);
}
echo "Connected successfully";

?>