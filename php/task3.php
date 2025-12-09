<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3: Check if a number is odd or even</title>
</head>

<body>
    <h1>Task 3: Check if a number is odd or even</h1>
    <?php

    function checkOddEven($number)
    {
        echo "Number: $number is ";

        if ($number % 2 == 0) {
            echo "Even<br><br>";
        } else {
            echo "Odd<br><br>";
        }
    }

    // Example usage
    checkOddEven(7);
    checkOddEven(12);
    ?>
</body>

</html>