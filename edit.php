<?php
include 'db.php';

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id");
    header("Location: index.php");
}

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="POST">
    <input type="text" name="name" value="<?= $row['name'] ?>">
    <input type="email" name="email" value="<?= $row['email'] ?>">
    <input type="text" name="course" value="<?= $row['course'] ?>">
    <button name="update">Update</button>
</form>
