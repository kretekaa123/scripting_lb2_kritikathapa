<!DOCTYPE html>
<html>
<body>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "" || $password == "")
        echo "Username and Password are required!";
    else
        echo "Login Successful!";
}
?>

</body>
</html>