<?php

require_once 'components/db.php';

$course_code = $_POST['courseCode'] ?? null;
$course_name = $_POST['courseName'] ?? null;
$units = $_POST['units'] ?? null;
$contact_hours = $_POST['contact_hours'] ?? null;

$sql = "INSERT INTO courses (code, name, units, contact_hours) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die(json_encode(["error" => "Prepare Failed: " . $conn->error]));
}

$stmt->bind_param("ssss", $course_code, $course_name, $units, $contact_hours);
$stmt->execute();

if ($stmt->error) {
    die(json_encode(["error" => "Execute Failed: " . $stmt->error]));
}

$stmt->close();

$conn->close();
// Redirect to the courses page after successful insertion
header("Location: courses.php");
?>
