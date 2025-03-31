<?php

require_once 'components/db.php';

$name = $_POST['facultyName'] ?? null;
$major = $_POST['major'] ?? null;

// Query to fetch faculty data
$sql = "INSERT INTO faculty (name, major) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("ss", $name, $major);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the faculty page after successful insertion
header("Location: faculty.php");
?>
