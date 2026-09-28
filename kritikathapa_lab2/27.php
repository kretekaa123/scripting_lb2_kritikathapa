<!DOCTYPE html>
<html>
<body>
    <h2>Upload CV</h2>

<form method="post" enctype="multipart/form-data">
    Select CV:
    <input type="file" name="cv">
    <input type="submit" value="Upload">
</form>

<?php
if (isset($_FILES["cv"])) {
    $file = $_FILES["cv"];
    $name = $file["name"];
    $size = $file["size"];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

    if (($ext == "pdf" || $ext == "doc" || $ext == "docx") && $size < 1024 * 1024) {
        move_uploaded_file($file["tmp_name"], "uploads/" . $name);
        echo "CV uploaded successfully!";
    } else {
        echo "Only PDF/DOC/DOCX files under 1 MB are allowed.";
    }
}
?>

</body>
</html>