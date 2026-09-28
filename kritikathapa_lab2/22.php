<?php
function upperLast3($str) {
    $n = strlen($str);
    if ($n < 3)
        return strtoupper($str);

    return substr($str, 0, $n - 3) . strtoupper(substr($str, -3));
}

echo upperLast3("Nepal") . "<br>";
echo upperLast3("Hello") . "<br>";
echo upperLast3("ByEe") . "<br>";
?>