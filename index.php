<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>


    <form action="vendor/signin.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">Enter</button>
        <p>
            Don't have an account? - <a href="/register.php">register</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>