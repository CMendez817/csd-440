<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Program</title>
</head>
<body>
    <h1>Welcome to Cameron's First PHP Program</h1>

    <!-- PHP snippet 1: display current date -->
    <p>
        <?php
            // This snippet displays today's date
            echo "Today's date is: " . date("F j, Y");
        ?>
    </p>

    <!-- PHP snippet 2: simple calculation -->
    <p>
        <?php
            // This snippet adds two numbers
            $a = 10;
            $b = 25;
            echo "The sum of $a and $b is: " . ($a + $b);
        ?>
    </p>

    <p>Thank you for visiting my PHP page!</p>
</body>
</html>