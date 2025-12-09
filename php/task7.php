<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 7 - Pattern Printing</title>
    <!-- <style>
        .container {
            display: flex;
            gap: 50px;
            margin: 20px;
        }

        .pattern {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f5f5f5;
        }

        pre {
            font-family: 'Courier New', monospace;
            font-size: 16px;
            margin: 10px 0;
        }
    </style> -->
</head>

<body>
    <h1>Task 7: Pattern Printing using Nested Loops</h1>

    <div class="container">
        <div class="pattern">
            <h2>Pattern 1: Star Pattern</h2>
            <?php
            echo "<pre>";
            for ($i = 1; $i <= 3; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "\n";
            }
            echo "</pre>";
            ?>
        </div>

        <div class="pattern">
            <h2>Pattern 2: Number Triangle</h2>
            <?php
            echo "<pre>";
            for ($i = 3; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $j;
                }
                echo "\n";
            }
            echo "</pre>";
            ?>
        </div>

        <div class="pattern">
            <h2>Pattern 3: Alphabet Triangle</h2>
            <?php
            $alphabet = 'A';
            echo "<pre>";
            for ($i = 1; $i <= 3; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $alphabet . " ";
                    $alphabet++;
                }
                echo "\n";
            }
            echo "</pre>";
            ?>
        </div>
    </div>


</body>

</html>