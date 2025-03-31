<?php
// Database connection
$host = "db"; // Change if needed
$user = "root"; // Your database user
$password = "examplepassword"; // Your database password
$database = "scheduling_app"; // Change to your actual database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database Connection Failed: " . $conn->connect_error]));
}