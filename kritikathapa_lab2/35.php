<!DOCTYPE html>
<html>
<body>
<h2>File Handling</h2>
<form method="post">
    Filename:
    <input type="text" name="filename" required><br><br>

    Text:
    <textarea name="text"></textarea><br><br>

    New Filename:
    <input type="text" name="newname"><br><br>

    <input type="submit" name="check" value="Check File">
    <input type="submit" name="write" value="Write File">
    <input type="submit" name="read" value="Read File">
    <input type="submit" name="rename" value="Rename File">
    <input type="submit" name="permission" value="Check Permission">
    <input type="submit" name="change" value="Change Permission">
</form>

<?php

$file = $_POST["filename"] ?? "";

if (isset($_POST["check"])) {
    if (file_exists($file))
        echo "File exists.";
    else
        echo "File does not exist.";
}

if (isset($_POST["write"])) {
    $fp = fopen($file, "w");
    fwrite($fp, $_POST["text"]);
    fclose($fp);
    echo "File written successfully.";
}

if (isset($_POST["read"])) {
    if (file_exists($file)) {
        $fp = fopen($file, "r");
        echo fread($fp, filesize($file));
        fclose($fp);
    } else {
        echo "File does not exist.";
    }
}

if (isset($_POST["rename"])) {
    if (rename($file, $_POST["newname"]))
        echo "File renamed successfully.";
    else
        echo "Rename failed.";
}

if (isset($_POST["permission"])) {
    echo "Permissions: " . substr(sprintf('%o', fileperms($file)), -4);
}

if (isset($_POST["change"])) {
    chmod($file, 0644);
    echo "Updated Permissions: " .
         substr(sprintf('%o', fileperms($file)), -4);
}

?>

</body>
</html>