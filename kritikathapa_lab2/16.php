<?php
function difference($n) {
    $diff = abs($n - 51);
    
    if ($n > 51)
        return 3 * $diff;
    
    return $diff;
}

echo "n=60".difference(60);
?>