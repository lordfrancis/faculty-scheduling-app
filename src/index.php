<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling App</title>
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
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Scheduling App</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="faculty.php">Faculty</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="courses.php">Courses</a>
        <a href="schedule.php">Schedule</a>
    </nav>
    <main>
        <h2>Manage Your Faculty's Schedule Efficiently</h2>
        <p>This app helps you to create and manage the schedule of your faculty with ease.</p>
        <a href="#" class="button">Get Started</a>
    </main>
    <footer>
        <p>&copy; 2025 Scheduling App. All rights reserved.</p>
    </footer>
</body>
</html>