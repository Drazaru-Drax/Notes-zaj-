<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_POST['post_id'])) {
    header("Location: main.php");
    exit;
}

$post_id = (int)$_POST['post_id'];

$conn = new mysqli("localhost", "root", "", "komunikator");
$conn->set_charset("utf8");
if ($conn->connect_error) { die("Błąd połączenia: " . $conn->connect_error); }

$sql = "SELECT user_id FROM posts WHERE id = $post_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['user_id'] == $_SESSION['user_id']) {
        $conn->query("DELETE FROM posts WHERE id = $post_id");
    }
}

$conn->close();
header("Location: main.php");
exit;
?>
