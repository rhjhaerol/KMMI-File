<?php
$survey_1 = isset($_COOKIE['survey_1']) ? (array) json_decode($_COOKIE['survey_1']) : [];
$survey_2 = isset($_COOKIE['survey_2']) ? (array) json_decode($_COOKIE['survey_2']) : [];

if (empty($survey_1) || empty($survey_2)) {
    header('Location: survey_1.php');
} else if (!empty($survey_1) && empty($survey_2)) {
    header('Location: survey_2.php');
}

$summary_data = $survey_1 + $survey_2;

echo '<ul>';

foreach ($summary_data as $key => $value) {
    echo "<li>$key: $value</li>";
}

echo '</ul>';

setcookie('survey_1', '', time() - 3600, '/');
setcookie('survey_2', '', time() - 3600, '/');
