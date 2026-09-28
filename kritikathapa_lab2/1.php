//$variable = value;
//echo $variable;
//print $variable;
//print_r($array);
//var_dump($variable);
<?php

// Creating variables with different data types
$name = "Mingi";          // String
$age = 20;               // Integer
$height = 6.4;           // Float
$isStudent = true;       // Boolean
$subjects = ["PHP", "DBMS", "OS"];  // Array
$nothing = NULL;         // NULL

// a. Print data using echo and print
echo "Name: " . $name . "<br>";
print "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
print "Student: " . $isStudent . "<br>";

// b. Display array using print_r and var_dump
echo "<br><strong>Using print_r:</strong><br>";
print_r($subjects);

echo "<br><br><strong>Using var_dump:</strong><br>";
var_dump($subjects);

// c. Checking data types
echo "<br><strong><br>Data Types:</strong><br>";
var_dump($name);
var_dump($age);
var_dump($height);
var_dump($isStudent);
var_dump($nothing);

?>