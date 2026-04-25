<?php
// Initialize variables
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$gender = $_POST['gender'] ?? '';
$language = $_POST['language'] ?? '';
$subscribe = $_POST['subscribe'] ?? 'No';
$comments = $_POST['comments'] ?? '';

// Error array
$errors = [];

// Validation
if (empty($name)) {
    $errors[] = "Name is required.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required.";
}

if (empty($age) || !is_numeric($age)) {
    $errors[] = "Valid age is required.";
}

if (empty($gender)) {
    $errors[] = "Gender is required.";
}

if (empty($language)) {
    $errors[] = "Please select a language.";
}

if (empty($comments)) {
    $errors[] = "Comments cannot be empty.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Response</title>
</head>
<body>

<h2>Form Submission Result</h2>

<?php
// If errors exist
if (!empty($errors)) {
    echo "<h3>Errors:</h3><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
} else {
    // Display formatted data
    echo "<h3>Submitted Data:</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Favorite Language:</strong> $language</p>";
    echo "<p><strong>Subscribed:</strong> $subscribe</p>";
    echo "<p><strong>Comments:</strong> $comments</p>";
}
?>

</body>
</html>