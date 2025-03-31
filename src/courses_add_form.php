<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Faculty</title>
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="res/css/datatables.min.css">
</head>
<body>
    <header>
        <h1>Add Course</h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    <main>
        <h2>Add Course</h2>
       <form action="courses_add_db.php" method="POST">
            <label for="courseCode">Course Code:</label>
            <input type="text" id="courseCode" name="courseCode" required><br><br>
            <label for="courseName">Course Name:</label>
            <input type="text" id="courseName" name="courseName" required><br><br>
            <label for="units">Units:</label>
            <input type="text" id="units" name="units" required><br><br>
            <label for="contact_hours">Contact Hours:</label>
            <input type="text" id="contact_hours" name="contact_hours" required><br><br>
            <button type="submit">Add Course</button>
       </form>
    </main>
</body>
</html>