<?php
    require 'db_users.php';
    require 'time.php';
    $data = $_POST;
    $username = $data['login'] ?? null;
    $password = $data['password'] ?? null;
    $showError = False;

    if(isset($data['signin'])) {
        $errors = array();
        $showError = True;
        
        if(trim($username) == '') {
            $errors[] = 'Укажите Логин';
        }
        if(trim($password) == '') {
            $errors[] = 'Укажите Пароль';
        }
    }

    $user = isset($users[$username]);
    if($user) {
        if(password_verify($password, $users[$username]['password'])){
            $_SESSION['login'] = $username;
            $_SESSION['auth'] = true;
            $_SESSION['bday'] = $bday;
            $_SESSION['ddline'] = strtotime('Now') + 86400;
        } else {
            $errors[] = 'Неверный пароль';
        }
    } else {
        $errors[] = 'Пользователь не найден';
    }
    $auth = $_SESSION['auth'] ?? null;

    if($auth) { header('Location:/index.php'); } 

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <form class="form" action="login.php" method="post">
        <span class="text-form">Вход</span>
        <input type="text" name="login" class="input-text" placeholder="Введите логин">
        <input type="password" name="password" class="input-text" placeholder="Введите пароль">
        <button type="submit" name="signin" class="btn">Войти</button>
    </form>
    <?php if($showError) {?> <p class="error"> <?php echo showError($errors);} ?></p>
</body>
</html>