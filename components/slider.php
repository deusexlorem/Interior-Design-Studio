<?php

$pdo = require 'components/server/db_connect.php';

?>
<div class="portfolio">
        <div class="carusel">
            <div class="carTrack">
                <?php
                    $query = "SELECT project_name, image
                              FROM content";
                    $result = $pdo->query($query, PDO::FETCH_ASSOC);
                    
                    while( $slider_item = $result->fetch() ){ // формируем массив объектов
                        echo <<<_HTML_

                            <div class="carEl" style = "background-image: url($slider_item[image])">
                                <button class="carButt" onclick="alert('Функция находится в разработке')">$slider_item[project_name]</button>
                            </div>

                        _HTML_;
                    }
                ?>
            </div>
            <div class="seeAll">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon prev" viewBox="0 0 512 512"><title>Chevron Back</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M328 112L184 256l144 144"/></svg>
                <div class="portRef">
                    <a  href="portfolio.php">Посмотреть все проекты</a>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon next" viewBox="0 0 512 512"><title>Chevron Forward</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
            </div>
        </div> 
    </div>



