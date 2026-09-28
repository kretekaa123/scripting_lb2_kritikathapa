<?php
$info = [
    'name' => 'Ram Bahadur',
    'address' => 'Lalitpur',
    'email' => 'info@ram.com',
    'phone' => 98454545,
    'website' => 'www.ram.com'
];

echo "<table border='1'>";

foreach ($info as $key => $value) {
    echo "<tr><td>" . ucfirst($key) . "</td><td>$value</td></tr>";
}

echo "</table>";
?>