<?php
$severname="localhost";
$username="root";
$password="";
$dbname = "aviation";

$conn = new mysqli($severname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connect failed: " .$conn->connect_error);
}
?>
