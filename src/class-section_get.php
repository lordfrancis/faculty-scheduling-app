<?php

require_once 'components/db.php';

// Query to fetch faculty data
$sql = "SELECT * FROM class_sections";
$result = $conn->query($sql);

if (!$result) {
    die(json_encode(["error" => "Query Failed: " . $conn->error]));
}

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Ensure no extra whitespace before/after JSON output
echo json_encode(["data" => $data], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
$conn->close();
?>
