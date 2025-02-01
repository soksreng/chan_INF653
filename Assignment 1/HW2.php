<?php
# Challenge 1: Create a PHP script that takes two numbers and performs addition, subtraction, multiplication, division, and modulus operations

// Define two numbers
$number1 = 10;
$number2 = 5;

// Perform arithmetic operations
$addition = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number1 / $number2;
$modulus = $number1 % $number2;

// Display the results
echo "Number 1: $number1<br>";
echo "Number 2: $number2<br>";
echo "Addition: $addition<br>";
echo "Subtraction: $subtraction<br>";
echo "Multiplication: $multiplication<br>";
echo "Division: $division<br>";
echo "Modulus: $modulus<br>";

?>
<br>

<?php
// Challenge 2: Write a PHP script that takes an integer and determines if it is even or odd using the modulus % operator.
// Define an integer
$number = 7;

// Determine if the number is even or odd
if ($number % 2 == 0) {
    echo "Input: $number<br>";
    echo "Output: $number is an even number.";
} else {
    echo "Input: $number<br>";
    echo "Output: $number is an odd number. <br>" ;
}
?>
<br>

<?php
//Challlenge 3: Write a PHP script that starts with a number and increments and decrements it using ++ and -- operators.

// Define a starting number
$number = 10;

// Display the starting number
echo "Starting number: $number<br>";

// Increment the number
$number++;
echo "After increment: $number<br>";

// Decrement the number
$number--;
echo "After decrement: $number<br>";
?>

<br>

<?php

/*Challenge 4: Write a PHP script that takes a student’s marks and assigns a grade using the following conditions:  
•90+ → A
•80-89 → B
•70-79 → C
•60-69 → D
•Below 60 → F
*/

// Define the student's marks
$marks = 85;

// Assign a grade based on the marks
if ($marks >= 90) {
    $grade = 'A';
} elseif ($marks >= 80) {
    $grade = 'B';
} elseif ($marks >= 70) {
    $grade = 'C';
} elseif ($marks >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

// Display the result
echo "Input: $marks<br>";
echo "Output: You got a $grade!";
?>

<br>
<br>

<?php

//Challenge 5: Write a PHP script to check if a given year is a leap year or not.

// Define the year to check
$year = 2024;

// Check if the year is a leap year
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    $result = "$year is a leap year.";
} else {
    $result = "$year is not a leap year.";
}

// Display the result
echo "Input: $year<br>";
echo "Output: $result";
?>
