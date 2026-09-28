<?php
function findIndex($array, $string) {
    return array_search($string, $array);
}

$arr = ["Apple", "Banana", "Mango"];
echo "Index of 'Mango': " .findIndex($arr, "Mango");
?>
