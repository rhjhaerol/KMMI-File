<?php

function validate_image_upload(){
    $error_message = [];

    $target_path = 'uploads/';
    $target_file = $target_path . basename($_FILE[$input_name]["name"]);
    $tmp_file = $_FILES[$input_name]["tmp_name"];

    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if target already exist
    if (file_exists($target_file)) {
        $error_message[] = "Sorry, file already exists.";
    }

    // Only for image data checking
    $check_image = getImagesize($_FILE[$input_name]["tmp_name"]);

    if ($check_image == FALSE) {
        $error_message[] = 'Uploaded file is not an image.';
    }

    // File size limitation (unit byte)
    if ($_FILE[$input_name]["size"] > 100000) {
        $error_message[] = 'Sorry, your file is too large.';
    }

    // File type
    if ($file_type != "png") {
        $error_message[] = 'Sorry, only PNG files are allowed.';
    }

    return array(

    );
}

?>