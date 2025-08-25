<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM registration");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Welcome <?php echo $_SESSION['name']; ?> 🎉</h2>
    <p style="text-align:right;">
        <a href="logout.php">Logout</a>
    </p>

    <p><a href="insert.php">➕ Add New User</a></p>

    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Delete this user?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
