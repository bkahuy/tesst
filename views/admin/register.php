<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
<form method="POST" action="<?php echo DOMAIN . 'index.php?controller=user&action=register'; ?>">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="role" id="role">
        <option value="admin">admin</option>
        <option value="user">user</option>
    </select>
    <button type="submit">Đăng ký</button>
</form>

</body>
</html>