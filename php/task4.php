<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4: Find largest of three numbers</title>
</head>

<body>
    <h1>Task 4: Find largest of three numbers</h1>
    <?php

    function findLargest($num1, $num2, $num3)
    {
        echo "Numbers: $num1, $num2, $num3<br>";
        echo "Largest number: ";

        if ($num1 >= $num2 && $num1 >= $num3) {
            echo $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            echo $num2;
        } else {
            echo $num3;
        }
        echo "<br><br>";
    }

    // Example usage
    findLargest(15, 27, 19);
    ?>
</body>

</html>