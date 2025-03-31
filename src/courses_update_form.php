<?php
require_once 'components/db.php';

$courseId = isset($_GET['id']) ? intval($_GET['id']) : 0;
$course = ['id' => '', 'code' => '', 'name' => '', 'units' => '', 'contact_hours' => ''];

if ($courseId > 0) {
    // Prepare SQL query to fetch faculty details
    $sql = "SELECT * FROM courses WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $courseId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $course = $result->fetch_assoc();
    } else {
        die("Course not found!");
    }
    $stmt->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="res/css/datatables.min.css">
</head>
<body>
    <header>
        <h1>Update Course</h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    <main>
        <h2>Update Course</h2>
       <form action="courses_update_db.php" method="POST">
       <input type="hidden" id="courseId" name="courseId" value="<?php echo htmlspecialchars($course['id']); ?>">
            <label for="courseCode">Course Code:</label>
            <input type="text" id="courseCode" name="courseCode" value="<?php echo htmlspecialchars($course['code']); ?>" required><br><br>
            <label for="courseName">Course Name:</label>
            <input type="text" id="courseName" name="courseName" value="<?php echo htmlspecialchars($course['name']); ?>" required><br><br>
            <label for="units">Units:</label>
            <input type="text" id="units" name="units" value="<?php echo htmlspecialchars($course['units']); ?>" required><br><br>
            <label for="contact_hours">Contact Hours:</label>
            <input type="text" id="contact_hours" name="contact_hours" value="<?php echo htmlspecialchars($course['contact_hours']); ?>" required><br><br>
            <button type="submit">Update Course</button>
       </form>
    </main>
</body>
</html>