<?php
global $conn;
include 'php_config/config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Edit User</h1>
<form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required>
    <label for="role">Role:</label>
    <select id="role" name="role" required>
        <option value="admin" <?php if ($row['role'] == 'admin') echo 'selected'; ?>>Admin</option>
        <option value="manager" <?php if ($row['role'] == 'manager') echo 'selected'; ?>>Manager</option>
    </select>
    <button type="submit">Update User</button>
</form>
</body>
</html>

