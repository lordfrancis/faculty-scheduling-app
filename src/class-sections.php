<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <link rel="stylesheet" href="res/css/style.css">
    <link rel="stylesheet" href="res/css/datatables.min.css">
</head>
<body>
    <header>
        <h1>Faculty</h1>
    </header>
    <?php require_once 'components/nav.php'; ?>
    <main>
        <h2>Section Management</h2>
        <p>This page will be used for CRUD operations for faculty.</p>
        <table id="facultyTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Year Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <a href="class-section_add_form.php"><button>Add Section</button> </a>
    </main>
    <footer>
        <p>&copy; 2025 Scheduling App. All rights reserved.</p>
    </footer>
</body>
</html>

<script src="res/js/jquery-3.7.1.min.js"></script>
<script src="res/js/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#facultyTable').DataTable({
            "processing": true,
            "serverSide": false,
            "ajax": {
                "url": "class-section_get.php",
                "type": "GET",
                "dataSrc": "data" // Ensure this matches the JSON structure
            },
            "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "year_level" },
                {
                    "data": "id",
                    "render": function(data, type, row) {
                        return `
                            <a href="class-section_update_form.php?id=${data}" class="btn btn-primary">Update</a>
                            <a href="class-section_delete.php?id=${data}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        `;
                    }
                }
            ]
        });
    });
</script>
