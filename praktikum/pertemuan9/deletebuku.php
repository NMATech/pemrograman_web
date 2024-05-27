<?php
include_once ("./connect.php");

$id = $_GET['id'];

// fetch data mysqli_query(koneksi database, command query yang ingin dijalankan)
$query = mysqli_query($db, "DELETE FROM buku WHERE id=$id");


header("Location: ./buku.php");
