<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "komunikator");
$conn->set_charset("utf8");

if ($conn->connect_error) { die("Błąd połączenia: " . $conn->connect_error); }

$user_id = $_SESSION['user_id'];
$content = $_POST['content'];

$sql = "INSERT INTO posts (user_id, content, created_at) VALUES (?, ?, NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $user_id, $content);
$stmt->execute();

header("Location: main.php");
exit;
