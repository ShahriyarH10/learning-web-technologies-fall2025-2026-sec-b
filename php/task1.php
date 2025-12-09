<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1: Calculate area and perimeter of a Rectangle</title>
</head>

<body>
    <h1>Task 1: Calculate area and perimeter of a Rectangle</h1>
    <?php

    function calculateRectangle($length, $width)
    {
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "Rectangle Calculation:<br>";
        echo "Length: $length<br>";
        echo "Width: $width<br>";
        echo "Area: $area<br>";
        echo "Perimeter: $perimeter<br><br>";
    }

    // Example usage
    calculateRectangle(10, 5);
    ?>
</body>

</html>