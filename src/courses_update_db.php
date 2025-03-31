<?php

require_once 'components/db.php';

$courseId = $_POST['courseId'] ?? null;
$course_code = $_POST['courseCode'] ?? null;
$course_name = $_POST['courseName'] ?? null;
$units = $_POST['units'] ?? null;
$contact_hours = $_POST['contact_hours'] ?? null;

// Query to fetch faculty data
$sql = "UPDATE courses set code = ?,  name = ?, units = ?, contact_hours = ? WHERE id = ?";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("sssss", $course_code, $course_name, $units, $contact_hours, $courseId);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the faculty page after successful insertion
header("Location: courses.php");
?>
