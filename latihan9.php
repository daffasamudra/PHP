<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 9</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307045">
    <meta name="author" content="Muhammad Daffa Samudra">
</head>
<body>
    <?php

    //contoh fungsi
    function writeMsg($nama) {
        echo "Selamat datang ". $nama." <br>";
    }
    writeMsg("panskie."); //pemanggilan fungsi

    //fungsi dengan mengirim nilai balik
    function tambah(int $angka1, int $angka2) {
        $a= $angka1+$angka2;
        return $a; //mengirim nilai $a ke pemanggil
    }
    $hasil=tambah(222, 222);
    echo ($hasil);

    ?>
</body>
</html>