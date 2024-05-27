<?php

$file = fopen('./text.txt', 'w');

if (isset($_POST['submit'])) {
  $nama = $_POST['name'];

  fwrite($file, $nama);

  $readfile = fopen('./text.txt', 'r');
  echo fread($readfile, filesize('./text.txt'));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manipulasi text txt</title>

</head>

<body>
  <form action="" method="post">
    <label for="name">Nama</label>
    <input type="text" name="name" />
    <br />

    <button type="submit" name="submit" id="btn">Submit</button>
  </form>
</body>

</html>