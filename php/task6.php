<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6: Search element in array</title>
</head>

<body>
    <h1>Task 6: Search element in array</h1>
    <?php

    function searchInArray($array, $searchElement)
    {
        $found = false;
        $position = -1;

        echo "Array: " . implode(", ", $array) . "<br>";
        echo "Searching for: $searchElement<br>";

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $searchElement) {
                $found = true;
                $position = $i;
                break;
            }
        }

        if ($found) {
            echo "Element found at position: $position (Index: $position)<br>";
        } else {
            echo "Element not found in the array<br>";
        }
    }

    // Example usage
    $numbers = array(10, 20, 30, 40, 50, 60);
    searchInArray($numbers, 30);
    searchInArray($numbers, 25);
    ?>
</body>

</html>