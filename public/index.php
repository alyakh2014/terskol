<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Terskol Home</title>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css"
    <link rel="stylesheet" href="css/gabriellewee.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="header">
    <div class="room-status yes">Есть места!</div>
    <h1>Terskol Home</h1>
    <div class="call-us">
        <a href="tel:+79287075517">
            + 7 928 707 55 17
        </a>
    </div>
</div>
<div class="cont s--inactive">
    <!-- cont inner start -->
    <div class="cont__inner">
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">О нас</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">О нас</div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
            <div class="el__index">
                <div class="el__index-back">Краткое описание сервиса</div>
                <div class="el__index-front">
                    <div class="el__index-overlay" data-index="Краткое описание сервиса">
                        Краткое описание сервиса
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Апартаменты</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">Апартаменты</div>
                        <div class="el__content-left">
                            <div class="el__description">Приглашаем вас в уютные апартаменты Terskol Home. В каждой комнате
                                отдельный санузел с душем и туалетом, телевизор. Обеденная зона, кухня, лыжехранилище.
                                Общая вместимость - 16 человек.
                            </div>
                            <div class="el__price-block">Цена: 2000 руб/сутки</div>
                            <div class="el__order-block">
                                <div class="el__order-header">Забронировать</div>
                                <div class="el__order-choose">Выберите удобный способ связи</div>
                                <div class="el__tab-navs">
                                    <div class="el__tab-nav" data-index="form">Форма</div>
                                    <div class="el__tab-nav is-active" data-index="call">Звонок</div>
                                    <div class="el__tab-nav" data-index="whatsapp">WhatsApp</div>
                                    <div class="el__tab-nav" data-index="mail">E-mail</div>
                                </div>
                                <div class="el__order-tabs">
                                    <div class="el__order-tab" data-index="form">
                                        <form action="ajax/sendmail.php" class="mail-form js-validate" data-id="apartment">
                                            <input type="hidden" name="id" value="Апартаменты"/>

                                            <div class="el__input">
                                                <input type="text" name="fio" placeholder="ФИО"/>
                                            </div>
                                            <div class="el__input">
                                                <input type="text" name="phone" placeholder="Телефон" class="js-phone"/>
                                            </div>
                                            <div class="el__input">
                                                <input type="number" name="quantity" placeholder="Количество мест"/>
                                            </div>
                                            <div class="el__input">
                                                <input type="text" name="from" placeholder="C"/>
                                                <input type="text" name="to" placeholder="по"/>
                                            </div>

                                            <div class="el__textarea">
                                                <textarea name="comment" placeholder="Комментарий"></textarea>
                                            </div>

                                            <button type="submit" class="el__button">Оставить заявку</button>
                                            <div class="error-message"></div>
                                        </form>
                                        <div class="success-message">
                                            Ваша заявка успешно отправлена. <br/> В ближайшее время с вами свяжутся
                                        </div>
                                    </div>
                                    <div class="el__order-tab is-active" data-index="call">
                                        <a href="tel:+79287075517">
                                            <div class="el__phone">+ 7 928 707 55 17</div>
                                        </a>
                                    </div>
                                    <div class="el__order-tab" data-index="whatsapp">
                                            <div class="el__whatsapp">
                                                <a href="https://wa.me/79287075517">
                                                    Напишите нам в WhatsApp по номеру <b>+ 7 928 707 55 17</b>
                                                </a>
                                            </div>
                                    </div>
                                    <div class="el__order-tab" data-index="mail">
                                            <div class="el__email">
                                                <a href="mailto:sapira-terskol@mail.ru">
                                                    Напишите нам на <b> sapira-terskol@mail.ru</b>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="el__content-right">
                            <div class="el__photo-slider">
                                <img src="img/menu/menu-2.jpg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-1.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-3.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-4.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-5.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-6.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-7.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-8.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-9.jpeg" alt="" class="el__photo-slide">
                                <img src="img/apartment/apartment-10.jpeg" alt="" class="el__photo-slide">
                            </div>
                            <div class="el__photo-thumb">
                                <img src="img/menu/menu-2.jpg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-1.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-3.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-4.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-5.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-6.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-7.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-8.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-9.jpeg" alt="" class="el__photo-thumb-slide">
                                <img src="img/apartment/apartment-10.jpeg" alt="" class="el__photo-thumb-slide">
                            </div>
                        </div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
            <div class="el__index">
                <div class="el__index-back">в пятикомнатной трехуровневой квартире</div>
                <div class="el__index-front">
                    <div class="el__index-overlay" data-index="в пятикомнатной трехуровневой квартире">
                        в пятикомнатной трехуровневой квартире
                    </div>

                    <div class="el__adv-block">
                        <div class="el__advantage" data-index="Санузел в&nbsp;каждой комнате (душ&nbsp;+&nbsp;туалет)">
                            Санузел в&nbsp;каждой комнате (душ&nbsp;+&nbsp;туалет)
                        </div>
                        <div class="el__advantage" data-index="Лыжехранилище">
                            Лыжехранилище
                        </div>
                        <div class="el__advantage" data-index="Обеденная зона">
                            Обеденная зона
                        </div>
                        <div class="el__advantage" data-index="Постирочная комната (прачечная)">
                            Постирочная комната (прачечная)
                        </div>
                        <div class="el__advantage" data-index="Машиноместо">
                            Машиноместо
                        </div>
                        <div class="el__advantage" data-index="Телевизор">
                            Телевизор
                        </div>
                    </div>
                    <div class="el__price" data-index="Цена: 2000 руб/сутки">
                        Цена: 2000 руб/сутки
                    </div>
                    <div class="el__more" data-index="Подробнее">
                        Подробнее
                    </div>
                    <div class="el__order" data-index="Забронировать">
                        Забронировать
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Хостел</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">Хостел</div>
                        <div class="el__content-left">
                            <div class="el__description">
                                Уютный хостел Terskol Home с большой кухней и всем необходимым. Две четырехместные комнаты,
                                душ, туалет, стиральная машина. WI-FI.
                                Общая вместимость - 8 человек.
                            </div>
                            <div class="el__price-block">Цена: 1000 руб/сутки</div>
                            <div class="el__order-block">
                                <div class="el__order-header">Забронировать</div>
                                <div class="el__order-choose">Выберите удобный способ связи</div>
                                <div class="el__tab-navs">
                                    <div class="el__tab-nav" data-index="form">Форма</div>
                                    <div class="el__tab-nav is-active" data-index="call">Звонок</div>
                                    <div class="el__tab-nav" data-index="whatsapp">WhatsApp</div>
                                    <div class="el__tab-nav" data-index="mail">E-mail</div>
                                </div>
                                <div class="el__order-tabs">
                                    <div class="el__order-tab" data-index="form"></div>
                                    <div class="el__order-tab is-active" data-index="call">
                                        <a href="tel:+79287075517">
                                            <div class="el__phone">+ 7 928 707 55 17</div>
                                        </a>
                                    </div>
                                    <div class="el__order-tab" data-index="whatsapp">
                                        <div class="el__whatsapp">
                                            <a href="https://wa.me/79287075517">
                                                Напишите нам в WhatsApp по номеру <b>+ 7 928 707 55 17</b>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="el__order-tab" data-index="mail">
                                        <div class="el__email">
                                            <a href="mailto:sapira-terskol@mail.ru">
                                                Напишите нам на <b> sapira-terskol@mail.ru</b>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
            <div class="el__index">
                <div class="el__index-back">с двумя номерами</div>
                <div class="el__index-front">
                    <div class="el__index-overlay" data-index="с двумя номерами">
                        с двумя номерами
                    </div>
                    <div class="el__adv-block">
                        <div class="el__advantage" data-index="Душ, туалет">
                            Душ, туалет
                        </div>
                        <div class="el__advantage" data-index="Кухня">
                            Кухня
                        </div>
                        <div class="el__advantage" data-index="Стиральная машина">
                            Стиральная машина
                        </div>
                        <div class="el__advantage" data-index="Машиноместо">
                            Машиноместо
                        </div>
                    </div>
                    <div class="el__price" data-index="Цена: 1000 руб/сутки">
                        Цена: 1000 руб/сутки
                    </div>
                    <div class="el__more" data-index="Подробнее">
                        Подробнее
                    </div>
                    <div class="el__order" data-index="Забронировать">
                        Забронировать
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Такси</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">Такси</div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
            <div class="el__index">
                <div class="el__index-back">от/до аэропопрта</div>
                <div class="el__index-front">
                    <div class="el__index-overlay" data-index="от/до аэропопрта">
                        от/до аэропопрта
                    </div>

                    <div class="el__price" data-index="Цена: 3500 руб">
                        Цена: 3500 руб
                    </div>
                    <div class="el__more" data-index="Подробнее">
                        Подробнее
                    </div>
                    <div class="el__order" data-index="Заказать">
                        Заказать
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Приэльбрусье</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">Приэльбрусье</div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
            <div class="el__index">
                <div class="el__index-back">живописный край, достойный живописного описания</div>
                <div class="el__index-front">
                    <div class="el__index-overlay" data-index="живописный край, достойный живописного описания">
                        живописный край, достойный живописного описания
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
    </div>
    <!-- cont inner end -->
</div>

<!--<a href="https://dribbble.com/shots/2802024-Satellite-Website-Prototype" target="_blank" class="icon-link">-->
<!--    <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png">-->
<!--</a>-->
<!--<a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">-->
<!--    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">-->
<!--</a>-->
<!---->



<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/vendor.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/index.js"></script>


</body>

</html>