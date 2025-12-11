<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logowanie</title>

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


.login-box {
    width: 330px;
    padding: 30px;
    border-radius: 15px;
    background: rgba(20, 20, 20, 0.9);
    border: 1px solid #2a2a2a;
    backdrop-filter: blur(6px);
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    text-align: center;
    animation: fadeIn 0.6s ease;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}


.login-box h2 {
    margin-bottom: 20px;
    font-size: 24px;
    letter-spacing: 1px;
    color: #dcdcdc;
}


.login-box input {
    width: 100%;
    padding: 12px;
    margin: 12px 0;
    border-radius: 8px;
    border: 1px solid #333;
    background: #0e0e0e;
    color: white;
    font-size: 15px;
    transition: 0.25s ease;
}

.login-box input:focus {
    border-color: #4a7cff;
    background: #151515;
    box-shadow: 0 0 10px rgba(74,124,255,0.4);
}


.login-box button {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    font-weight: bold;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    background: #4169e1;
    transition: 0.25s ease;
    margin-top: 10px;
}

.login-box button:hover {
    background: #3557be;
    transform: scale(1.03);
}

    </style>
</head>

<body>
    <div class="login-box">
        <h2>Logowanie</h2>

        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Nazwa użytkownika" required />
            <input type="password" name="password" placeholder="Hasło" required />
            <button type="submit">Zaloguj się</button>
        </form>
    </div>
</body>
</html>
