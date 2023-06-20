<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p> <?php } ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="username"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="password"><br>

        <button type="submit">Enter</button>
        <button type="submit">Register</button>
    </form>

</body>
</html>