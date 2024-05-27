<?php
include_once ("./connect.php");

// fetch data mysqli_query(koneksi database, command query yang ingin dijalankan)
$query = mysqli_query($db, "SELECT * FROM buku")
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
    <h2>Daftar Buku</h2>

    <table border="1">
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>Action</td>
        </tr>
        <?php foreach ($query as $data): ?>
            <tr>
                <td><?php echo $data["nama"] ?></td>
                <td><?php echo $data["isbn"] ?></td>
                <td><?php echo $data["unit"] ?></td>
                <td><a href="<?php echo "editbuku.php?id=" . $data["id"] ?>">Edit</a></td>
                <td><a href="<?php echo "deletebuku.php?id=" . $data["id"] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="./tambahbuku.php">Tambah data buku</a> <br>
    <a href="./index.php">Kembali ke halaman utama</a>
</body>

</html>