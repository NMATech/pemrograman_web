<?php
include_once ("./connect.php");

$id = $_GET['id'];

$query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    // fetch data mysqli_query(koneksi database, command query yang ingin dijalankan)
    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id");

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
    <h1>Form edit data staff</h1>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff["nama"] ?>" type="text" id="nama" name="nama">

        <br>
        <br>

        <label for="telp">Telp</label>
        <input value="<?php echo $staff["telp"] ?>" type="text" id="telp" name="telp">

        <br>
        <br>

        <label for="email">Email</label>
        <input value="<?php echo $staff["email"] ?>" type="text" id="email" name="email">

        <br>
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <br>
    <a href="./staff.php">Kembali ke halaman daftar staff</a>
</body>

</html>