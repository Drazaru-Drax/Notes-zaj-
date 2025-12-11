<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #121212;
    color: white;
}


.register-box {
    width: 330px;
    padding: 30px;
    border-radius: 15px;
    background: #1a1a1a;
    border: 1px solid #333;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.45);
    animation: fadeIn 0.6s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.register-box h2 {
    margin-bottom: 20px;
    font-size: 24px;
    letter-spacing: 1px;
    color: #cfcfcf;
}


.register-box input {
    width: 100%;
    padding: 12px;
    margin: 12px 0;
    border-radius: 8px;
    border: 1px solid #444;
    background: #0e0e0e;
    color: white;
    font-size: 15px;
    transition: 0.3s ease;
}

.register-box input:focus {
    border-color: #4a7cff;
    background: #151515;
    box-shadow: 0 0 8px rgba(80,120,255,0.4);
}


.register-box button {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    font-weight: bold;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    background: #4169e1;
    transition: 0.3s ease;
    margin-top: 10px;
}

.register-box button:hover {
    background: #3558c9;
    transform: scale(1.03);
}


.register-box a {
    color: #5f8dff;
    text-decoration: none;
}

.register-box a:hover {
    text-decoration: underline;
}

    </style>
</head>

<body>
    <div class="register-box">
        <h2>Rejestracja</h2>

        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Nazwa użytkownika" required />
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Hasło" required />
            <button type="submit">Zarejestruj się</button>
        </form>
    </div>
</body>
</html>
