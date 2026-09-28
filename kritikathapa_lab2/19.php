<?php
function addLastChar($str) {
    $last = substr($str, -1);
    return $last . $str . $last;
}

echo addLastChar("Bleh") . "<br>";
echo addLastChar("Cas") . "<br>";
echo addLastChar("21");
?>