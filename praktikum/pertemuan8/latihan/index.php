<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculate</title>
</head>

<body>
    <h1>Aplikasi Penghitung BMI</h1>
    <h2>Created by : Nadindra Maulana Aziz</h2>

    <p>Silakan inputkan nilai dibawah ini!</p>

    <form action="" method="POST">
        <label for="beratBadan">Berat Badan (Kg)</label>
        <input type="text" name="beratBadan" id="beratBadan"> <br>
        <label for="tinggiBadan">Tinggi Badan (cm)</label>
        <input type="text" name="tinggiBadan" id="tinggiBadan"> <br>

        <button type="submit">Hitung BMI</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $beratBadan = $_POST['beratBadan'];
        $tinggiBadan = $_POST['tinggiBadan'];
        $bmi = $beratBadan / (($tinggiBadan / 100) * ($tinggiBadan / 100));

        if ($bmi < 18.5) {
            $kategori = 'Underweight';
        } else if ($bmi >= 18.5 && $bmi <= 24.9) {
            $kategori = 'Normal';
        } else if ($bmi >= 25 && $bmi <= 29.9) {
            $kategori = 'Overweight';
        } else if ($bmi >= 30 && $bmi <= 34.9) {
            $kategori = 'Obesity';
        } else {
            $kategori = 'Exreme Obesity';
        }

        echo "<h3>Hasil Perhitungan:</h3>
                  <p>Berat Badan : $beratBadan Kg </p>
                  <p>Tinggi Badan : $tinggiBadan cm </p>
                  <p>BMI : $bmi </p>
                  <p>Kategori BMI : $kategori </p>";
    }
    ?>
</body>

</html>