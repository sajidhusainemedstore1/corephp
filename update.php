<?php
include 'config.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM registration WHERE id=$id");
$registration = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    mysqli_query($conn, "UPDATE registration SET name='$name', email='$email', password='$password', mobile='$mobile' WHERE id=$id");
    header("Location: main.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name: <input type="text" name="name" value="<?php echo $registration['name'] ?>" required><br>
        Email: <input type="email" name="email" value="<?php echo $registration['email'] ?>" required><br>
        Password: <input type="Password" name="Password" value="<?php echo $registration['Password'] ?>" required><br>
        Mobile: <input type="number" name="mobile" value="<?php echo $registration['mobile'] ?>" required><br>
        <button type="submit" name="update">Update User</button>
    </form>
</body>
</html>
