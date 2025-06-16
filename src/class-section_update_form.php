<?php
require_once 'components/db.php';

$sectionId = isset($_GET['id']) ? intval($_GET['id']) : 0;
$section = ['id' => '', 'name' => '', 'year_level' => ''];

if ($sectionId > 0) {
    // Prepare SQL query to fetch faculty details
    $sql = "SELECT * FROM class_sections WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $sectionId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $section = $result->fetch_assoc();
    } else {
        die("Section not found!");
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
    <title>Update Section</title>
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="res/css/datatables.min.css">
</head>
<body>
    <header>
        <h1>Update Section</h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    <main>
        <h2>Update Section</h2>
        <form action="class-section_update_db.php" method="POST">
            <input type="hidden" id="sectionId" name="sectionId" value="<?php echo htmlspecialchars($section['id']); ?>">
            <label for="name">Section Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($section['name']); ?>" required><br><br>

            <label for="year_level">Year Level:</label>
            <input type="number"  min=0 max=5 id="year_level" name="year_level" value="<?php echo htmlspecialchars($section['year_level']); ?>" required><br><br>

            <button type="submit">Update Class Section</button>
       </form>
    </main>
</body>
</html>