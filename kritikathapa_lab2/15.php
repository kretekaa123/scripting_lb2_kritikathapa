<?php
function sum($a, $b) {
    if ($a == $b)
        return 3 * ($a + $b);
    return $a + $b;
}

echo "Sum=" .sum(5, 5);
?>
