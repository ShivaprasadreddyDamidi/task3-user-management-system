<?php
require 'db.php';
session_start();

$stmt = $db->query("SELECT * FROM users");
$users = $stmt->fetchAll();
?>

<h2>User List</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php foreach($users as $u){ ?>

<tr>
<td><?php echo $u['id']; ?></td>
<td><?php echo $u['name']; ?></td>
<td><?php echo $u['email']; ?></td>

<td>
<a href="edit.php?id=<?php echo $u['id']; ?>">Edit</a> |
<a href="delete.php?id=<?php echo $u['id']; ?>"
onclick="return confirm('Delete this user?')">
Delete
</a>
</td>
</tr>

<?php } ?>

</table>

<a href="dashboard.php">Back</a>