<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Address: <input type="text" name="address"><br><br>
    Username: <input type="text" name="username"><br><br>
    Email: <input type="text" name="email"><br><br>
    Password: <input type="password" name="password"><br><br>
    Website: <input type="text" name="website"><br><br>
    Phone: <input type="text" name="phone"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Course:
    <select name="course">
        <option value="">Select Course</option>
        <option value="BCA">BCA</option>
        <option value="BBS">BBS</option>
        <option value="BIT">BIT</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $website = $_POST["website"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"] ?? "";
    $course = $_POST["course"];

    if (!preg_match("/^[a-zA-Z ]+$/", $name))
        echo "Invalid Name<br>";

    elseif (empty($address))
        echo "Address is required<br>";

    elseif (!preg_match("/^[a-zA-Z0-9_]+$/", $username))
        echo "Invalid Username<br>";

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        echo "Invalid Email<br>";

    elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[\W]).{8,}$/", $password))
        echo "Invalid Password<br>";

    elseif (!filter_var($website, FILTER_VALIDATE_URL))
        echo "Invalid Website<br>";

    elseif (!preg_match("/^(96|97|98)[0-9]{8}$/", $phone))
        echo "Invalid Phone<br>";

    elseif ($gender == "")
        echo "Select Gender<br>";

    elseif (!in_array($course, ["BCA", "BBS", "BIT"]))
        echo "Select a valid Course<br>";

    else
        echo "<h3>Form Submitted Successfully!</h3>";
}
?>

</body>
</html>