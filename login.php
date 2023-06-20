<?php
session_start();

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        $_SESSION["Login"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    html {
        display: flex;
        justify-content: center;
    }
    h2 {
        text-align: center;
    }
</style>
<body>
    <br><br>
    <h2>Login Admin</h2>
    <?php if (isset($error) && $error) : ?>
        <p>Username atau password salah. Silakan coba lagi.</p>
    <?php endif; ?>

    <form method="POST" action="">
        <label class="form-label" for="username">Username:</label>
        <input style="width: 350px;" class="form-control" type="text" name="username" id="username" autocomplete="0"><br>

        <label class="form-label" for="password">Password:</label>
        <input style="width: 350px;" class="form-control" type="password" name="password" id="password" ><br>

        <button type="submit" name="submit" value="Login">Login</button>
        <button><a href="index.php" style="color: black;">Kembali</a></button>


    </form>
    <br>
</body>

</html>