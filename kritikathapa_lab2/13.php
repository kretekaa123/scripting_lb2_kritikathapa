<?php
function getValue($arr, $index) {
    if (array_key_exists($index, $arr)) {
        return $arr[$index];
    }
    return "Index out of bounds";
}
$colors = array("red", "green", "lavender", "yellow");
echo "Value at index 2: " . getValue($colors, 2) . "<br>"; // Output: blue
echo "Value at index 5: " . getValue($colors, 5);        // Output: Index out of bounds
?>
