<?php
//подключение к бд

$db_name = 'final_project';
$login = 'root';
$password = '';
$host = 'localhost';


//для использования на хостинге
//display_errors = On
//error_reporting = E_ALL

return new PDO("mysql:host=$host; dbname=$db_name", $login, $password);
?>