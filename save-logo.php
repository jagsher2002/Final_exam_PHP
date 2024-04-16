<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "img/";
    $targetFile = $targetDir . basename($_FILES["logo"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file type
    if ($imageFileType != "png") {
        echo "Sorry, only PNG files are allowed.";
    } else {
        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFile)) {
            echo "Logo uploaded successfully.";
        } else {
            echo "Error uploading logo.";
        }
    }
}
?>