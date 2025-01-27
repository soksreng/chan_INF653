<?php
#Challenge 1: Display information

$name = "Sok Sreng";
$age = 22;
$favorite_color = "Black";

echo "My name is $name , I am $age years old, and my favorite color is $favorite_color.<br>";

#Challenge 2: Using escape characters

echo "\"He said,"."<br>"."\"PHP is fun!\", and left\"" . "<br>";

#Challenge 2: Correcting syntax errors

$age = 25;
echo "Welcome to the PHP world!" . "<br>";
echo "Your age is ". $age . "<br>";

#Challenge 3: Fix errors

echo "Welcome to PHP!" ;
$name = "John";
echo "Hello, $name". "<br>";
#Challenge 4: adding comments to the code
 
#Initialize variables for price and discount
$price = 50; // The original price of the item
$discount = 10; // Discount amount

/*
Calculate the final price
by subtracting the discount from the original price
*/
$finalPrice = $price - $discount;

// Output the total price
echo "Total price: $" . $finalPrice; // Display the final price
?>


