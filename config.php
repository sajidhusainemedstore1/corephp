<?php
$host = "localhost";
$user = "emed";
$pass = "emed";
$db = "core";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("connection Failed:" . mysqli_connect_error());
}
?>