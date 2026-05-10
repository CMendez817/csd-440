<?php
// CameronQuery.php - Search vehicles

include 'db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Vehicles</title>
</head>
<body>

<h2>Search Vehicles</h2>

<form method="post" action="">
    Search by Vehicle Make and Model:
    <input type="text" name="search">
    <input type="submit" value="Search">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $search = $_POST['search'];

    $sql = "SELECT * FROM OverlandVehicles 
            WHERE vehicle_make_model LIKE '%$search%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Vehicle</th>
            <th>Year</th>
            <th>Mileage</th>
            <th>Build</th>
            <th>Date</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['vehicle_make_model']}</td>
            <td>{$row['year']}</td>
            <td>{$row['mileage']}</td>
            <td>{$row['build_type']}</td>
            <td>{$row['date_added']}</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No results found.</p>";
    }
}

$conn->close();
?>

<br>
<a href="CameronIndex.php">Back to Home</a>

</body>
</html>