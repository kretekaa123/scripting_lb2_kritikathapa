<?php
function addIf($str) {
    if (strpos($str, "if") === 0) {
        return $str;
    }
    return "if " . $str;
}
echo "<strong>Output: </strong><br>";
echo addIf("if else") . "<br>";
echo addIf("else") . "<br>";
echo addIf("if");
?>
