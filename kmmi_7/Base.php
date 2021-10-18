<?php

function validate_image_upload($input_name)
{
    $error_message = [];

    $target_path = 'uploads/';
    $target_file = $target_path . basename($_FILES[$input_name]["name"]);
    $tmp_file = $_FILES[$input_name]["tmp_name"];

    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if target already exist
    if (file_exists($target_file)) {
        $error_message[] = "Sorry, file already exists.";
    }

    // Only for image data checking
    $check_image = getimagesize($_FILES[$input_name]["tmp_name"]);

    if ($check_image == FALSE) {
        $error_message[] = 'Uploaded file is not an image.';
    }

    // File size limitation (unit byte)
    if ($_FILES[$input_name]["size"] > 100000) {
        $error_message[] = "Sorry, your file is too large.";
    }

    // File type limitation
    if ($file_type != "png") {
        $error_message[] = "Sorry, only PNG files are allowed.";
    }

    return array(
        'success' => empty($error_message),
        'message' => $error_message,
        'target' => $target_file,
        'tmp' => $tmp_file,
    );
}

function validate_pdf_upload($input_name)
{
    $error_message = [];

    $target_path = 'uploads/documents/';
    $target_file = $target_path . basename($_FILES[$input_name]["name"]);

    $file_name_target = $target_path . pathinfo($target_file, PATHINFO_FILENAME) . date('d_m_Y__h_i_s') . '.' . pathinfo($target_file, PATHINFO_EXTENSION);

    $tmp_file = $_FILES[$input_name]["tmp_name"];

    $file_type = strtolower(pathinfo($file_name_target, PATHINFO_EXTENSION));

    // Check if target already exist
    if (file_exists($file_name_target)) {
        $error_message[] = "Sorry, file already exists.";
    }

    // File size limitation (unit byte)
    if ($_FILES[$input_name]["size"] > 1000000) {
        $error_message[] = "Sorry, your file is too large.";
    }

    // File type limitation
    if ($file_type != "pdf") {
        $error_message[] = "Sorry, only PDF files are allowed.";
    }

    return array(
        'success' => empty($error_message),
        'message' => $error_message,
        'target' => $file_name_target,
        'tmp' => $tmp_file,
    );
}
