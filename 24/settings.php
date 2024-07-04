<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Настройки пользователя</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9; /* Добавлен фон для контраста */
        }
        .settings-box {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 260px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .settings-box h2 {
            font-size: 18px;
            margin-bottom: 10px;
            text-align: center;
        }
        .settings-box label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .settings-box input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .settings-box button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
        }
        .settings-box button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="settings-box">
        <h2>Настройки пользователя</h2>
        <label for="username">Имя пользователя</label>
        <input type="text" id="username" placeholder="Введите имя пользователя">

        <label for="email">Электронная почта</label>
        <input type="email" id="email" placeholder="Введите электронную почту">

        <label for="password">Пароль</label>
        <input type="password" id="password" placeholder="Введите пароль">

        <button type="button">Сохранить настройки</button>
    </div>
</body>
</html>
