<?php
$conn = new mysqli("localhost", "root", "", "testdb");

// Insert
if (isset($_POST["save"])) {
    $name = $_POST["name"];
    $rank = $_POST["rank"];
    $status = $_POST["status"];

    $conn->query("INSERT INTO users(name, rank, status, created_by)
                  VALUES('$name', '$rank', '$status', 'Admin')");
}

// Delete
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $conn->query("DELETE FROM users WHERE id=$id");
}
?>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Rank: <input type="text" name="rank" required><br><br>
    Status: <input type="text" name="status" required><br><br>
    <input type="submit" name="save" value="Save">
</form>

<h3>User Records</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Rank</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["rank"]."</td>";
    echo "<td>".$row["status"]."</td>";
    echo "<td><a href='?delete=".$row["id"]."'>Delete</a></td>";
    echo "</tr>";
}
?>

</table>