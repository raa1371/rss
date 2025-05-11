<?php
// Get POST data
$data = file_get_contents('php://input');

// Decode the JSON data
$rssFeeds = json_decode($data, true);

// Save the data to a JSON file
$filename = 'rss-data.json';
file_put_contents($filename, json_encode($rssFeeds, JSON_PRETTY_PRINT));

echo json_encode(["status" => "success"]);
?>
