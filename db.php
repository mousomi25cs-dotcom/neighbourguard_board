## db.php (DB Connection)
<?php
$server = "localhost";
$user = "root";
$pass = ""; // your DB password
$db = "crime_reports";
$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed!");
?>
