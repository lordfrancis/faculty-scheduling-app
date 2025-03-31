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
        <h1>Add Faculty</h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    <main>
        <h2>Add Faculty</h2>
       <form action="faculty_add_db.php" method="POST">
            <label for="facultyName">Faculty Name:</label>
            <input type="text" id="facultyName" name="facultyName" required><br><br>

            <label for="major">Major:</label>
            <input type="text" id="major" name="major" required><br><br>

            <button type="submit">Add Faculty</button>
       </form>
    </main>
</body>
</html>