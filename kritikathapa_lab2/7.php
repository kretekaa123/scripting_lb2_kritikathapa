<!DOCTYPE html>
<html>
<body>

<form method="post">
    Wins: <input type="number" name="wins" min="0" required><br><br>
    Draws: <input type="number" name="draws" min="0" required><br><br>
    Losses: <input type="number" name="losses" min="0" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
function points($wins, $draws, $losses) {
    return ($wins * 3) + $draws;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $w = $_POST["wins"];
    $d = $_POST["draws"];
    $l = $_POST["losses"];


    $games = $w + $d + $l;
    $total = points($w, $d, $l);

    echo "Total Games Played = $games<br>";
    echo "Total Points = $total";
}
?>

</body>
</html>