<?php
    require 'db_users.php';
    unset($_SESSION['auth']);
    header('Location: /');
?>