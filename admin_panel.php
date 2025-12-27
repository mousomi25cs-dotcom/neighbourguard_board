<?php session_start(); if (!$_SESSION['admin']) header('Location: admin_login.php'); ?>
<h1>Admin Panel</h1>
<a href="logout.php">Logout</a>
<hr>
<?php
include 'connect.php';
$sql = "SELECT * FROM reports";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo "<p>{$row['crime_type']} | {$row['location']} | Status: {$row['status']}</p>";
    echo "<a href='update_status.php?id={$row['id']}'>Update Status</a>";
}
$conn->close();
?>