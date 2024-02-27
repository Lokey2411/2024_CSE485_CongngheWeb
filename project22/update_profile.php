<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];
    $user['name'] = filter_input(INPUT_POST, 'name');
    $allowedExtensions = ['jpg', 'png', 'jpeg'];
    $maxSize = 1048576; //1MB
    $targetDir = 'avatar.jpg';

    if (!empty($_FILES['avatar']['tmp_name'])) {
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        if (!in_array($fileInfo['extension'], $allowedExtensions)) {
            $errors[] = "Only JPG, JPEG, and PNG files are allowed.";
        } else if ($_FILES['avatar']['size'] > $maxSize) {
            $errors[] = "File size must be less than 1MB.";
        } else {
            $fileName = uniqid() . "." . $fileInfo['extension'];
            $targetFile = $targetDir . $fileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFile)) {
                $user['avatar'] = $targetFile;
            } else {
                $errors[] = "Failed to upload file.";
            }
        }
    }

    if (empty($errors)) {
        echo "Profile updated successfully!";
    } else {
        echo "Errors:";
        foreach ($errors as $error) {
            echo "<br> - $error";
        }
    }
}
