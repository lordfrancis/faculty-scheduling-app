<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Room</title>
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="res/css/datatables.min.css">
</head>
<body>
    <header>
        <h1>Add Room</h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    <main>
        <h2>Add Room</h2>
       <form action="rooms_add_db.php" method="POST">
            <label for="name">Room Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="capacity">Room Capacity:</label>
            <input type="text" id="capacity" name="capacity" required><br><br>
            <label for="type">Room Type:</label>
            <select name="type" id="type" required>
                <option value="lec">Lecture</option>
                <option value="lab">Laboratory</option>
            </select><br>
            <button type="submit">Add Room</button>
       </form>
    </main>
</body>
</html>