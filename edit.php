<?php
require 'db.php';

$id = $_GET['id'];

$stmt = $db->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if(isset($_POST['update'])){

$name=$_POST['name'];
$email=$_POST['email'];

$up=$db->prepare("UPDATE users SET name=?,email=? WHERE id=?");
$up->execute([$name,$email,$id]);

header("Location: users.php");
}
?>

<h2>Edit User</h2>

<form method="post">

<input name="name" value="<?php echo $user['name']; ?>"><br><br>

<input name="email" value="<?php echo $user['email']; ?>"><br><br>

<button name="update">Update</button>

</form>