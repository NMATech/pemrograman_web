<?php

// Deklarasi variable di php
$memew = "chandra";

// Penggabungan string (string concat) 
echo $memew . "<br>";

// Nilai konstanta
const phi = 3.14;
echo phi;

// Penggabungan string dengan spasi
$memew .= " jomok";
echo "<br>" . $memew;

// Dua cara mendeklarasi array
$jomokers = array("Adam", "Chandra", "Dafmoi", "Bagus");
$jomoks = ["Adam", "Chandra", "Dafmoi", "Bagus"];

$jomoks[1] = "Chandra Skena";

echo "<br>";
var_dump($jomokers);
var_dump($jomoks);

echo "<br>";

// Menampilkan semua nilai array
echo "<ul>";
for ($i = 0; $i < count($jomoks); $i++) {
    echo "<li>" . $jomoks[$i] . "</li>";
}
echo "</ul>";

// Function
function sum()
{
    echo 1 + 3;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>

<body>
    <?php foreach ($jomoks as $jm): ?>
    <h1>
        <?php echo $jm ?>
    </h1>
    <?php endforeach; ?>

    <h3>
        <?php sum() ?>
    </h3>
</body>

</html>