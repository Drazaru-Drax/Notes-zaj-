        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $conn = new mysqli("localhost", "root", "", "komunikator");

            if ($conn->connect_error) {
                die('Błąd połączenia: ' . $conn->connect_error);
            }

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);

            if ($stmt->execute()) {
                echo "<p style='color: green;'>Rejestracja zakończona sukcesem! <a href='Logowanie.php'>Zaloguj się</a></p>";
            } else {
                echo "<p style='color: red;'>Błąd: użytkownik istnieje lub problem z bazą danych.</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    