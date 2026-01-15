<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Beginner Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Management</h2>

<form action="add.php" method="POST">
    <input type="text" name="name" placeholder="Student Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>
    <button type="submit">Add Student</button>
</form>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Actions</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['course'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>