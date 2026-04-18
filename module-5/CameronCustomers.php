<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Array Program</title>
</head>
<body>

<h2>Customer Information</h2>

<?php
/**
 * Customer Array Program
 * This program creates an array of customers and demonstrates
 * searching/filtering using PHP array functions.
 */

//Create an array of customers
$customers = [
    ["firstName" => "Will", "lastName" => "Byers", "age" => 28, "phone" => "817-555-1001"],
    ["firstName" => "John", "lastName" => "Byers", "age" => 34, "phone" => "817-555-1002"],
    ["firstName" => "Mike", "lastName" => "Wheeler", "age" => 22, "phone" => "817-555-1003"],
    ["firstName" => "Nancy", "lastName" => "Wheeler", "age" => 40, "phone" => "817-555-1004"],
    ["firstName" => "Lucas", "lastName" => "Sinclair", "age" => 19, "phone" => "817-555-1005"],
    ["firstName" => "Erica", "lastName" => "Sinclair", "age" => 31, "phone" => "817-555-1006"],
    ["firstName" => "Dustin", "lastName" => "Henderson", "age" => 45, "phone" => "817-555-1007"],
    ["firstName" => "Max", "lastName" => "Mayfield", "age" => 27, "phone" => "817-555-1008"],
    ["firstName" => "Steve", "lastName" => "Harrington", "age" => 36, "phone" => "817-555-1009"],
    ["firstName" => "Robin", "lastName" => "Buckley", "age" => 24, "phone" => "817-555-1010"]
];

/**
 * Function to display customers
 */
function displayCustomers($customers) {
    foreach ($customers as $cust) {
        echo "Name: {$cust['firstName']} {$cust['lastName']}<br>";
        echo "Age: {$cust['age']}<br>";
        echo "Phone: {$cust['phone']}<br><hr>";
    }
}

//Display all customers
echo "<h3>All Customers</h3>";
displayCustomers($customers);

//Find customers over age 30
echo "<h3>Customers Over Age 30</h3>";
$over30 = array_filter($customers, function($cust) {
    return $cust['age'] > 30;
});
displayCustomers($over30);

//Find a specific customer by first name
echo "<h3>Search for Customer Named 'Dustin'</h3>";
$searchName = "Dustin";
$result = array_filter($customers, function($cust) use ($searchName) {
    return $cust['firstName'] === $searchName;
});
displayCustomers($result);

//Find customers with last name starting with 'M'
echo "<h3>Last Names Starting with 'M'</h3>";
$lastNameM = array_filter($customers, function($cust) {
    return strpos($cust['lastName'], "M") === 0;
});
displayCustomers($lastNameM);

?>

</body>
</html>