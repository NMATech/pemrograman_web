<?php

session_start();

if (isset($_SESSION['email'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form method="post" action="./register_process.php">
        <label for="email">Email : </label><br>
        <input type="email" name="email" id="email">

        <br>

        <label for="password">Password : </label><br>
        <input type="password" name="password" id="password">

        <br>

        <button type="submit" name="submit">Register</button>
    </form>
</body>

</html>