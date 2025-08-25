<?php
include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM registration WHERE id=$id");
$registration = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $mobile   = $_POST['mobile'];

    mysqli_query($conn, "UPDATE registration SET name='$name', email='$email', password='$password', mobile='$mobile' WHERE id=$id");
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Update User</h2>
    <form method="post">
        <input type="text" name="name" value="<?php echo $registration['name'] ?>" required>
        <input type="email" name="email" value="<?php echo $registration['email'] ?>" required>
        <input type="password" name="password" value="<?php echo $registration['password'] ?>" required>
        <input type="number" name="mobile" value="<?php echo $registration['mobile'] ?>" required>
        <button type="submit" name="update">Update User</button>
    </form>
    <p style="text-align:center; margin-top:10px;">
        <a href="main.php">⬅ Back</a>
    </p>
</div>
</body>
</html>
