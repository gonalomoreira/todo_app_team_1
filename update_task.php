
<?php
$connection = mysqli_connect("localhost", "root", "yourpassword", "todo_app");
if (!isset($_GET['id'])) {
    header("Location: index.php?error=no_id");
    exit;
}


$id_raw = $_GET['id'];
if (!ctype_digit($id_raw)) {
    header("Location: index.php?error=invalid_id");
    exit;
}

$id = (int)$id_raw;
if ($id < 1) {
    header("Location: index.php?error=invalid_id");
    exit;
}

$stmt = $connection->prepare(
    "UPDATE tasks
        SET status = 'completed'
      WHERE id = ?"
);
$stmt->bind_param("i", $id);
if (!$stmt->execute()) {
    error_log("Erro MySQL: " . $stmt->error);
}
$stmt->close();
header("Location: index.php");
exit;
?>
