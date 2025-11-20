<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'komunikator';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die('Błąd połączenia: ' . $conn->connect_error);
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT id, password_hash FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($user_id, $password_hash);
    $stmt->fetch();

    if (password_verify($password, $password_hash)) {
        session_start();

        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;

        header('Location: dashboard.php');
        exit;
    } else {
        echo "Błędne hasło!";
    }
} else {
    echo "Użytkownik nie istnieje!";
}

$stmt->close();
$conn->close();
?>
