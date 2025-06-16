<?php
require_once 'components/db.php';

$roomId = isset($_GET['id']) ? intval($_GET['id']) : 0;
$room = ['id' => '', 'name' => '', 'capacity' => '', 'type' => ''];

if ($roomId > 0) {
    // Prepare SQL query to fetch faculty details
    $sql = "SELECT * FROM rooms WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $roomId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        die("Room not found!");
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
    <title>Update Room</title>
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="res/css/datatables.min.css">
</head>
<body>
    <header>
        <h1>Update Room</h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    <main>
        <h2>Update Rooms</h2>
       <form action="rooms_update_db.php" method="POST">
       <input type="hidden" id="roomId" name="roomId" value="<?php echo htmlspecialchars($room['id']); ?>">
            <label for="name">Room Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($room['name']); ?>" required><br><br>
            <label for="capacity">Room Capacity:</label>
            <input type="text" id="capacity" name="capacity" value="<?php echo htmlspecialchars($room['capacity']); ?>" required><br><br>
            <label for="type">Room Type:</label>
            <select name="type" id="type" required>
                <option value="lec" <?php echo $room['type'] === 'lec' ? 'selected' : ''; ?>>Lecture</option>
                <option value="lab" <?php echo $room['type'] === 'lab' ? 'selected' : ''; ?>>Laboratory</option>
            </select><br>
            <button type="submit">Update Course</button>
       </form>
    </main>
</body>
</html>