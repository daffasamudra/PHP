<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h3>Konversi Nilai</h3>

    <?php
    $nilai = 80;

    if ($nilai <= 59) {
        echo "Konversi nilai anda adalah <b>C</b>";
    } elseif ($nilai <= 69) {
        echo "Konversi nilai anda adalah <b>BC</b>";
    } elseif ($nilai <= 79) {
        echo "Konversi nilai anda adalah <b>B</b>";
    } elseif ($nilai <= 89) {
        echo "Konversi nilai anda adalah <b>AB</b>";
    } else {
        echo "Konversi nilai anda adalah <b>A</b>";
    }

    ?>
</body>
</html>