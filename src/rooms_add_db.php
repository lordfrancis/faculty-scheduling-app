<?php

require_once 'components/db.php';

$name = $_POST['name'] ?? null;
$capacity = $_POST['capacity'] ?? null;
$type = $_POST['type'] ?? null;

$sql = "INSERT INTO rooms (name, capacity, type) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("sss", $name, $capacity, $type);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the courses page after successful insertion
header("Location: rooms.php");
?>
