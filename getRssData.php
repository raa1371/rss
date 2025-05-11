<?php
// Read RSS data from JSON file
$filename = 'rss-data.json';

if (file_exists($filename)) {
    $data = file_get_contents($filename);
    echo $data;
} else {
    // Return an empty array if no data file exists
    echo json_encode([]);
}
?>
