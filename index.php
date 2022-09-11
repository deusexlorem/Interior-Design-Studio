<?php

require 'components/header.php';

?>
    <div class="under-header">
            <div class="present">
                <h1 class="present-item">Создаем интреьер с Вашим характером</h1>
            </div>
            <div class="form">
                <div>
                    <a href="contacts.php"> Рассчитать стоимость проекта</a>
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><title>Chevron Forward</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/></svg>
                </div>
            </div>
    </div>
    <div class="repres">
        <div class="brand">
            <h2>DESIGN<span>IN</span> -  Российская студия дизайна. С 2022 года мы проектируем и реализуем интерьеры</h2>
        </div>
        <div class="about">
            <p>Мы занимаемся дизайн-проектами частных и коммерческих интерьеров.</p>
            <p>Мы предлагаем комплексную разработку будущего интерьера и его реализацию под ключ.</p>
            <p>Мы делаем акцент на индивидуальность интерьера, который станет органичным продолжением своего владельца. Именно за такими интерьерами будущее.</p>
        </div>
    </div>
    <?php

    require 'components/slider.php';
    
    ?>
    <div class="wrapper">
        <div class="tabs">
            <div class="tabs-triggers">
                <a href="#tab-1" id = 'item-1' class="tabs-triggers-item">Планировочные решения<br>
                    <span id = 'item-span-1' class="triggers-item-span">Эффективно используем каждый метр площади вашего пространства</span></a>
                <a href="#tab-2" id = 'item-2' class="tabs-triggers-item">3D визуализация интерьера<br>
                    <span id = 'item-span-2' class="triggers-item-span">Визуализации высокого качества, чтобы вы могли представить ваш интерьер в деталях</span></a>
                <a href="#tab-3" id = 'item-3' class="tabs-triggers-item">Рабочая документация<br>
                    <span  id = 'item-span-3'class="triggers-item-span">На этом этапе проект превращается в чертежи, которые не обходимы для точной реализации проекта</span></a>
                <a href="#tab-4" id = 'item-4' class="tabs-triggers-item">Спецификация<br>
                    <span id = 'item-span-4'class="triggers-item-span">Здесь можно найти артикул каждого предмета в вашем интерьере и в случае необходимости реализовать проект без нашей помощи</span></a>
                <a href="#tab-5" id = 'item-5' class="tabs-triggers-item">Комплектация<br>
                    <span id = 'item-span-5' class="triggers-item-span">Персональный менеджер закупит все материалы и предметы интерьера, возьмет на себя всю логистику, приемку товаров и рекламации.</span></a>
                <a href="#tab-6" id = 'item-6' class="tabs-triggers-item">Ремонтные работы<br>
                    <span id = 'item-span-6' class="triggers-item-span">Технический контроль инженера вместе с авторским надзором на всех этапах процесса гарантируют полное соответствие дизайн-проекту.</span></a>
            </div>
            <div class="tabs-content">
                <div id = "tab-1" class="tabs-content-item">
                    <img class = 'tabs-content-image' src="images/plan.avif" alt="plan">
                </div>
                <div id = "tab-2" class="tabs-content-item">
                    <img class = 'tabs-content-image' src="images/3d.avif" alt="3d">
                </div>
                <div id = "tab-3" class="tabs-content-item">
                    <img class = 'tabs-content-image' src="images/flat-plan.png" alt="plan">
                </div>
                <div id = "tab-4" class="tabs-content-item">
                    <img class = 'tabs-content-image' src="images/specific.png" alt="spec">
                </div>
                <div id = "tab-5" class="tabs-content-item">
                    <img class = 'tabs-content-image' src="images/complect.png" alt="comp">
                </div>
                <div id = "tab-6" class="tabs-content-item">
                    <img class = 'tabs-content-image' src="images/repair.png" alt="rep">
                </div>
            </div>
        </div>
    </div>

<?php

require 'components/footer.php';

?>

















