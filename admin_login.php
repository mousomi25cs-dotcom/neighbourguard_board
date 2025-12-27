<form method="POST">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <button type="submit">Login</button>
</form>

<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == 'admin123') {
        session_start();
        $_SESSION['admin'] = true;
        header('Location: admin_panel.php');
    } else {
        echo "Invalid credentials!";
    }
}
?>