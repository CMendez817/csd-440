<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyInteger Class Program</title>
</head>
<body>

<h2>MyInteger Class Testing</h2>

<?php
/**
 * Class: CameronMyInteger
 * Description: Holds an integer and provides methods
 * to determine if it is even, odd, or prime.
 */
class CameronMyInteger {

    //Property
    private $number;

    /**
     * Constructor
     * Initializes the integer value
     */
    public function __construct($num) {
        $this->number = $num;
    }

    /**
     * Getter method
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * Setter method
     */
    public function setNumber($num) {
        $this->number = $num;
    }

    /**
     * Checks if number is even
     */
    public function isEven() {
        return $this->number % 2 === 0;
    }

    /**
     * Checks if number is odd
     */
    public function isOdd() {
        return $this->number % 2 !== 0;
    }

    /**
     * Checks if number is prime
     */
    public function isPrime() {
        if ($this->number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++) {
            if ($this->number % $i === 0) {
                return false;
            }
        }
        return true;
    }
}

/**
 * Function to display results
 */
function displayResults($obj) {
    echo "<p>";
    echo "Number: " . $obj->getNumber() . "<br>";

    echo "Even? " . ($obj->isEven() ? "Yes" : "No") . "<br>";
    echo "Odd? " . ($obj->isOdd() ? "Yes" : "No") . "<br>";
    echo "Prime? " . ($obj->isPrime() ? "Yes" : "No") . "<br>";

    echo "</p><hr>";
}

//Create two instances
$num1 = new CameronMyInteger(7);
$num2 = new CameronMyInteger(10);

//Test methods
echo "<h3>Initial Values</h3>";
displayResults($num1);
displayResults($num2);

//Test setter
echo "<h3>After Using Setter</h3>";
$num1->setNumber(15);
$num2->setNumber(2);

displayResults($num1);
displayResults($num2);

?>

</body>
</html>