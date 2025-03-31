<?php

require_once 'components/db.php';

$courseId = $_GET['id'] ?? null;

// Query to fetch faculty data
$sql = "DELETE from courses WHERE id = ?";


$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("s", $courseId);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the faculty page after successful insertion
header("Location: courses.php");
?>
