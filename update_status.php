<?php session_start(); if (!$_SESSION['admin']) header('Location: admin_login.php'); ?>
<?php
include 'connect.php';
$id = $_GET['id'];
if ($_POST) {
    $status = $_POST['status'];
    $sql = "UPDATE reports SET status=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $id);
    $stmt->execute();
    header('Location: admin_panel.php');
}
?>
<form method="POST">
    Status:
    <select name="status">
        <option>Pending</option>
        <option>Investigating</option>
        <option>Resolved</option>
    </select>
    <button>Update</button>
</form>
