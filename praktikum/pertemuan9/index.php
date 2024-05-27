<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Perpustakaan</title>
</head>

<body>
    <h1>Aplikasi Perpustakaan</h1>

    <a href="./buku.php">Lihat daftar buku</a> <br>
    <a href="./staff.php">Lihat daftar staff</a>

    <form action="./logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>

</html>