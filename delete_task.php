
<?php
$connection = mysqli_connect("localhost", "root", "yourpassword", "todo_app");
$id = $_GET['id'];
$query = "DELETE FROM tasks WHERE id = $id";
mysqli_query($connection, $query);
header("Location: index.php");
?>
