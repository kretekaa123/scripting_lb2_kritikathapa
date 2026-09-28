<!DOCTYPE html>
<html>
<body>

<h2>Student Mark Sheet</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Roll No: <input type="text" name="roll" required><br><br>

    PHP: <input type="number" name="php" required><br><br>
    DBMS: <input type="number" name="dbms" required><br><br>
    DSA: <input type="number" name="dsa" required><br><br>
    Web: <input type="number" name="web" required><br><br>

    <input type="submit" name="submit" value="Generate Mark Sheet">
</form>

<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $php = $_POST["php"];
    $dbms = $_POST["dbms"];
    $dsa = $_POST["dsa"];
    $web = $_POST["web"];

    $total = $php + $dbms + $dsa + $web;
    $percentage = $total / 4;

    if ($percentage >= 40)
        $result = "Pass";
    else
        $result = "Fail";

    echo "<h2>Mark Sheet</h2>";
    echo "Name: $name<br>";
    echo "Roll No: $roll<br><br>";

    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Subject</th><th>Marks</th></tr>";
    echo "<tr><td>PHP</td><td>$php</td></tr>";
    echo "<tr><td>DBMS</td><td>$dbms</td></tr>";
    echo "<tr><td>DSA</td><td>$dsa</td></tr>";
    echo "<tr><td>Web</td><td>$web</td></tr>";
    echo "<tr><th>Total</th><th>$total</th></tr>";
    echo "<tr><th>Percentage</th><th>$percentage%</th></tr>";
    echo "<tr><th>Result</th><th>$result</th></tr>";
    echo "</table>";
}
?>

</body>
</html>