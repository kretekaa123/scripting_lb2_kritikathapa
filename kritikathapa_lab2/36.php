<!DOCTYPE html>
<html>
<body>

<form method="post">
    Annual Income:
    <input type="number" name="income" required><br><br>

    Gender:
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br><br>

    <input type="submit" value="Calculate Tax">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $income = $_POST["income"];
    $gender = $_POST["gender"];
    $tax = 0;

    // 1% slab
    $slab1 = min($income, 1000000);
    $tax1 = $slab1 * 0.01;
    $tax += $tax1;

    // 10% slab
    $slab2 = max(0, min($income - 1000000, 500000));
    $tax2 = $slab2 * 0.10;
    $tax += $tax2;

    // 20% slab
    $slab3 = max(0, min($income - 1500000, 1000000));
    $tax3 = $slab3 * 0.20;
    $tax += $tax3;

    // 27% slab
    $slab4 = max(0, min($income - 2500000, 1500000));
    $tax4 = $slab4 * 0.27;
    $tax += $tax4;

    // 29% slab
    $slab5 = max(0, $income - 4000000);
    $tax5 = $slab5 * 0.29;
    $tax += $tax5;

    // Female discount
    if ($gender == "female") {
        $tax = $tax * 0.90;
    }

    $netIncome = $income - $tax;

    echo "<h3>Tax Calculation</h3>";
    echo "Annual Taxable Income: NPR " . $income . "<br>";
    echo "Tax at 1%: NPR " . $tax1 . "<br>";
    echo "Tax at 10%: NPR " . $tax2 . "<br>";
    echo "Tax at 20%: NPR " . $tax3 . "<br>";
    echo "Tax at 27%: NPR " . $tax4 . "<br>";
    echo "Tax at 29%: NPR " . $tax5 . "<br>";
    echo "Total Tax Payable: NPR " . $tax . "<br>";
    echo "Net Income After Tax: NPR " . $netIncome;
}
?>

</body>
</html>