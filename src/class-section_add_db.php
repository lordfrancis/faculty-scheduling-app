<?php

require_once 'components/db.php';

$name = $_POST['name'] ?? null;
$year_level= $_POST['year_level'] ?? null;


$sql = "INSERT INTO class_sections (name, year_level) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("ss", $name, $year_level);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the courses page after successful insertion
header("Location: class-sections.php");
?>
