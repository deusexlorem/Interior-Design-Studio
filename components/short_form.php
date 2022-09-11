<?php
// require 'test.php';

// function validate_short_form(){

// // 1 объявляем массивы для данных пользователя и возможных ошибок
//     $errors = [];
//     $input = [];

//     $input['number'] = htmlspecialchars(trim($_POST['number']));

//     function validate_number( $number ){
//         $reg_exp = "/^[0-9]{1}[0-9]{10}$/";

//         if( empty($number) ){ // проверяем на пустоту
//             return 'Заполните поле!';
//         }elseif( !preg_match($reg_exp, $number) ){ // если введенная строка НЕ соответствует рег выражению
//             return 'Используйте цифры для заполнения! Номер должен содержать 10 символов!';
//         }
//     }
//     // вызываем функцию
//     $res_validate_number = validate_number( $input['number'] ); // 'Введите имя!'
//     if($res_validate_number){ // если при вводе пользователь ошибся
//         $errors['number'] = $res_validate_number; // записываем в массив $errors текст ошибки
//     }

//     return [$errors, $input];
// }


// // function process_short_form($input = []){
// //     echo <<<_HTML_
// //     <p class = "short-form-valid">Благодарим Вас! Ваша заявка направлена на обработку!<br>В скорем времени с Вами свяжется наш специалист!</p>
// //     _HTML_;

// // }

// function show_short_form( $errors = [], $input = [] ){
//     //if (isset($input['first_name'])){
//     //    $input['first_name'] = '';
//     //}

    echo <<<_HTML_

    
    <p class = "red" style = "font-size: 12px;" id = "short-form-error"></p>  
    <form action="" method="GET" id = "short-form">
        <input class='footer-form-number' type = "tel" name = "number" placeholder="89001234567">
        <input class="footer-form-button" type = "submit" name = "button" id="" value="Отправить заявку">
    </form>
    <p class = "footer-form-pha">Введите свой номер и мы свяжемся с вами!</p>
 

    _HTML_;
 
// }


 

// if( $_SERVER['REQUEST_METHOD'] === 'POST' and $_POST['button'] === "Отправить заявку"){
                    
//     list($errors, $input) = validate_short_form();

//     if($errors){
//         show_short_form($errors, $input);
//     } else{
        
//     }
    
// }else{ 
//     show_short_form();
// }

?>