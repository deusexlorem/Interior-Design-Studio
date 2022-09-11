<?php

$pdo = require 'server/db_connect.php';

function validate_long_form(){

// 1 объявляем массивы для данных пользователя и возможных ошибок
$errors = [];
$input = [];


// 2 экранируем данные и удаляем пробелы с концов строк
$input['name'] = htmlspecialchars(trim($_GET['name']));
$input['phone'] = htmlspecialchars(trim($_GET['phone']));
$input['comment'] = htmlspecialchars(trim($_GET['comment']));


function validate_name($name){
    $reg_exp = "/^[а-яёА-ЯЁ][а-яё]+$/u";

    if(empty($name)){
        return 'Поле не заполнено!';
    }elseif( mb_strlen($name) < 2 ){
        return 'Имя должно содержать не менее 2-ух букв!';
    }elseif( !preg_match($reg_exp, $name) ){
        return 'Используйте русские буквы для заполнения!';
    } else {
        return 'OK';
    }
}

$res_validate_name = validate_name( $input['name'] ); 
    if($res_validate_name){ 
        $errors['name'] = $res_validate_name; 
}

function validate_phone( $phone ){
    $reg_exp = "/^[0-9]{11}$/";

    if( empty($phone) ){ // проверяем на пустоту
        return 'Поле не заполнено!';
    }elseif( !preg_match($reg_exp, $phone) ){ // если введенная строка НЕ соответствует рег выражению
        return 'Используйте цифры для заполнения! Номер должен содержать 11 символов!';
    } else {
        return 'OK';
    }
}       

$res_validate_phone = validate_phone( $input['phone'] ); // 'Введите имя!'
    if($res_validate_phone){ // если при вводе пользователь ошибся
        $errors['phone'] = $res_validate_phone; // записываем в массив $errors текст ошибки
    }

function validate_comment( $comment ){
$reg_exp = "/^[ 0-9a-zа-яё,.-]*$/ui";

if( !preg_match($reg_exp, $comment) ){ // если введенная строка НЕ соответствует рег выражению
    return 'Поле содержит запрещенные символы!';
} else {
    return 'OK';
}
}

$res_validate_comment = validate_comment( $input['comment'] ); // 'Введите имя!'
    if($res_validate_comment){ // если при вводе пользователь ошибся
        $errors['comment'] = $res_validate_comment; // записываем в массив $errors текст ошибки
    }

return [$errors, $input];
}


if( $_SERVER['REQUEST_METHOD'] === 'GET' and $_GET['button'] === "Отправить"){
                
list($errors, $input) = validate_long_form();
    
if($errors['name'] === 'OK' and $errors['phone'] === 'OK' and $errors['comment'] === 'OK'){
    echo json_encode($errors, JSON_UNESCAPED_UNICODE);

    $query = "INSERT INTO long_form VALUES (?, ?, ?, ?);";
    $result = $pdo->prepare($query);
    $result->execute([null, $input['name'], $input['phone'], $input['comment']]);

} else {

    exit(json_encode($errors, JSON_UNESCAPED_UNICODE));

}
}

?>