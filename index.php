<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neighbourguard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https:                                                                     
</head>
<body>
    <header>
        Neighbourguard
    </header>
    <div class="container">
        <h1>Neighbour guard Board</h1>
        <h2>Crimes Report board</h2>
        <h3>You safety is our priority</h3>
        <a href="report.php" class="report-btn">Report a Crime</a> | <a href="admin_login.php">Admin Login</a>
        
        <?php
        include 'connect.php';
        $sql = "SELECT * FROM reports ORDER BY id DESC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo '<div class="crime-card">';
            echo '<h3><i class="fas fa-exclamation-triangle"></i>' . $row['crime_type'] . ' at ' . $row['location'] . '</h3>';
            echo '<p class="crime-desc">' . $row['description'] . '</p>';
            echo '<p class="crime-meta">Reported by: ' . $row['reporter_name'] . ' | Status: ' . $row['status'] . '</p>';
            echo '</div>';
        }
        $conn->close();
        ?>
        
        <!-- Hardcoded crime card example -->
        <div class="crime-card">
            <h3><i class="fas fa-bug"></i>HB Incident at Downtown</h3>
            <p class="crime-desc">Harassment and burglary reported.</p>
            <p class="crime-meta">Reported by: John Doe | Status: Under Investigation</p>
        </div>
    </div>
</body>
</html>