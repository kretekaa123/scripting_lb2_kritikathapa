<?php
function comp($str1, $str2) {
    return strlen($str1) === strlen($str2);
}

// Example usage:
var_dump(comp("AB", "CD"));      // bool(true)
echo "<br>";
var_dump(comp("ABC", "DE"));     // bool(false)
?>