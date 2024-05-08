<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307045">
    <meta name="author" content="Muhammad Daffa Samudra">
</head>
<body>
    <?php

    // Deklarasi array
    $data = [
        ["Adi", 75],
        ["Joni", 80],
        ["Jihan", 65],
        ["Aya", 70],
        ["Ita", 85],
        ["Budi", 90],
        ["Tini", 95],
        ["Sari", 65],
    ];

    // Tampilkan poin siswa dengan nomor urut 5
    $nomorUrut = 5;
    $poinSiswa = $data[$nomorUrut - 1][1];

    echo "Poin siswa dengan nomor urut 5: $poinSiswa\n". "<br>";

    // Tampilkan semua nama siswa yang memiliki poin 90
    $poinPencarian = 90;
    $namaSiswaDenganPoin90 = [];

    foreach ($data as $siswa) {
        if ($siswa[1] == $poinPencarian) {
            $namaSiswaDenganPoin90[] = $siswa[0];
        }
    }

    if (empty($namaSiswaDenganPoin90)) {
        echo "Tidak ada siswa yang memiliki poin 90\n";
    } else {
        echo "Nama siswa yang memiliki poin 90: " . implode(", ", $namaSiswaDenganPoin90). "\n". "<br>";
    }

    // Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada)
    $poinPencarian = 100;
    $namaSiswaDenganPoin100 = [];

    foreach ($data as $siswa) {
        if ($siswa[1] == $poinPencarian) {
            $namaSiswaDenganPoin100[] = $siswa[0];
        }
    }

    if (empty($namaSiswaDenganPoin100)) {
        echo "Tidak ada siswa yang memiliki poin 100\n";
    } else {
        echo "Nama siswa yang memiliki poin 100: " . implode(", ", $namaSiswaDenganPoin100) . "\n";
    }

    ?>
</body>
</html>