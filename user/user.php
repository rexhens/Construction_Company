<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>User Management</h1>

<!-- Create User Form -->
<h2>Create User</h2>
<form action="create_user.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="role">Role:</label>
    <select id="role" name="role" required>
        <option value="admin">Admin</option>
        <option value="manager">Manager</option>
    </select>
    <button type="submit">Create User</button>
</form>

<!-- Users Table -->
<h2>Existing Users</h2>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'php_config/config.php';
    $sql = "SELECT * FROM users";
    $conn = 0;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['role']}</td>
                            <td>
                                <a href='edit_user.php?id={$row['id']}'>Edit</a>
                                <a href='delete_user.php?id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No users found</td></tr>";
    }
    $conn->close();
    ?>
    </tbody>
</table>
</body>
</html>
