<?php
if (isset($_POST['submit'])) {
    // Mengambil inputan data
    $npm = $_POST['npm'];
    $nilai = $_POST['nilai'];
    $perulangan = $_POST['ulangi'];

    if ($nilai != '') {
        if ($nilai >= 85) {
            $mutu = 'A';
        } else if ($nilai >= 75) {
            $mutu = 'B';
        } else if ($nilai >= 65) {
            $mutu = 'C';
        } else {
            $mutu = 'D';
        }

        for ($x = 1; $x <= $perulangan; $x++) {
            // echo "<>alert('" . $npm . " Nilai mutu mata kuliah anda adalah : " . $mutu . "')</script>";
            echo $npm . " Nilai mutu mata kuliah anda adalah : " . $mutu . "<br>";
        }
    }
}

?>