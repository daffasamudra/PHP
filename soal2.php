<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
    <link rel="icon" type="img/png" href="#" sizes="16x16" />
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307045">
    <meta name="author" content="Muhammad Daffa Samudra">
</head>
<body>
    <?php

    // Define available denominations
    $denominations = [100000, 50000, 20000, 10000, 5000, 2000, 500];

    // Given withdrawal amount
    $withdrawalAmount = 1387500;
    $withdrawalAmount2 = 1387500;

    // Initialize an empty array to store the number of bills for each denomination
    $billCounts = [];

    // Calculate the number of bills for each denomination
    foreach ($denominations as $denomination) {
        $numberOfBills = floor($withdrawalAmount / $denomination);
        $billCounts[$denomination] = $numberOfBills;

        // Update the withdrawal amount to reflect the used bills
        $withdrawalAmount -= $numberOfBills * $denomination;
    }

    // Display the results
    echo "Jumlah uang yang akan ditarik: Rp." . number_format($withdrawalAmount2, 0, ',', '.') . "\n". "<br>";
    echo "<hr>";
    echo "\nRincian uang pecahan yang diterima:\n". "<br>";
    foreach ($billCounts as $denomination => $count) {
        if ($count > 0) {
            echo "Rp." . number_format($denomination, 0, ',', '.') . ": " . $count . " lembar\n" . "<br>";
        }
    }

    ?>
</body>
</html>