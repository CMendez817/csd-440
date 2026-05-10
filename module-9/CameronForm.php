<?php
// CameronForm.php - Form to insert new vehicle

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $vehicle = $_POST['vehicle_make_model'];
    $year = $_POST['year'];
    $mileage = $_POST['mileage'];
    $build = $_POST['build_type'];
    $date = $_POST['date_added'];

    $sql = "INSERT INTO OverlandVehicles (vehicle_make_model, year, mileage, build_type, date_added)
            VALUES ('$vehicle', '$year', '$mileage', '$build', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Record added successfully!</h3>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Vehicle</title>
</head>
<body>

<h2>Add New Vehicle</h2>

<form method="post" action="">
    Vehicle Make & Model: <input type="text" name="vehicle_make_model" required><br><br>
    Year: <input type="number" name="year" required><br><br>
    Mileage: <input type="number" name="mileage"><br><br>
    Build Type: <input type="text" name="build_type"><br><br>
    Date Added: <input type="date" name="date_added"><br><br>

    <input type="submit" value="Add Vehicle">
</form>

<br>
<a href="CameronIndex.php">Back to Home</a>

</body>
</html>