<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logowanie</title>
</head>
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
        .login-box input[type="text"],
        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 92%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
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