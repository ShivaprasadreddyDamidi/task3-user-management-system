<?php
session_start();
require 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if($user && password_verify($pass,$user['password'])){
        $_SESSION['user'] = $user['name'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login!";
    }
}
?>

<h2>Login</h2>

<form method="post">
<input name="email" placeholder="Email" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<button name="login">Login</button>
</form>