<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307045">
    <meta name="author" content="Muhammad Daffa Samudra">
</head>
<body>
    <?php
    $x = 5;
    $y = 10;

    //Arithmetic Operators
    echo "<b>Arithmetic Operators</b>";
    echo("<br>");
    echo "Penambahan ".$x + $y."<br>";
    echo "pengurangan ".$x - $y."<br>";
    echo "perkalian ".$x * $y."<br>";
    echo "pembagian ".$x / $y."<br>";
    echo "Modulus ".$x % $y."<br>";
    echo "Exponensial ".$x ** $y."<br>";

    //Assignment Operators
    $x += 2; // $x = $x + 2
    $y *= 2; // $y = $y *2
    echo("<br>");
    echo "<b>Assignment Operators</b>". "<br>";
    echo "Penambahan x ".$x."<br>";
    echo "Perkalian y ".$y."<br>";

    //Increment/Decrement Operators
    echo ("<br>");
    echo "<b>Increment/Decrement Operators</b>". "<br>";
    echo "Isi ++x = ".++$x."<br>";
    echo "Isi x++ = ".$x++."<br>";
    echo "Isi x = ".$x."<br>";
    echo("<br>");
    echo "Isi --y = ".--$y."<br>";
    echo "Isi y-- = ".$y--."<br>";
    echo "Isi y = ".$y."<br>";

    //Conditional assignment Operators
    echo("<br>");
    echo "<b>Conditional assignment Operators</b>". "<br>";
    $user = "Andi darmawan";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status."<br>";
    //Variable $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";
    
    ?>
</body>
</html>