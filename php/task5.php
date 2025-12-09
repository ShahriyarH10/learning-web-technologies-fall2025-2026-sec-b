<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5: Print odd numbers between 10 and 100</title>
</head>

<body>
    <h1>Task 5: Print odd numbers between 10 and 100
    </h1>
    <?php
    function printOddNumbers($start = 10, $end = 100)
    {
        echo "Odd numbers between $start and $end:<br>";

        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
        echo "<br><br>";
    }

    // Example usage
    printOddNumbers();
    ?>
</body>

</html>