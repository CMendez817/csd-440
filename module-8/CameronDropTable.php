<?php
include 'db_connect.php';

$sql = "DROP TABLE IF EXISTS OverlandVehicles";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Table dropped successfully!</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Drop Table</title>
</head>
<body>
</body>
</html>