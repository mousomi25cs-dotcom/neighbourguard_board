## index.php (Homepage)
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neighbourhood Crime Reporting</title>
    <style>
        @import url('https://st3.depositphotos.com/4428871/13459/v/450/depositphotos_134592664-stock-illustration-crime-word-cloud.jpg')                                                                          
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background:         
            color:         
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            color:         
        }
        .crime-card {
            background:         
            border-radius: 12px;
            padding: 20px;
            margin: 15px 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .crime-type {
            color:         
            font-weight: 600;
        }
        .location {
            color:         
            font-size: 0.9em;
        }
        .desc {
            margin: 10px 0;
        }
        .btn {
            padding: 8px 16px;
            background: linear-gradient(45deg,                   
            color:      
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">CrimeSpot 🗺️</h1>
        <a href="report.php" class="btn">Report a Crime</a>
        <h2>Recent Reports</h2>
        <?php
        $sql = "SELECT * FROM reports ORDER BY reported_at DESC";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) { ?>
            <div class="crime-card">
                <span class="crime-type"><?=$row['crime_type']?></span> •
                <span class="location"><?=$row['location']?></span>
                <p class="desc"><?=$row['description']?></p>
                <small><?=$row['reported_at']?></small>
            </div>
        <?php } ?>
    </div>
</body>
</html>
