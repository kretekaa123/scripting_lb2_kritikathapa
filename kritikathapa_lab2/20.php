<?php
function addChars($str) {
    $first = substr($str, 0, 3);
    return $first . $str . $first;
}

echo addChars("Python") . "<br>";
echo addChars("JS") . "<br>";
echo addChars("Code");
?>