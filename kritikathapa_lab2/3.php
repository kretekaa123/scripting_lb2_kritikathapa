//function convert($minutes) {
//    return $minutes * 60;
// }
<?php
function convertToSeconds($minutes) {
    return $minutes * 60;
}

$minutes = 5;
echo $minutes . " minutes = " . convertToSeconds($minutes) . " seconds.";
?>