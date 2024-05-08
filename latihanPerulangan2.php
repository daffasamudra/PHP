<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan2</title>
</head>
<body>
    <?php
    $angka = array(12, 13, 15, 16,67,189,346,876,54232,3256);

    for ($i = 0; $i < count($angka); $i++) {
      $bilangan = $angka[$i];
      if ($bilangan % 2 == 0) {
        echo "Nomor: $bilangan Genap <br>";
      } else {
        echo "Nomor: $bilangan Ganjil <br>";
      }
    }
    ?>
</body>
</html>