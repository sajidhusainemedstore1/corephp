<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "Insert into registration (name, email, password, mobile) values('$name', '$email', '$password', '$mobile')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<form method="POST">
    Name : <input type="text" name="name" required><br>
    Email : <input type="email" name="email" required><br>
    Password : <input type="password" name="password" required><br>
    Mobile : <input type="number" name="mobile" required><br>
    <button type="submit" name="submit">Add User</button>
</form>