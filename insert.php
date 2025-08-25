<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $mobile   = $_POST['mobile'];

    $sql = "INSERT INTO registration (name, email, password, mobile) VALUES ('$name', '$email', '$password', '$mobile')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <input type="number" name="mobile" placeholder="Enter Mobile" required>
        <button type="submit" name="submit">Add User</button>
    </form>
    <p style="text-align:center; margin-top:10px;">
        <a href="index.php">Back to Login</a>
    </p>
</div>
</body>
</html>
