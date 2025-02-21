<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        nav {
            background-color: #444;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        main {
            padding: 2rem;
            max-width: 800px;
            margin: 2rem auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Faculty</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="faculty.php">Faculty</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="courses.php">Courses</a>
        <a href="schedule.php">Schedule</a>
    </nav>
    <main>
        <h2>Faculty Management</h2>
        <p>This page will be used for CRUD operations for faculty.</p>
    </main>
    <footer>
        <p>&copy; 2025 Scheduling App. All rights reserved.</p>
    </footer>
</body>
</html>