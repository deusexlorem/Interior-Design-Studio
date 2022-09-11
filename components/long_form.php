<?php

// $pdo = require 'server/db_connect.php';

// function validate_long_form(){

//     // 1 объявляем массивы для данных пользователя и возможных ошибок
//     $errors = [];
//     $input = [];
    

//     // 2 экранируем данные и удаляем пробелы с концов строк
//     $input['name'] = htmlspecialchars(trim($_POST['name']));
//     $input['phone'] = htmlspecialchars(trim($_POST['phone']));
//     $input['comment'] = htmlspecialchars(trim($_POST['comment']));


//     function validate_name($name){
//         $reg_exp = "/^[а-яёА-ЯЁ][а-яё]+$/u";

//         if(empty($name)){
//             return 'Поле не заполнено!';
//         }elseif( mb_strlen($name) < 2 ){
//             return 'Имя должно содержать не менее 2-ух букв!';
//         }elseif( !preg_match($reg_exp, $name) ){
//             return 'Используйте русские буквы для заполнения!';
//         }
//     }

//     $res_validate_name = validate_name( $input['name'] ); 
//         if($res_validate_name){ 
//             $errors['name'] = $res_validate_name; 
//     }

//     function validate_phone( $phone ){
//         $reg_exp = "/^[0-9]{11}$/";

//         if( empty($phone) ){ // проверяем на пустоту
//             return 'Поле не заполнено!';
//         }elseif( !preg_match($reg_exp, $phone) ){ // если введенная строка НЕ соответствует рег выражению
//             return 'Используйте цифры для заполнения! Номер должен содержать 10 символов!';
//         }
//     }       

//     $res_validate_phone = validate_phone( $input['phone'] ); // 'Введите имя!'
//         if($res_validate_phone){ // если при вводе пользователь ошибся
//             $errors['phone'] = $res_validate_phone; // записываем в массив $errors текст ошибки
//         }

//     function validate_comment( $comment ){
//     $reg_exp = "/^[ 0-9a-zа-яё,.-]*$/ui";

//     if( !preg_match($reg_exp, $comment) ){ // если введенная строка НЕ соответствует рег выражению
//         return 'Поле содержит запрещенные символы!';
//     } 
//     }

//     $res_validate_comment = validate_comment( $input['comment'] ); // 'Введите имя!'
//         if($res_validate_comment){ // если при вводе пользователь ошибся
//             $errors['comment'] = $res_validate_comment; // записываем в массив $errors текст ошибки
//         }

//     return [$errors, $input];
// }

// function process_long_form($input = []){
//     echo <<<_HTML_
//     <p class = "long-form-valid">Благодарим Вас!<br>Ваша заявка направлена на обработку!<br>В скорем времени с Вами свяжется наш специалист!</p>
//     _HTML_;

// }

// function show_long_form( $errors = [], $input = [] ){
//     //if (isset($input['first_name'])){
//     //    $input['first_name'] = '';
//     //}

    echo <<<_HTML_

        <form class="form-left-mid" action="" method="GET" id = "long-form">
            <label for="name">Ваше имя  (Только русские буквы) <br><span class = "red" id = "name-error">$errors[name]</span></label><br>
            <input class="form-left-mid-input" type="text" name="name" ><br>
            

            <label for="phone">Номер телефона  (89001234567) <br><span class = "red" id = "phone-error">$errors[phone]</span></label><br>
            <input class="form-left-mid-input" type="tel" name="phone"><br>

            <label for="comment">Комментарий  (Необязательное поле) <br><span class = "red" id = "comment-error">$errors[comment]</span></label><br>
            <input class="form-left-mid-input" type="text" name="comment"><br>

            <input class="form-left-mid-button" type ="submit" name="long-button" value="Отправить"><br>
        </form>
 

    _HTML_;

// } 



// if( $_SERVER['REQUEST_METHOD'] === 'POST' and $_POST['button'] === "Отправить"){
                    
//     list($errors, $input) = validate_long_form();

//     if($errors){
//         show_long_form($errors, $input);
//     } else{
        
        
//         $query = "INSERT INTO long_form VALUES (?, ?, ?, ?);";
//         $result = $pdo->prepare($query);
//         $result->execute([null, $input['name'], $input['phone'], $input['comment']]);

//         header('Location: contacts.php'); 
        
//         process_long_form($input); 
//     } 
    
    
// }else{ 
//     show_long_form();
// }
// // print_r($_POST); 
?>