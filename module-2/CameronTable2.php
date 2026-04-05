<!DOCTYPE html>
<html>
<head>
    <title>Random Number Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>PHP Random Number Table</h2>

<table border="1">

<?php
// Outer loop: controls rows
for ($row = 1; $row <= 5; $row++) {

    echo "<tr>"; // Start a new row

    // Inner loop: controls columns
    for ($col = 1; $col <= 5; $col++) {

        // Generate a random number between 1 and 100
        $randomNumber = rand(1, 100);

        // Output table cell with number
        echo "<td>" . $randomNumber . "</td>";
    }

    echo "</tr>"; // End the row
}
?>

</table>

</body>
</html>