<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "women";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, description, price, image_url FROM products";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог женской одежды</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Каталог женской одежды</h1>
        <nav>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Профиль</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="catalog">
        <h2>Каталог женской одежды</h2>
        <div class="catalog_indent">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="catalog_indent_cloth">';
                    echo '<img src="' . $row["image_url"] . '" alt="#" class="catalog_cloth">';
                    echo '<div class="catalog_text">' . $row["name"] . '. ' . $row["description"] . '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 Компания по продаже женской одежды</p>
    </footer>
</body>
</html>
