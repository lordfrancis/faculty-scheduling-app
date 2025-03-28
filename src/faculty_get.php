<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

// Database connection
$host = "db"; // Change if needed
$user = "root"; // Your database user
$password = "examplepassword"; // Your database password
$database = "scheduling_app"; // Change to your actual database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database Connection Failed: " . $conn->connect_error]));
}

// Query to fetch faculty data
$sql = "SELECT id, name, major FROM faculty";
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
