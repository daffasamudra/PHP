<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 7</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307045">
    <meta name="author" content="Muhammad Daffa Samudra">
</head>
<body>
    <?php

    $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
    echo "Saya suka ", $namaBuah[0] . ", ". $namaBuah[1] . " dan " . $namaBuah[2] . " . ". "<br>";
    echo "<hr>";

    //tampilkan mangga
    echo "Saya suka " . $namaBuah[1]. " ,";
    //tampilkan jeruk
    echo "Saya suka " . $namaBuah[2] ." ,";
    //tampilkan apel
    echo "Saya suka " . $namaBuah[3]. " ,". " dan ";
    //tampilkan melon
    echo "Saya suka " . $namaBuah[4];
    echo "<br>";
    echo "<hr>";

    //array dengan spesifik index
    $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"39 Tahun");
    $umur['ahmad']="50 Tahun";
    echo "Umur Andi adalah " . $umur['Andi']. " ,";
    //tampilkan semua umur
    echo "Umur Ben adalah " . $umur['Ben']. " ,";
    echo "Umur Joe adalah " . $umur['Joe']. " ,". " dan ";
    echo "Umur Ahmad adalah " . $umur['ahmad'];

    ?>
</body>
</html>