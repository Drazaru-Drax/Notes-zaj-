<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "komunikator");
$conn->set_charset("utf8");

if ($conn->connect_error) { die("Błąd połączenia: " . $conn->connect_error); }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>

    <style>
        body { 
            background: #121212; 
            color: white;
            font-family: Arial;
            padding: 20px; }
        .post { background: #1e1e1e;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 15px; }
        form, textarea, button { 
            width: 100%; }
        textarea { height: 80px;
            background: #000;
            color: white;
            border: 1px solid #444;
            padding: 8px; }
        button { margin-top: 10px;
            padding: 10px;
            background: #4CAF50;
            border: none;
            color: white;
            cursor: pointer; }
        #com {
            width: 150px;
            background: red;
            border: none;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
            <button type="submit" id = "com"><a href = "komunikator.php">Komunikator</a></button>

<h1>Strona główna</h1>

<form action="dodaj_post.php" method="POST">
    <h3>Dodaj nowy post</h3>
    <textarea name="content" placeholder="Napisz coś..." required></textarea>
    <button type="submit">Dodaj post</button>
</form>

<h2>Posty</h2>

<?php
$sql = "
SELECT posts.id, posts.content, posts.created_at, username AS username
FROM posts
JOIN users ON posts.user_id = users.user_id
ORDER BY posts.id DESC
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<strong>" . htmlspecialchars($row['username']) . "</strong><br>";
        echo "<p>" . htmlspecialchars($row['content']) . "</p>";
        echo "<span style='font-size:12px;color:gray;'>Dodano: " . $row['created_at'] . "</span>";
        echo "</div>";
    }
} else {
    echo "<p>Brak postów.</p>";
}
?>

</body>
</html>
