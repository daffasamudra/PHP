<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307045">
    <meta name="author" content="Muhammad Daffa Samudra">
</head>
<body>
    <?php
    //soal
    echo "<b>Soal</b>". "<br>";
    echo "Setiap bulan, Gaji pokok yang diterima Obi sebesar Rp. 3.250.000,-, tunjangan
          jabatan sebesar Rp. 1.200.000,- dan pajaknya penghasilan sebesar 10%
          dihitung dari gaji kotor (gaji kotor = gaji pokok + tunjangan). Buatlah kode
          PHP untuk menghitung gaji bersih yang diterima Obi setiap bulannya.";
    echo "<hr>";

    // Define constants for salary components
    const GAJI_POKOK = 3250000;
    const TUNJANGAN_JABATAN = 1200000;
    const PAJAK_PENGHASILAN = 0.1; // 10% as decimal

    // Calculate gross salary
    $gajiKotor = GAJI_POKOK + TUNJANGAN_JABATAN;

    // Calculate tax amount
    $pajak = $gajiKotor * PAJAK_PENGHASILAN;

    // Calculate net salary
    $gajiBersih = $gajiKotor - $pajak;

    // Display results
    echo "<b>Jawab</b>". "<br>";
    echo "\nGaji Pokok: Rp." . number_format(GAJI_POKOK, 0, ',', '.') . "\n" . "<br>";
    echo "Tunjangan Jabatan: Rp." . number_format(TUNJANGAN_JABATAN, 0, ',', '.') . "\n" . "<br>";
    echo "Gaji Kotor: Rp." . number_format($gajiKotor, 0, ',', '.') . "\n" . "<br>";
    echo "Pajak Penghasilan: Rp." . number_format($pajak, 0, ',', '.') . "\n" . "<br>";
    echo "Gaji Bersih: Rp." . number_format($gajiBersih, 0, ',', '.') . "\n";

    ?>
</body>
</html>