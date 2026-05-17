<?php
/*
    Name: Cameron Mendez
    Assignment: Module-10.2
    Course: CSD-440

    Description:
    This program collects family household information
    from a user form, converts the data into JSON format
    using json_encode(), and displays the formatted results.
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mendez Module-10.2</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            margin: auto;
            box-shadow: 0px 0px 10px gray;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #0077cc;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #005fa3;
        }

        pre {
            background: #222;
            color: #00ff99;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
        }

        .error {
            color: red;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Family Information Form</h1>

        <form method="post" action="">

            <label>State:</label>
            <input type="text" name="state" required>

            <label>City:</label>
            <input type="text" name="city" required>

            <label>Number of Family Members Living at Home:</label>
            <input type="number" name="familyMembers" required>

            <label>Pets:</label>
            <select name="pets" required>
                <option value="">Select One</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <label>Number of Dogs:</label>
            <input type="number" name="dogs" min="0" value="0">

            <label>Number of Cats:</label>
            <input type="number" name="cats" min="0" value="0">

            <label>Number of Exotic Pets:</label>
            <input type="number" name="exotics" min="0" value="0">

            <label>House or Apartment:</label>
            <select name="homeType" required>
                <option value="">Select One</option>
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
            </select>

            <input type="submit" name="submit" value="Submit Information">

        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Validate required fields
            if (
                !empty($_POST["state"]) &&
                !empty($_POST["city"]) &&
                !empty($_POST["familyMembers"]) &&
                !empty($_POST["pets"]) &&
                !empty($_POST["homeType"])
            ) {

                // Store form data into associative array
                $familyData = array(
                    "State" => $_POST["state"],
                    "City" => $_POST["city"],
                    "Family Members" => $_POST["familyMembers"],
                    "Pets" => $_POST["pets"],
                    "Dogs" => $_POST["dogs"],
                    "Cats" => $_POST["cats"],
                    "Exotic Pets" => $_POST["exotics"],
                    "Home Type" => $_POST["homeType"]
                );

                // Convert array to JSON format
                $jsonData = json_encode($familyData, JSON_PRETTY_PRINT);

                echo "<h2>JSON Output</h2>";
                echo "<pre>$jsonData</pre>";

            } else {

                echo "<p class='error'>Error: Please complete all required fields.</p>";
            }
        }

        ?>

    </div>

</body>

</html>