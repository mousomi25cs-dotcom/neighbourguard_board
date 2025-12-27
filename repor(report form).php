<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Crime | CrimeSpot</title>
    <style>
        /* same styles as before (attractive form CSS) */
    </style>
</head>
<body>
    <div class="container">
        <h1>Report a Crime</h1>
        <form method="post">
            <div class="form-group">
                <label>Location</label>
                <input name="location" required>
            </div>
            <div class="form-group">
                <label>Crime Type</label>
                <select name="crime_type">
                    <option>Theft</option>
                    <option>Assault</option>
                    <option>Vandalism</option>
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" required></textarea>
            </div>
            <button class="submit-btn">Submit Report</button>
        </form>
        <?php
        if ($_POST) {
            $loc = $_POST['location'];
            $type = $_POST['crime_type'];
            $desc = $_POST['description'];
            $sql = "INSERT INTO reports (location, crime_type, description) VALUES ('$loc', '$type', '$desc')";
            if ($conn->query($sql)) echo "<p>Report submitted!</p>";
            else echo "<p>Error: " . $conn->error . "</p>";
        }
        ?>
    </div>
</body>
</html>

