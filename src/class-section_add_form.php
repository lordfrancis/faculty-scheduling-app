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
        <h2>Add Class Section</h2>
       <form action="class-section_add_db.php" method="POST">
            <label for="name">Section Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="year_level">Year Level:</label>
            <input type="number"  min=0 max=5 id="year_level" name="year_level" required><br><br>

            <button type="submit">Add Class Section</button>
       </form>
    </main>
</body>
</html>