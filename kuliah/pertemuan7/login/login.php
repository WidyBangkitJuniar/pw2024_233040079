<?php
    // Cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        // Cek username & Password
        if( $_POST["username"] == "bangkit" && $_POST["password"] == "12345") {
            // Jika benar, redirect ke halama admin
            header("Location: admin.php");
            exit;
        } else {
            // Jika salah, tampilkan pesan kesalahan
            $error = true;
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if( isset($error)) : ?>
    <p style="color: red; font-style: italic;">ussername / password salah!</p>
    <?php endif; ?>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>