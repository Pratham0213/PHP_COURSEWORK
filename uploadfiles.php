<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    foreach ($_FILES['filesToUpload']['tmp_name'] as $key => $tmp_name) {
        move_uploaded_file($tmp_name, 'uploads/' . $_FILES['filesToUpload']['name'][$key]);
    }
   // move_uploaded_file($tmp_name, 'uploads/' . $_FILES['filesToUpload']['name'][$key]);

    echo "Files uploaded successfully.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multiple Files</title>
</head>
<body>
    <h2>Upload Multiple Files</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="filesToUpload[]" multiple><br><br>
        <input type="submit" value="Upload Files">
    </form>
</body>
</html>
