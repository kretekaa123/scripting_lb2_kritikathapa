<?php
function length($str) {
    if ($str == "") return 0;
    return 1 + length(substr($str, 1));
}

echo length("Hello");
?>