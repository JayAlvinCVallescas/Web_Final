<?php
$servername = "localhost:3306";
$username = "root";
$password = "jay1234567890";
$dbname = "web_app";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error" . mysqli_connect_error());
}
