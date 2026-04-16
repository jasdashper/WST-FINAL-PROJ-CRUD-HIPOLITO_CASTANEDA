<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main DashBoard</title>
    <link rel = "stylesheet" href = "style.css" />
</head>
<script src="script.js"> </script>

<body onload="loadData()">

<div class="container">
    <h1>Student List</h1>
    <a href="add.php">Add user</a>

    <table class="table">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Name</th>
                <th>Course</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="data"></tbody> 
    </table>
 
</div>
</body>
</html>
