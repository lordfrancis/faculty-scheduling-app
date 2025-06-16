<?php

require_once 'components/db.php';

$roomId = $_POST['roomId'] ?? null;
$name = $_POST['name'] ?? null;
$capacity = $_POST['capacity'] ?? null;
$type = $_POST['type'] ?? null;

// Update query for rooms table
$sql = "UPDATE rooms SET name = ?, capacity = ?, type = ? WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("sisi", $name, $capacity, $type, $roomId);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the rooms page after successful update
header("Location: rooms.php");
?>