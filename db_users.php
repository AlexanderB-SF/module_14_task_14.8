<?php 

// admin пароль = 321 , user1 пароль 123
$users = [
    'admin' => ['id' => '1', 'password' => '$2y$10$alRp4rh2ia9oka9Zne4jcOujpgqENMST2EP/RcdTA0yPjllqc78Hy'],
    'user1' => ['id' => '1', 'password' => '$2y$10$xuwQPfjWJvLnFe7eyNrnx.GiQpdx/U0mRG8foCDwFYlhopDJYbrqW'],
];

$sale = [
    'admin' => ' -20%',
    'user1' => ' -10%',
];


session_start();

function showError($errors) {
    return array_shift($errors);
}

?>