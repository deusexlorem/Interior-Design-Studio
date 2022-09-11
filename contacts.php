<?php

require 'components/header.php';

?>

    <div class="contact-form">
        <div class="form-left-top">
            <p>ОСТАВЬТЕ КОНТАКТЫ И МЫ С ВАМИ СВЯЖЕМСЯ</p>
        </div>
        <div class="left-mid">
            <?php
                error_reporting(E_ERROR);
                
                require './components/long_form.php';
            ?>
        </div>
        <div class="form-left-bot">
            <p>Офис: Москва, ул. Валовая, 28</p>
            <p>с 10:00 до 19:00</p>
        </div>
        <div class="form-right">
            <p>Частный дизайн<br>Елена +7 (495) 120-04-36<br>adress@mail.ru</p>
            <p>Коммерческий дизайн<br>Регина +7 (495) 120-80-26<br>adress@mail.ru</p> 
            <p>Для прессы<br>adress@mail.ru</p>
            <p>Для соискателей<br>adress@mail.ru</p>
            <p>Для поставщиков<br>adress@mail.ru</p>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.620615585638!2d37.62480565145296!3d55.73034508045196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b1b0a8d7d5d%3A0xd8d9f55a0b92e2f4!2z0JLQsNC70L7QstCw0Y8g0YPQuy4sIDI4LCDQnNC-0YHQutCy0LAsIDExNTA1NA!5e0!3m2!1sru!2sru!4v1660642801667!5m2!1sru!2sru" width="100%" height="600" style="border:none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<?php

require 'components/footer.php';

?>
