<?php
//Include database connection
include 'db_connect.php';

//SQL statement to create table
$sql = "CREATE TABLE OverlandVehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vehicle_name VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    mileage INT,
    build_type VARCHAR(50),
    date_added DATE
)";

//Execute query
if ($conn->query($sql) === TRUE) {
    echo "<h2>Table created successfully!</h2>";
} else {
    echo "Error: " . $conn->error;
}

//Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
</head>
<body>
</body>
</html>