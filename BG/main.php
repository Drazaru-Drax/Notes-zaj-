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
<title>Strona główna</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: #121212;
    color: white;
}

.top {
    background: rgba(20, 20, 20, 0.9);
    padding: 12px 22px;
    border-bottom: 1px solid #2a2a2a;
    backdrop-filter: blur(6px);
    box-shadow: 0 0 12px rgba(0,0,0,0.4);
    animation: fadeIn 0.6s ease;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top a {
    color: #dcdcdc;
    text-decoration: none;
    font-size: 14px;
    transition: 0.25s ease;
}

.top a:hover {
    color: #4a7cff;
}

.container {
    display: flex;
    padding: 25px;
    gap: 25px;
}

.posts {
    flex: 3;
}

.post {
    background: rgba(20,20,20,0.9);
    border: 1px solid #2a2a2a;
    padding: 18px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.4);
    backdrop-filter: blur(5px);
    margin-bottom: 18px;
    animation: fadeIn 0.5s ease;
    position: relative;
}

.post .author {
    font-weight: bold;
    letter-spacing: 0.5px;
}

.post .time {
    font-size: 12px;
    color: #a0a0a0;
    margin-top: 5px;
}

.delete-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #c0392b;
    border: none;
    color: white;
    padding: 6px 10px;
    border-radius: 6px;
    font-size: 12px;
    cursor: pointer;
    transition: 0.25s ease;
}

.delete-btn:hover {
    background: #e74c3c;
    transform: scale(1.05);
}

.addpost {
    flex: 1;
    background: rgba(20,20,20,0.9);
    border: 1px solid #2a2a2a;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 0 15px rgba(0,0,0,0.4);
    backdrop-filter: blur(5px);
    animation: fadeIn 0.6s ease;
}

textarea {
    width: 100%;
    height: 90px;
    background: #0e0e0e;
    color: white;
    border: 1px solid #333;
    padding: 10px;
    border-radius: 8px;
    resize: none;
    transition: 0.25s ease;
}

textarea:focus {
    border-color: #4a7cff;
    background: #151515;
    box-shadow: 0 0 10px rgba(74,124,255,0.4);
}

button.submit-btn {
    width: 100%;
    background: #4169e1;
    border: none;
    padding: 12px;
    margin-top: 12px;
    color: white;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    font-weight: bold;
    transition: 0.25s ease;
}

button.submit-btn:hover {
    background: #3557be;
    transform: scale(1.03);
}

img {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    object-fit: cover;
    border: 1px solid #333;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}

</style>
</head>
<body>

<div class="top">
    <a href="start.php">Wyloguj</a>
    <a href="komunikator.php"><img src="mess.jpg"></a>
</div>

<div class="container">
    <div class="posts">
        <h2>Posty</h2>
        <?php
        $sql = "SELECT posts.id, posts.content, posts.created_at, posts.user_id, username FROM posts
                JOIN users ON posts.user_id = users.user_id
                ORDER BY posts.id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='post'>";
                echo "<div class='author'>" . htmlspecialchars($row['username']) . "</div>";
                echo "<div class='content'>" . nl2br(htmlspecialchars($row['content'])) . "</div>";
                echo "<div class='time'>Dodano: " . $row['created_at'] . "</div>";

                if ($row['user_id'] == $_SESSION['user_id']) {
                    echo "<form method='POST' action='./usun_post.php' style='display:inline;'>";
                    echo "<input type='hidden' name='post_id' value='" . $row['id'] . "'>";
                    echo "<button type='submit' class='delete-btn'>Usuń</button>";
                    echo "</form>";
                }

                echo "</div>";
            }
        } else {
            echo "<p>Brak postów.</p>";
        }
        ?>
    </div>

    <div class="addpost">
        <h3>Dodaj post</h3>
        <form action="dodaj_post.php" method="POST">
            <textarea name="content" placeholder="Napisz coś..." required></textarea>
            <button type="submit" class="submit-btn">Dodaj</button>
        </form>
    </div>
</div>

</body>
</html>
