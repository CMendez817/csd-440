<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palindrome Checker</title>
</head>
<body>

<h2>Palindrome Checker Program</h2>

<?php
/**
 * Function: isPalindrome
 * Description: Checks if a string is a palindrome
 * Parameters: $string (string)
 * Returns: true if palindrome, false otherwise
 */
function isPalindrome($string) {
    //Remove spaces and make lowercase for accurate comparison
    $cleanString = strtolower(str_replace(' ', '', $string));
    
    //Reverse the string
    $reversed = strrev($cleanString);
    
    //Compare original and reversed
    return $cleanString === $reversed;
}

/**
 * Function: displayResult
 * Description: Displays original string, reversed string, and result
 */
function displayResult($string) {
    $cleanString = strtolower(str_replace(' ', '', $string));
    $reversed = strrev($cleanString);

    echo "<p>";
    echo "Original: $string <br>";
    echo "Reversed: $reversed <br>";

    if (isPalindrome($string)) {
        echo "<strong>Result: This IS a palindrome</strong>";
    } else {
        echo "<strong>Result: This is NOT a palindrome</strong>";
    }

    echo "</p><hr>";
}

//Six test examples (3 palindromes, 3 not)
$testStrings = [
    "racecar",
    "madam",
    "level",
    "hello",
    "php",
    "openai"
];

//Loop through and test each string
foreach ($testStrings as $test) {
    displayResult($test);
}
?>

</body>
</html>