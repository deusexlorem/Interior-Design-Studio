<?php

$pdo = require 'components/server/db_connect.php';

?>
    <div class="portfolio-tabs">
        <div class="portfolio-tabs-triggers">
            <a href="#portfolio-tab-1" class="portfolio-tabs-triggers-item">Частные проекты</a>
            <a href="#portfolio-tab-2" class="portfolio-tabs-triggers-item">Коммерческие проекты</a>
            
        </div>
        <div class="portfolio-tabs-content">

            <div id = "portfolio-tab-1" class="portfolio-tabs-content-item">
                <?php
                    $query = "SELECT project_name, image
                              FROM content
                              WHERE id < 17;";
                    $result = $pdo->query($query, PDO::FETCH_ASSOC);
                    
                    while( $tabs_item = $result->fetch() ){ // формируем массив объектов
                        echo <<<_HTML_

                            <div class="portfolio-tabs-content-item-element">
                    
                                <div class="portfolio-tabs-content-item-element-image" style = "background-image: url($tabs_item[image])">
                                    <button class="portfolio-button" onclick="alert('Функция находится в разработке')">$tabs_item[project_name]</button>
                                </div>
                
                            </div> 
                        _HTML_;
                    }
                ?> 
            </div>
            
            <div id = "portfolio-tab-2" class="portfolio-tabs-content-item">
            <?php
                    $query = "SELECT project_name, image
                              FROM content
                              WHERE id > 17;";
                    $result = $pdo->query($query, PDO::FETCH_ASSOC);
                    
                    while( $tabs_item = $result->fetch() ){ // формируем массив объектов
                        echo <<<_HTML_

                            <div class="portfolio-tabs-content-item-element">
                    
                                <div class="portfolio-tabs-content-item-element-image" style = "background-image: url($tabs_item[image])">
                                    <button class="portfolio-button" onclick="alert('Функция находится в разработке')">$tabs_item[project_name]</button>
                                </div>
                
                            </div> 
                        _HTML_;
                    }
                ?> 
            </div> 
        </div>
    </div>
