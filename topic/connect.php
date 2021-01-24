<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";

$conn = new mysqli ($servername , $username , $password);

if($conn -> connect_error){
    die("Connection faile:".$conn->connection_error);
}
echo "Connected successfully";

?>