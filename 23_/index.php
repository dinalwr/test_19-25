<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT namee, descriptions, image_url FROM products";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Продуктовый магазин</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="dropdown">
      <div class="dropdown_between">
      </div>
      <div class="dropdown_between">
          <button class="dropbtn">Меню</button>
          <div class="dropdown-content">
              <a href="index2.php" class="border_nav">Каталог</a>
              <a href="#winterykori" class="border_nav">О нас</a>
              <a href="index3.html"  class="border_nav">Корзина</a>
              <a href="index4.html" class="border_nav">Личный кабинет</a>

          </div>
      </div>
  </div>
    <nav>
      <div class="logo">PROдукты</div>
      <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">Меню</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <section class="hero">
      <h1>Вкусная Пицца с доставкой к Вашей двери</h1>
      <p>Закажите прямо сейчас и наслаждайтесь нашей свежей, горячей пиццей не более чем за 30 минут!      </p>
      <button class="order-btn">Заказать сейчас</button>
    </section>
    <section class="menu">
      <h2>Меню</h2>
      <div class="menu-items">
        <div class="menu-item">
          <img src="pizza.png" alt="Coffee">
          <h3>Пицца</h3>
          <p>Хрустящая пицца из дровянной печи</p>
        </div>
        <div class="menu-item">
          <img src="drink.png" alt="Pastries">
          <h3>Напитки</h3>
          <p>Свежие напитки, которые сделанны с любовью</p>
        </div>
        <div class="menu-item">
          <img src="cookie.png" alt="Sandwiches">
          <h3>Десерты</h3>
          <p>Вкусные и сытные десерты для окончания обеда</p>
        </div>
      </div>
    </section>
    <section class="catalog">
        <h2>Новости</h2>
        <div class="catalog_indent">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="catalog_indent_cloth">';
                    echo '<img src="' . $row["image_url"] . '" alt="#" class="catalog_cloth">';
                    echo '<div class="catalog_text">' . $row["name"] . '. ' . $row["descriptions"] . '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </section>
    <section class="about">
      <h2>О нас</h2>
      <p>Мы являемся семейным предприятием по доставке пиццы, которое гордится использованием только самых свежих ингредиентов и превосходным обслуживанием клиентов.      </p>
    </section>
    <section class="contacts">
      <div class="container">
          <div class="contacts__inner">
              <form class="contacts__form" action="#">
                  <h2 class="contacts__title">ХОЧЕШЬ СКИДКУ НА ПРОДУКТЫ?</h2>
                  <input class="contacts__input" type="text" placeholder="Ваше имя">
                  <input class="contacts__input" type="tel" placeholder="Номер телефона">
                  <p>В ближайшее время наш менеджер свяжется с Вами</p>
                  <button type="submit">ЗАКАЗАТЬ</button>
              </form>
          </div>
      </div>
  </section>
  </main>
  
  <footer>
    <p>&copy; 2024 Pizza Delivery. Все права защищены.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
