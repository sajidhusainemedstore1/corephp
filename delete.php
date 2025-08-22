<?php
include 'config.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM registration WHERE id=$id");
header("Location: main.php")
?>