<?php
session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username != "" && $password != "") {
        $_SESSION["username"] = $username;
        setcookie("username", $username, time() + 3600);

        echo "Login Successful!";
    } else {
        echo "Enter username and password.";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>