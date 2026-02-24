<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>

<p>You are logged in.</p>

<br><br>

<a href="users.php">Manage Users</a>

<br><br>

<a href="logout.php">Logout</a>