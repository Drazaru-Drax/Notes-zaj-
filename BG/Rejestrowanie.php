<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-box {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        .register-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-box input[type="text"],
        .register-box input[type="email"],
        .register-box input[type="password"] {
            width: 92%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .register-box button {
            width: 100%;
            padding: 10px;
            background: blue;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .register-box button:hover {
            background: #332992ff;
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
    </body>
</html>