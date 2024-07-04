<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авиабилеты</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .cart-item {
            background-color: #fff;
            margin-bottom: 15px;
            padding: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 20px;
        }

        .item-details {
            flex-grow: 1;
        }

        .item-details h2 {
            margin: 0 0 5px 0;
        }

        .item-details p {
            margin: 5px 0;
        }

        button {
            background-color: #ff6666;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff4d4d;
        }

        footer {
            padding: 20px;
            text-align: center;
            background-color: #333;
            color: #fff;
        }

        .checkout {
            background-color: #28a745;
            padding: 15px 30px;
        }

        .checkout:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <h1>Авиабилеты</h1>
    </header>
    <main>
        <div class="cart-item">
            <img src="https://polinka.top/uploads/posts/2023-05/1684269319_polinka-top-p-vafelnaya-kartinka-samolet-instagram-1.jpg" alt="Витамин C">
            <div class="item-details">
                <h2>Барнаул-Москва</h2>
                <p>Цена: 9049 руб.</p>
                <button>Удалить</button>
            </div>
        </div>
        <div class="cart-item">
            <img src="https://polinka.top/uploads/posts/2023-05/1684269319_polinka-top-p-vafelnaya-kartinka-samolet-instagram-1.jpg" alt="Ингавирин">
            <div class="item-details">
                <h2>Барнаул-Анталья</h2>
                <p>Цена: 31099 руб.</p>
                <button>Удалить</button>
            </div>
        </div>
    </main>
    <footer>
        <button class="checkout">Оформить заказ</button>
    </footer>
</body>
</html>
