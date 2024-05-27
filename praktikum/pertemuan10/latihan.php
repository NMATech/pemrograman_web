<?php

$nama = "Nadindra Maulana Aziz";

for ($i = 0; $i < strlen($nama); $i++) {
    if ($nama[$i] == " ") {
        echo $i . "Ada spasi";
    }
}