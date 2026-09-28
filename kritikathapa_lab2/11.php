<?php
function calculateArea($base, $height, $shape) {
    // Standardize string comparison (lowercase)
    $shape = strtolower($shape);

    if ($shape === "triangle") {
        return 0.5 * $base * $height;
    } elseif ($shape === "parallelogram") {
        return $base * $height;
    } else {
        return "Invalid shape provided.";
    }
}

// Example usage:
echo "Triangle Area: " . calculateArea(10.5, 6.0, "triangle") . "<br>";
echo "Parallelogram Area: " . calculateArea(10.5, 6.0, "parallelogram");
?>
