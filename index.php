<?php
    require 'db_users.php';
    require 'time.php';
    session_start();
    $auth = $_SESSION['auth'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>index</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <header class="header">
                <span class="hello">Добро пожаловать<?php if($auth) {echo ", ".$_SESSION['login'];}?>
                </span>
                <?php
                if (!$auth) {?>
                    <a href="login.php" class="signin">Войти</a>
                <?php } else {?>
                    <a href="logout.php" class="signin">Выйти</a>
                <?php } ?>
            </header>
            <?php if($auth): ?>
            <div class="bday">
                <?php if($bday){ ?>
                    В честь дня рождения ваша доп. скидка 5% на все услуги салона
                <?php } ?>
                <?php if(!$bday){ ?>
                    Дней до дня рождения и скидок осталось: <?php echo $getday;
                } ?>

            </div>
            <?php if($salet) { ?>
            <div class="sale">
                <p>Ваша персональная скидка <?php echo $sale[$_SESSION['login']]; ?> на все закончится через: <?php echo $hours . " часов ". $minutes ." минут ". $seconds ." секунд"; ?>
                </p>
            </div> <?php } ?>
            <?php endif ?>
            <main class="main">
                <div class="products">
                    <div class="products-item">
                        <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2069&q=80" class="img-card" alt="picture">
                        <h4>Массаж</h4>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptatum nobis ipsa dolorem delectus ab.</p>
                        <a href="#">Выбрать</a>
                    </div>
                    <div class="products-item">
                        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="img-card" alt="picture">
                        <h4>Маски</h4>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptatum nobis ipsa dolorem delectus ab.</p>
                        <a href="#">Выбрать</a>
                    </div>
                    <div class="products-item">
                        <img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b53?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" class="img-card" alt="picture">
                        <h4>Товары</h4>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptatum nobis ipsa dolorem delectus ab.</p>
                        <a href="#">Выбрать</a>
                    </div>
                    <div class="products-item">
                        <img src="https://images.unsplash.com/photo-1583417657209-d3dd44dc9c09?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="img-card" alt="picture">
                        <h4>Сауна</h4>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptatum nobis ipsa dolorem delectus ab.</p>
                        <a href="#">Выбрать</a>
                    </div>
                    <div class="products-item">
                        <img src="https://images.unsplash.com/photo-1529290130-4ca3753253ae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80" class="img-card" alt="picture">
                        <h4>Басейн</h4>
                        <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium voluptatum nobis ipsa dolorem delectus ab.</p>
                        <a href="#">Выбрать</a>
                    </div>
                </div>
            </main>
        </div>
        <footer class="footer">
                <ul class="footer-list">
                    <li class="footer-list_item">
                        <a href="#" class="footer-list_link">Help center</a>
                    </li>
                    <li class="footer-list_item">
                        <a href="#"class="footer-list_link">Политика конфиденциальности</a>
                    </li>
                    <li class="footer-list_item">
                        <a href="#" class="footer-list_link">Пользовательское соглашение</a>
                    </li>
                </ul>
            </footer>
    </div>

</body>
</html>