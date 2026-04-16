<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add DashBoard</title>
    <link rel = "stylesheet" href = "style.css" />
    
</head>
<script src="script.js"></script>
<body>
    <div class = "design";>
    <div class = "form-design";>
        <h1> Add User</h1>
        <form onsubmit="addStudent(); return false;">
            <input type="text" id="name" placeholder="Name" required>
            <label for="COURSE">Choose your course:</label>
            <select id="course" name="course" required>
            <option value="BSIT">BSIT</option>
            <option value="BSIS">BSIS</option>
            <option value="BLIS">BLIS</option>
            <option value="BSCS">BSCS</option>
            </select>
            <input type="text" id="phone" placeholder="Phone" required>
            <textarea id="address" placeholder="Address" required></textarea>
            <div class = "btn-box">
                <button type = "Submit" class= "btn" name="add"> Submit</button>
                <a href= "index.php" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</div>


</body>
</html>
