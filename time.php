<?php
session_start();

$bdaydata = strtotime('06-01-2023');
$nowdata = strtotime('Now');
$getday = ceil(($bdaydata - $nowdata)/60/60/24);
$bday = false;
if ($getday == 0){
    $bday = true;
}
if ($getday < 0){
    $bday = false;
}

// ------------------------------------
// обратный отсчет показывает после перезагрузки страницы
$fdate = $_SESSION['ddline'];
$date = strtotime('Now');
$hours = floor(floor(($fdate - $date) / (60 * 60)) % 24);
$minutes = floor(floor(($fdate - $date) / 60) % 60);
$seconds = floor(($fdate - $date) % 60);

if ($date < $fdate) {
    $salet = true;
} else {
    $salet = false;
}

?>