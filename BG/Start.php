<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    background: #1a1a1a;
    border: 1px solid #333;
    box-shadow: 0 0 25px rgba(0, 0, 0, 0.45);
    animation: fadeIn 0.6s ease;
    text-align: center;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.login-box h2 {
    margin-bottom: 20px;
    font-size: 24px;
    letter-spacing: 1px;
    color: #cfcfcf;
}

.login-box p {
    margin-bottom: 20px;
    font-size: 15px;
    color: #aaaaaa;
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
    transition: 0.3s ease;
    margin-top: 10px;
}

.login-box button:hover {
    background: #3558c9;
    transform: scale(1.03);
}

.login-box a {
    color: #5f8dff;
    text-decoration: none;
}

.login-box a:hover {
    text-decoration: underline;
}
    </style>
</head>

<body>
    <div class="login-box">
        <h2>Co chcesz zrobić?</h2>

        <a href="Rejestrowanie.php">
            <button>Zarejestruj się</button>
        </a>

        <a href="Logowanie.php">
            <button>Zaloguj się</button>
        </a>
    </div>
</body>
</html>
