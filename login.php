<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === 'user1' && $password === 'password12') {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Login</title>
</head>
<body>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error ?></p >
    <?php endif; ?>
    <form method="POST">
        <label>Username: <input type="text" name="username"></label><br>
        <label>Password: <input type="password" name="password"></label><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>