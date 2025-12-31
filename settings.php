<?php
  function getSettings() {
    // 1. Define the file path
    $filePath = 'settings.json';

    // 2. Read the JSON file content into a string
    $jsonString = file_get_contents($filePath);

    // Optional: Basic error handling for file reading
    if ($jsonString === false) {
        die('Error reading the JSON file: ' . htmlspecialchars($filePath));
    }

    // 3. Decode the JSON string into a PHP associative array
    // The 'true' argument ensures an associative array is returned instead of an object.
    $settings = json_decode($jsonString, true);

    // Optional: Basic error handling for JSON decoding
    if ($settings === null) {
        die('Error decoding the JSON data.');
    }

    return $settings;
  }
?>