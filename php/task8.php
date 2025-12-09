<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 8 - 2D Array Patterns</title>

</head>

<body>
    <h1>Task 8: 2D Array and Pattern Printing</h1>

    <?php
    // Task 8: 2D Array Patterns
    
    // 1. Declare 2D arrays
    $array1 = array(
        array(1, 2, 3),
        array(1, 2),
        array(1)
    );

    $array2 = array(
        array('A'),
        array('B', 'C'),
        array('D', 'E', 'F')
    );

    // Print patterns from arrays
    echo "Pattern from Array 1:\n";
    foreach ($array1 as $row) {
        foreach ($row as $value) {
            echo $value;
        }
        echo "\n";
    }

    echo "\nPattern from Array 2:\n";
    foreach ($array2 as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "\n";
    }
    ?>
</body>

</html>