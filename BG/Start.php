<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-box button {
            width: 100%;
            padding: 5px;
            margin: 5px;
            background: blue;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-box button:hover {
            background: #332992ff;
        }
    </style>
</head>
<body>
        <div class="login-box">
            <h2>Co wykonać</h2>
            <a href="Rejestrowanie.php">
            <button type="submit">Zarejestruj się</button>
            </a>
            <a href="Logowanie.php">
            <button type="submit">Zaloguj się</button>
            </a>
        </div>
</body>
</html>