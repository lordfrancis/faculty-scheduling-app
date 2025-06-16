<?php

require_once 'components/db.php';

$roomId = $_GET['id'] ?? null;

// Query to delete room data
$sql = "DELETE FROM rooms WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("i", $roomId);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the rooms page after successful deletion
header("Location: rooms.php");
?>