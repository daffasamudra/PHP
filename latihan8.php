<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 8</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307045">
    <meta name="author" content="Muhammad Daffa Samudra">
</head>
<body>
    <?php

    //data kelas dengan array 2 dimensi
    $array = array(
        "1C" =>array("udin", "ismail", "adi"),
        "1D" =>array("lukman", "fajri", "mahmud")
    );
    //menampilkan data array
    print_r($array);
    //menampilkan kelas 1C
    print_r($array['1C']);
    //menampilkan kelas 1D dengan index 0
    echo "<br>";
    echo $array['1D'][0]. "<br>";
    //tampilkan fajri
    echo $array['1D'][1]. "<br>";
    //tampilkan andi
    echo $array['1C'][2];
    
    //data kelas bisa ditulis juga dengan
    $array_simple = [
        "1C" =>["udin", "ismail", "adi"],
        "1D" =>["lukman", "fajri", "mahmud"]
    ];

    ?>
</body>
</html>