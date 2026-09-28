<?php
function repeatFirstTwo($str) {
    // Return original string if length is less than 2
    if (strlen($str) < 2) {
        return $str;
    }
    $firstTwo = substr($str, 0, 2);
    return str_repeat($firstTwo, 4);
}
echo repeatFirstTwo("B Sharp") . "<br>"; // Output: C C C C 
echo repeatFirstTwo("HI") . "<br>";      // Output: JSJSJSJS
echo repeatFirstTwo("k");                // Output: a
?>