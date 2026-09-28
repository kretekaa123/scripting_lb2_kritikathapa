<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
}
th, td {
    border: 1px solid black;
    padding: 5px;
}
th {
    background: lightgray;
}
.pass {
    background-color: #00ff99;
}
.fail {
    background-color: red;
}
</style>
</head>

<body>

<h2>Mark Ledger</h2>

<?php
$students = [
    [1, "Rajesh", 25, 56, 89, 57, 64, 98],
    [2, "Hari", 5, 56, 89, 57, 64, 98],
    [3, "Shyam", 6, 54, 79, 57, 69, 98],
    [4, "Rita", 10, 16, 89, 56, 64, 98],
    [5, "Gita", 45, 56, 89, 57, 69, 98]
];

echo "<table>";
echo "<tr>
<th>SN</th><th>Name</th><th>Roll</th><th>Web Tech II</th>
<th>DBMS</th><th>Economics</th><th>DSA</th><th>Account</th>
<th>Total</th><th>Result</th>
</tr>";

foreach ($students as $s) {

    $total = $s[2] + $s[3] + $s[4] + $s[5] + $s[6] + $s[7];

    $result = ($s[2] >= 24 && $s[3] >= 24 && $s[4] >= 24 &&
               $s[5] >= 24 && $s[6] >= 24 && $s[7] >= 24)
               ? "pass" : "fail";

    echo "<tr>";
    echo "<td>$s[0]</td><td>$s[1]</td><td>$s[2]</td>
          <td>$s[3]</td><td>$s[4]</td><td>$s[5]</td>
          <td>$s[6]</td><td>$s[7]</td><td>$total</td>";

    // Only Result column gets color
    echo "<td class='$result'>$result</td>";

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>