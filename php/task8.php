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
    
    echo "Task 8: 2D Array Patterns\n\n";

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

    // 2. Print array contents
    echo "Array 1 (Number pattern):\n";
    print_r($array1);
    echo "\n";

    echo "Array 2 (Alphabet pattern):\n";
    print_r($array2);
    echo "\n";

    // 3. Print patterns from arrays
    echo "Patterns from Array 1:\n";
    foreach ($array1 as $row) {
        foreach ($row as $value) {
            echo $value;
        }
        echo "\n";
    }
    echo "\n";

    echo "Patterns from Array 2:\n";
    foreach ($array2 as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "\n";
    }
    ?>
</body>

</html>