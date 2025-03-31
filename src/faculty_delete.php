<?php

require_once 'components/db.php';

$facultyId = $_GET['id'] ?? null;

var_dump($facultyId); // Debugging line

// Query to fetch faculty data
$sql = "DELETE from faculty WHERE id = ?";


$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("s", $facultyId);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the faculty page after successful insertion
header("Location: faculty.php");
?>
