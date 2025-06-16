<?php

require_once 'components/db.php';

$sectionId = $_POST['sectionId'] ?? null;
$name = $_POST['name'] ?? null;
$year_level = $_POST['year_level'] ?? null;


// Query to fetch faculty data
$sql = "UPDATE class_sections set name = ?,  year_level = ? WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("sss", $name, $year_level, $sectionId);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the faculty page after successful insertion
header("Location: class-sections.php");
?>
