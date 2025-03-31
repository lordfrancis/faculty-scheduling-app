<?php
require_once 'components/db.php';

$facultyId = isset($_GET['id']) ? intval($_GET['id']) : 0;
$faculty = ['id' => '', 'name' => '', 'major' => ''];

if ($facultyId > 0) {
    // Prepare SQL query to fetch faculty details
    $sql = "SELECT id, name, major FROM faculty WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $facultyId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $faculty = $result->fetch_assoc();
    } else {
        die("Faculty not found!");
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
    <title>Update Faculty </title>
    <link rel="stylesheet" href="res/css/style.css">
</head>
<body>
    <header>    
        <h1><?php echo ($facultyId > 0) ? "Update Faculty" : "Add Faculty"; ?></h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    
    <main>
        <h2>Update Faculty</h2>
        <form action="faculty_update_db.php" method="POST">
            <input type="hidden" id="facultyId" name="facultyId" value="<?php echo htmlspecialchars($faculty['id']); ?>">

            <label for="facultyName">Faculty Name:</label>
            <input type="text" id="facultyName" name="facultyName" value="<?php echo htmlspecialchars($faculty['name']); ?>" required><br><br>

            <label for="major">Major:</label>
            <input type="text" id="major" name="major" value="<?php echo htmlspecialchars($faculty['major']); ?>" required><br><br>

            <button type="submit">
                <?php echo ($facultyId > 0) ? "Update Faculty" : "Add Faculty"; ?>
            </button>
        </form>
    </main>
</body>
</html>
