<?php


$pdo = require 'server/db_connect.php';

function validate_short_form(){

    // 1 объявляем массивы для данных пользователя и возможных ошибок
    $errors = [];
    $input = [];
    
    $input['number'] = htmlspecialchars(trim($_GET['number']));
    
    function validate_number( $number ){
        $reg_exp = "/^[0-9]{1}[0-9]{10}$/";
    
        if( empty($number) ){ // проверяем на пустоту
            return 'Заполните поле!';
        }elseif( !preg_match($reg_exp, $number) ){ // если введенная строка НЕ соответствует рег выражению
            return 'Используйте цифры для заполнения! Номер должен содержать 11 символов!';
        } else {
            return 'OK';
        }
    }
        // вызываем функцию
    $res_validate_number = validate_number( $input['number'] ); // 'Введите имя!'

    if($res_validate_number){ // если при вводе пользователь ошибся
            $errors['number'] = $res_validate_number; // записываем в массив $errors текст ошибки
    }
    
    return [$errors, $input];
}
    
    
if( $_SERVER['REQUEST_METHOD'] === 'GET' and $_GET['button'] === "Отправить заявку"){
                    
    list($errors, $input) = validate_short_form();
        
    if($errors['number'] === 'OK'){
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);

        $query = "INSERT INTO short_form VALUES (?, ?);";
        $result = $pdo->prepare($query);
        $result->execute([null, $input['number']]);

    } else {

        exit(json_encode($errors, JSON_UNESCAPED_UNICODE));

    }
}
  









?>