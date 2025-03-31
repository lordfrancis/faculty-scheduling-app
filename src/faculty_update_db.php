<?php

require_once 'components/db.php';

$facultyId = $_POST['facultyId'] ?? null;
$name = $_POST['facultyName'] ?? null;
$major = $_POST['major'] ?? null;

// Query to fetch faculty data
$sql = "UPDATE faculty set name = ?,  major = ? WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("sss", $name, $major, $facultyId);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the faculty page after successful insertion
header("Location: faculty.php");
?>
