<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2: Calculate VAT</title>
</head>

<body>
    <h1>Task 2: Calculate VAT</h1>
    <?php

    function calculateVAT($amount)
    {
        $vatRate = 0.15; // 15%
        $vat = $amount * $vatRate;
        $total = $amount + $vat;

        echo "VAT Calculation:<br>";
        echo "Original Amount: $amount<br>";
        echo "VAT (15%): $vat<br>";
        echo "Total Amount: $total<br><br>";
    }

    // Example usage
    calculateVAT(1000);
    ?>
</body>

</html>