<?php
include_once ("./connect.php");

$id = $_GET['id'];

$query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
$buku = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    // fetch data mysqli_query(koneksi database, command query yang ingin dijalankan)
    $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit=$unit WHERE id=$id");

    echo "<script>alert(
        'Data Berhasil diedit!'
    )</script>";
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
    <h1>Form edit data buku</h1>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku["nama"] ?>" type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input value="<?php echo $buku["isbn"] ?>" type="text" id="isbn" name="isbn">

        <br>
        <br>

        <label for="unit">Unit</label>
        <input value="<?php echo $buku["unit"] ?>" type="text" id="unit" name="unit">

        <br>
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <br>
    <a href="./buku.php">Kembali ke halaman daftar buku</a>
</body>

</html>