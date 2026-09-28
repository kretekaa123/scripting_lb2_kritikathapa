<!DOCTYPE html>
<html>
<body>

<form method="post">
    Principal: <input type="number" name="p" required><br><br>
    Rate: <input type="number" name="r" required><br><br>
    Time: <input type="number" name="t" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p = $_POST["p"];
    $r = $_POST["r"];
    $t = $_POST["t"];

    $si = ($p * $r * $t) / 100;

    echo "Simple Interest = " . $si;
}
?>

</body>
</html>