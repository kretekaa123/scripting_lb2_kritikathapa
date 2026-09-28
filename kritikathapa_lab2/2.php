//define("PI", 3.14);
//$area = PI * $r * $r;
<?php
// Define PI as a constant
define("PI", 3.14159);

// Radius input
$radius = 7;

// Formula: Area = PI * r^2
$area = PI * $radius * $radius;

echo "Radius: " . $radius . "<br>";
echo "Area of Circle: " . $area;
?>