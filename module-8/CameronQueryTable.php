<?php
include 'db_connect.php';

$sql = "SELECT * FROM OverlandVehicles";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Query Table</title>
</head>
<body>

<h2>Overland Vehicles</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Vehicle</th>
    <th>Year</th>
    <th>Mileage</th>
    <th>Build Type</th>
    <th>Date</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['vehicle_name']}</td>
        <td>{$row['year']}</td>
        <td>{$row['mileage']}</td>
        <td>{$row['build_type']}</td>
        <td>{$row['date_added']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No data found</td></tr>";
}

$conn->close();
?>

</table>

</body>
</html>