<!DOCTYPE html>
<html>
<head>
    <title>Report Crime</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Report a Crime</h1>
    <form method="POST">
        Location: <input type="text" name="location" required>
        Crime Type:
        <select name="crime_type">
            <option>Theft</option>
            <option>Assault</option>
            <option>Cyber Crime</option>
        </select>
        Description: <textarea name="description" required></textarea>
        Your Name: <input type="text" name="reporter_name" required>
        <button type="submit">Submit Report</button>
    </form>
    <a href="index.php">Back to Home</a>

    <?php
    if ($_POST) {
        include 'connect.php';
        $sql = "INSERT INTO reports (location, crime_type, description, reporter_name) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $_POST['location'], $_POST['crime_type'], $_POST['description'], $_POST['reporter_name']);
        $stmt->execute();
        echo "<p class='success'>Report submitted!</p>";
        $conn->close();
    }
    ?>
</body>
</html>