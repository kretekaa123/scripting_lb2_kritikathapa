<!DOCTYPE html>
<html>
<head>
    <title>Upload Image - Client Validation</title>
</head>
<body>

    <h2>Upload Profile Image</h2>
    <div id="uploadMsg"></div>

    <form id="imageForm" onsubmit="return validateImage(event)">
        <label for="profile_img">Select Image (PNG, JPEG - Max 500KB):</label><br><br>
        <input type="file" id="profile_img" name="profile_img" accept="image/png, image/jpeg"><br><br>
        <button type="submit">Upload Image</button>
    </form>

    <script>
        function validateImage(event) {
            event.preventDefault();
            let msgDiv = document.getElementById("uploadMsg");
            let fileInput = document.getElementById("profile_img");

            // Check if file selected
            if (fileInput.files.length === 0) {
                msgDiv.innerHTML = "<p style='color:red;'>Please select an image file.</p>";
                return false;
            }

            let file = fileInput.files[0];
            let fileName = file.name;
            let fileSize = file.size; // Size in bytes

            // Get extension
            let extension = fileName.split('.').pop().toLowerCase();
            let allowedExts = ["png", "jpg", "jpeg"];
            let maxSizeBytes = 500 * 1024; // 500 KB

            // 1. Validate File Extension
            if (!allowedExts.includes(extension)) {
                msgDiv.innerHTML = "<p style='color:red;'>Invalid file type! Only PNG, JPG, and JPEG are allowed.</p>";
                return false;
            }

            // 2. Validate File Size
            if (fileSize > maxSizeBytes) {
                msgDiv.innerHTML = "<p style='color:red;'>File size exceeds 500 KB limit!</p>";
                return false;
            }

            msgDiv.innerHTML = "<p style='color:green;'>Validation successful! Ready to submit.</p>";
            return true;
        }
    </script>

</body>