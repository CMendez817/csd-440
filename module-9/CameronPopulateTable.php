<?php
include 'db_connect.php';

//Insert records
$sql = "INSERT INTO OverlandVehicles (vehicle_make_model, year, mileage, build_type, date_added)
VALUES
('Toyota 4Runner', 2014, 120000, 'Overland Build', '2026-04-01'),
('Jeep Wrangler', 2018, 80000, 'Rock Crawler', '2026-04-10'),
('Ford Bronco', 2022, 15000, 'Trail Build', '2026-04-15')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Data inserted successfully!</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Populate Table</title>
</head>
<body>
</body>
</html>