<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("head.php");
    ?>
    <meta charset="UTF-8">
    <title>User Management</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: black; 
    color: white; 
}

.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center; 
}

button {
    background-color: orange; 
    color: white; 
    padding: 10px 20px; 
    border: none; 
    border-radius: 5px; 
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: darkorange; 
}

.white-text {
    color: white;
}

    </style>
</head>
<body>
<h1>User Management</h1>

<!-- Create User Form -->
<h2>Create User</h2>
<form action="user/create_user.php" method="post">
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
<br>
<br>
<h2>Existing Users</h2>
<table class="table">
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
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                            <td>{$row['user_id']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['user_role']}</td>
                            <td>
                                <a href='user/edit_user.php?id={$row['user_id']}'>Edit</a>
                                <a href='delete_user.php?id={$row['user_id']}'>Delete</a>
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
<a href="index.php" >Home</a>
</body>

</html>
