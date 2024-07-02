<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
 
    <ul>
        <?php foreach ($users as $user) { ?>
            <li><?= $user['username']; ?>
                <a href="edit?id=<?= $user['id'] ?>">Edit</a>
                <a href="delete?id=<?= $user['id'] ?>">Delete</a>
            </li>
        <?php } ?>
    </ul>

    <h2>Add User</h2>
    <form method="post" action="add">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
