<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Variabel PHP</title>
</head>
<body>
    <?php
    // Definisi nama hari dalam array
    $namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

    echo "<b>7 Nama Hari</b>". "<br>";
    echo("<br>");
    
    // Looping untuk menampilkan setiap nama hari
    for ($i = 0; $i < count($namaHari); $i++) {
    echo $namaHari[$i] . "<br>";
    }
    ?>
</body>
</html>