<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5GV8BFW');</script>
    <!-- End Google Tag Manager -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GV8BFW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="main-container">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logotip">
                        <p>ООО НЦ "Деметра"</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navbar">
                        <nav id="men">

                            <ul class="menu scroll">
                                @foreach($menus as $key => $menu)
                                    <li><a href="#block{{$key + 1}}">{{ $menu->name }}</a></li>
                                @endforeach
{{--                                <li><a href="#block1"></a></li>--}}
{{--                                <li><a href="#block2">НАША ПРОДУКЦИЯ</a></li>--}}
{{--                                <li><a href="#block3">О КОМПАНИИ</a></li>--}}
{{--                                <li><a href="#block4">КОНТАКТЫ</a></li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="phones">
                        <a href="tel:+380677768080" style="text-decoration: none"><p>(067) 776-80-80</p></a>
                        <a href="tel:+380666863198" style="text-decoration: none"><p>(066) 686-31-98</p></a>
                        <a href="tel:+380934034788" style="text-decoration: none"><p>(093) 403-47-88</p></a>
                        <div class="circle1">
                            <span href="#myModal1" id="btn1">ЗАКАЗАТЬ ЗВОНОК</span>
                            <div id="myModal1" class="modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content-first">
                                        <b class="modal-title-first">Заказать звонок</b>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            <img src="image/btn-close.png">
                                        </button>

                                        <div class="modal-body-first">
                                            <p>Заполните форму и мы перезвоним Вам в ближайшее время</p>
                                            <form action="mail.php" method="POST" class="form-2">
                                                <input type="text" name="name" placeholder="Имя" required>
                                                <input type="text" name="phone" placeholder="Номер телефона" required>
                                                <button type="submit">ЗАКАЗАТЬ ЗВОНОК</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <p>Высококачественный посевной материал</p>
                    <h1>Получайте стабильно высокую урожайность</h1>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="container top-class">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 scroll">
                    <a href="#block2" class="button-detail"> ПОДРОБНЕЕ О ПРОДУКЦИИ</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!--    <img src="image/im7_kolos1.png" class="image-1">-->
        <!--    <img src="image/im8_kolos3.png" class="image-2">-->
    </article>
</section>
<section class="benefits-container">
    <div class="container container-one">
        <div class="row">

            <div class="col-md-4"></div>
            <div class="col-md-4" >
                <p id="block1">ПРЕИМУЩЕСТВА РАБОТЫ С НАМИ</p>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="container container-two">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <img src="image/im12_ic1.png" class="image-block">
                <span>ТОЛЬКО ВЫСОКОКАЧЕСТВЕННЫЕ СОРТА</span>
            </div>
            <div class="col-md-4">
                <img src="image/im12_ic1.png" class="image-block">
                <span>ШИРОКИЙ АССОРТИМЕНТ</span>
            </div>
            <div class="col-md-3">
                <img src="image/im12_ic1.png" class="image-block">
                <span>ВЫСОКАЯ УРОЖАЙНОСТЬ</span>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <img src="image/im12_ic1.png" class="image-block">
                <span>ОПЛАТА ПОСЛЕ ДОСТАВКИ ТОВАРА</span>
            </div>
            <div class="col-md-4">
                <img src="image/im12_ic1.png" class="image-block">
                <span>КОНТРОЛИРУЕМ СРОКИ ГОДНОСТИ И СООТВЕТСТВИЕ СОРТОВ</span>
            </div>
            <div class="col-md-3">
                <img src="image/im12_ic1.png" class="image-block">
                <span>ДОСТАВКА НОВОЙ ПОЧТОЙ ИЛИ СВОИМ ТРАНСПОРТОМ</span>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="container container-three">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <p>АКЦИЯ! На каждый гектар посева подарок:</p>
                <ul>
                    <li> 50 кг. органического удобрения (граннулированный куриный помет);</li>
                    <li>ИЛИ Стаффер бор Блек 1 л.;</li>
                    <li>ИЛИ Стаффер эликсир;</li>
                    <li>ИЛИ Стаффер стандарт;</li>
                    <li>ИЛИ отсрочка платежа 30/70%;</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section id="block2">
    <div class="container  container-varieties">
        <div class="row">
            <div class="col-md-12">
                <p>Лучшие сорта</p>
                <span>на посевной сезон 2020 года</span>
            </div>
        </div>
    </div>
    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>1. ОЗИМАЯ ПШЕНИЦА</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/13.jpg">
                    <p>КОМБИН</p>
                    <a href="#myModal2" id="btn2">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal2" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">КОМБИН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>СН Комбин - пшеница короткого дня (фотопериодически нечувствительна) и хорошо отрастает в условиях короткого дня поздней осени, а также рано весной. Поздний посев и посев по подсолнечнику - это именно те условия, под которые создавался данный сорт.</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>Высокая зимостойкость</li>
                                                <li>Хорошая засухоустойчивость</li>
                                                <li>Устойчив к полеганию и комплекса болезней</li>
                                                <li>Повышенный коэффициент кущения</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">10 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/23.jpg">
                    <p>БАЛЕТКА</p>
                    <a href="#myModal3" id="btn3">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal3" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">БАЛЕТКА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Растения высотой 78-81 см. Соломина слабо наполнена с сильным восковым налетом на верхнем междоузлии. Колос белого или соломьяножовтого цвета, цилиндрической формы, средней плотности и длины, с сильным восковым налетом и имеющимися зубцами. Нижняя колосковая чешуя по форме овальная. Зерновка красного цвета, средней крупности.</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>Первый среднеранний сорт Западноевропейского генотипа</li>
                                                <li>Выравненность посева</li>
                                                <li>Высокая, стабильная урожайность и качество зерна</li>
                                                <li>Повышенная зимостойкость и засухоустойчивость</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">10 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/33.jpg">
                    <p>КОЛОНИЯ</p>
                    <a href="#myModal4" id="btn4">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal4" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">КОЛОНИЯ (Германия)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Колония широко известна, так как относятся к хлебопекарного типа и ценных сортов пшеницы благодаря высоким показателям качества зерна.Высокая устойчивость к комплексу болезней: мучнистая роса, бурая и желтая, стеблевая ржавчина, септориоз. Колония имеет ген устойчивости к церкоспорильознои корневой гнили. Устойчивость к фузариозу колоса выше, имеет отличную зимостойкость </b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>В зернах содержится среднее количество белка и клейковины.</li>
                                                <li>Урожайный потенциал достигает 130,2 ц / га.</li>
                                                <li>Показатели средней урожайности в регионах Украины (ц / га): лесостепи - 64; Полесье - 62.</li>
                                                <li>Рекомендован для выращивания в зоне лесостепи и Полесья.</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">10 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/43.jpg">
                    <p>МЕЛОДИЯ</p>
                    <a href="#myModal5" id="btn5">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal5" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">МЕЛОДИЯ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Мелодия - разновидность лютесценс. Куст полупрямостоячий. Растение средней длины. Cоломина выполнена слабо. Восковой налет на колосе и верхнем междоузлии соломины средний, на влагалище флагового листа сильный. Колос пирамидальный, средней плотности, белый, с короткими остевидными отростками на конце. Плечо скошенное - закругленное, средней ширины. Зубец прямой, короткий. Зерновка окрашенная. Масса 1000 зерен 31-41 г. Восприимчив к твердой головне, бурой ржавчине и мучнистой росе; сильновосприимчив к корневым гнилям. В полевых условиях слабо поражался пыльной головней.</b>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/9-13.jpg">
                    <p>СТОРИЦА</p>
                    <a href="#myModal6" id="btn6">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal6" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">СТОРИЦА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Пшеница озимая мягких сортов СТОРИЦА сильная, интенсивного типа, среднеспелая, высокой урожайности.</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>вегетационный период 276-280 дней</li>
                                                <li>норма высева: 5,0-6,0 млн. зерен/га</li>
                                                <li>потенциал продуктивности: 7,13-10,67 т/га</li>
                                                <li>высота растений: 95-105 см</li>
                                                <li>содержание белка: 13,5-14,0%</li>
                                                <li>содержание клейковины</li>
                                                <li>масса 1000 зерен: 39-42 г </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/63.jpg">
                    <p>ОРАНТА</p>
                    <a href="#myModal7" id="btn7">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal7" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ОРАНТА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт отличается высоким генетическим потенциалом урожайности и качества зерна, наиболее полно реализуется при выращивании по интенсивной технологии. В агротехнических опытах сорт показал высокую положительную реакцию на внесение высоких доз азотных удобрений (К = 9,8-12,8).
                                                Колос белый, цилиндрической формы, средней плотности (19-21 колосков на 10 см стержня), длина 9,8-10,6 см. Ости белые, плотные, длиной 6-8,5 см, колосковая чешуя овально-ланцетной формы, слабо опушенная, длина 8,6-9,4 см, ширина 3,8-4,2 мм, зубец колосковой чешуи едва изогнутый, плечо прямое. Зерновка красная, овальной формы, длина 7,8-8,2 мм, ширина 2,4 - 2,7 мм, толщина 3,3-3,7 мм. Масса 1000 зерен 43,1- 45,2 г.</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>сорт универсального типа для выращивания на высоких и средних агрофонах;</li>
                                                <li>урожайность 8,4-11,9 т/га с превышением национальных стандартов на 0,54-1,31 т/га (6,9-12,4%);</li>
                                                <li>имеет крупный (10,6-11,2 см), хорошо озернений колос (58-76 зерен) и высокую продуктивную кустистость (3,4 стебля на растение);</li>
                                                <li>среднерослый (96-99 см), высокостойкий к полеганию (9 баллов), осыпание - 8-9 баллов, прорастание на корню - 9 баллов;</li>
                                                <li>скороспелый, вегетационный период 285-287 дней;</li>
                                                <li>морозозимостийкисть повышенная (8-9 баллов), со способностью относительно ускоренного прохождения процесса закалки растений в осенний и зимний периоды;</li>
                                                <li>устойчивость к бурой ржавчине в полевых условиях (6-7 баллов); </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/73.jpg">
                    <p>ЭПОХА</p>
                    <a href="#myModal8" id="btn8">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal8" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЭПОХА (Украина)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Особенности сорта: сорт достаточно однородный, воспроизводится по традиционной схеме первичного семеноводства. Проявил высокую положительную реакцию на высокий фон минерального азотного питания (прибавка 26,5%) и стабильность урожайности в зависимости от сроков сева. Реализация высокой производительности достигается при выращивании на высоких агрофонах при интенсивной технологии. Колос остистый, белый, с умеренным восковым налетом, длина 95-105 мм, средней плотности (17-21 колосок на 100 мм стержня). Ости белые, зазубренные, расходятся под углом 45°, колосковая чешуя овальная, киль имеется. Зубец колосковой чешуи едва изогнутый, длинный. Плечо прямое, широкое. Зерновка красная, овальной формы, средней крупности. Масса 1000 зерен 35-40 г.</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>подходит для выращивания в засушливых условиях южного Степи Украины</li>
                                                <li>имеет высокую устойчивость к низким температурам</li>
                                                <li>способен выдержать длительную засуху</li>
                                                <li>очень мягкий</li>
                                                <li>положительно реагирует на улучшение агрофона</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/alex33.jpg">
                    <p>АЛЕКСЕИЧ</p>
                    <a href="#myModal9" id="btn9">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal9" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">АЛЕКСЕИЧ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Среднеспелый сорт. Высота растений 77–96 см, устойчив к полеганию, к воздушной и почвенной засухе, морозостойкость высокая</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>Высокоустойчив к бурой ржавчине</li>
                                                <li>Устойчив к мучнистой росе, септориозу, желтой и стеблевой ржавчине</li>
                                                <li>Умеренно устойчив к фузариозу колоса</li>
                                                <li>Восприимчив к твердой головне</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/83.jpg">
                    <p>ГРАФ</p>
                    <a href="#myModal10" id="btn10">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal10" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ГРАФ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Разновидность лютесценс. Куст промежуточный - полустелющийся. Растение короткое - средней длины. Восковой налёт на верхнем междоузлии и влагалище флагового листа средний, на колосе слабый. Колос цилиндрический, длинный - очень длинный, средней плотности, белый. Остевидные отростки на конце колоса короткие. Нижняя колосковая чешуя на внутренней стороне имеет очень слабое опушение. Плечо прямое, средней ширины. Зубец прямой, очень короткий - короткий. Опушение верхушечного сегмента оси колоса с выпуклой стороны отсутствует или очень слабое. Зерновка окрашенная. Масса 1000 зёрен - 39-48 г.</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>Устойчивость к полеганию</li>
                                                <li>Устойчивость к осыпанию</li>
                                                <li>Устойчив к бурой ржавчине и мучнистой росе</li>
                                                <li>Умеренно восприимчив к септориозу</li>
                                                <li>Восприимчив к фузариозу колоса и твёрдой головне</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/93.jpg">
                    <p>ВАЛЕНТИН</p>
                    <a href="#myModal11" id="btn11">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal11" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ВАЛЕНТИН (Краснодар)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Флаговый лист с сильным восковым налетом на листовой пластинке и влагалище. Колос цилиндрический, плотный, с сильным восковым налетом. Колосковая чешуя овальная, плечо округлое, узкое. Зубец средний, прямой. Ости длиннее колоса, черные. Зерно удлиненное, с коротким хохолком. Масса 1000 зерен 35-47 г, в отдельные годы до 54 г</b>
                                            <ul>Основные характеристики/преимущества:
                                                <li>Устойчивость к полеганию</li>
                                                <li>Засухоустойчивость выше средней</li>
                                                <li>Высокоустойчив к твердой головне</li>
                                                <li>Восприимчив к пыльной головне</li>
                                                <li>Восприимчиво устойчив к бурой ржавчине</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>2. ОЗИМЫЙ ЯЧМЕНЬ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/master-zernografa3.jpg">
                    <p>МАСТЕР ЗЕРНОГРАДА</p>
                    <a href="#myModal12" id="btn12">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal12" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">МАСТЕР ЗЕРНОГРАДА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Один из самых сортов ячменя альтернативного типа развития в различных почвенно-климатических условиях Украины. Сорт создан во Всероссийском НИИ зерновых культур им. И. Г. Калиненко.
                                                Общая характеристика: Разновидность palidum.
                                                Тип развития альтернативный (двохручка).
                                                Колос шестирядный, цилиндрический, рыхлый, соломенно-желтого цвета длиной 5-6 см, ости тонкие, эластичные, зазубренные и по длине равны колоса. Зерновка крупная, удлиненной формы. Опушки основной щетинки короткие. Соломина прочная. Сорт устойчив к полеганию, высота растения 85-91 см. Раннеспелый сорт с коротким периодом яровизации. Формирует полноценное зерно также при ранневесеннем посеве. Урожайность около 9 т / га. При весеннем посеве не уступает лучшим сортам ячменя. Сорт характеризуется высокой морозо- и засухоустойчивостью. Высокотехнологичный при выращивании. В полевых условиях устойчив к карликовой ржавчины, мучнистой росы и головневых заболеваний.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/iosif3.jpg">
                    <p>ИОСИФ</p>
                    <a href="#myModal13" id="btn13">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal13" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ИОСИФ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Разновидность паллидум. Куст полупрямостоячий - промежуточный. Влагалища нижних листьев без опушения. Антоциановая окраска ушек флагового листа отсутствует, восковой налет на влагалище слабый - средний. Растение среднерослое. Колос горизонтальный - полупониклый, цилиндрический, рыхлый, с очень слабым восковым налетом. Ости длиннее колоса, зазубренные, с очень слабой - слабой антоциановой окраской кончиков. Первый сегмент колосового стержня короткий - средней длины, с очень слабым изгибом. Колосковая чешуя с остью у среднего колоска длиннее зерновки. Опушение основной щетинки зерновки длинное. Антоциановая окраска нервов наружной цветковой чешуи очень слабая. Зазубренность внутренних боковых нервов наружной цветковой чешуи сильная. Зерновка полуокруглая, крупная, с неопушенной брюшной бороздкой и фронтальной лодикулой. Масса 1000 зерен - 39-45 г. Средняя урожайность в регионе - 44,4 ц/га.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/9-val3.jpg">
                    <p>КОНДРАТ</p>
                    <a href="#myModal14" id="btn14">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal14" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">КОНДРАТ (Краснодар)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Среднерослый. Высота растения варьируется в пределах 75-95 см. Устойчив к полеганию и осыпанию. По данным показателям значительно превосходит родителя. По сравнению с сортом Добрыня-3 стебель имеет менее широкий диаметр (на 100 колосьев имеем разницу в 1 квадратный метр).
                                                Среднеспелый. Ячмень относится к категории среднеспелых сортов. Выкашивается на 2-3 дня позже сорта Добрыня-3, и в одно время с сортом Михайло.
                                                Ботаническая разновидность. Сорт относится к группе Параллелум. Колос имеет шестигранную форму, плотность на уровне 16-19 единиц. Ости зазубренные. В период созревания ости имеют желтый окрас, после скашивания приобретают антоциановую окраску. Зерно полудлинной формы, размеры – средние. Масса 1000 зерен колеблется в диапазоне 29-38 г.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/koroleva3.jpg">
                    <p>СНЕЖНАЯ КОРОЛЕВА</p>
                    <a href="#myModal15" id="btn15">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal15" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">СНЕЖНАЯ КОРОЛЕВА (Украина)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Высокоинтенсивный, с потенциальной урожайностью за годы сортоиспытания в СГИ-НЦНС на уровне 9-10 т / га. Зимо-, морозостойкость высокие (7-8 баллов), на уровне стандарта сорта Достойный. Засухоустойчивость на уровне (6-7 аллов). Короткостебельный. (90-95 см). Устойчив к полеганию (8-9 баллов). Устойчивость к мучнистой росе и полосатом гельминтоспориозу (7-8 баллов). Носитель генетической устойчивости к садкового заболеваний. Среднеспелый.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/Naomi-min3.jpg">
                    <p>НАОМИ</p>
                    <a href="#myModal16" id="btn16">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal16" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">НАОМИ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Шестирядный сорт фуражного ячменя со стабильно высокой урожайностью. Высокоадаптивный сорт озимого ячменя с высокой пластичностью к срокам сева. По структуре урожая масса 1000 зерен и семян в колосе – выше среднего.
                                                Сорт отличается высокой устойчивостью к болезням, в частности к мучнистой ржавчине, бурой росе и сетчатой пятнистости. Для защиты растений рекомендовано применение фунгицидов. При интенсивной технологии выращивания хорошо реагирует на внесение и обработку микро-, макроэлементами и стимуляторами роста. Для достижения высокого качества показателей зерна рекомендуется высевать семена согласно локальным условиям с 15 сентября до конца октября. Стабильный и высокий урожай по годам.
                                                Рекомендован для выращивания в степи и лесостепи, и на Полесье.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/naomi3.jpg">
                    <p>ХАЙДИ</p>
                    <a href="#myModal17" id="btn17">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal17" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ХАЙДИ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Гибрид сорта Хайди ( Heidi ) (оигинатор Saatbau Linz, год регистрации 2014) - средне-ранний шестирядный сорт озимого ячменя с высоким качеством зерна. Его семена имеют действительно сильную устойчивость к широкому спектру тяжелых заболеваний, а также хороший потенциал урожайности. Высокая устойчивость к погодным условиям, таким как засуха и мороз. Хорошая устойчивость к ржавчине листьев и мучнистой росе. Сильная защита от вредителей. Высокая устойчивость к полеганию и осыпанию. Отличная выравненность и качество зерна.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/9-val33.jpg">
                    <p>ДЕВЯТЫЙ ВАЛ</p>
                    <a href="#myModal18" id="btn18">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal18" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ДЕВЯТЫЙ ВАЛ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Разновидность pallidum. Колос шестирядный, длинный (9-11см), неплотный (11-12 члеников на 4 см колосовых стержня) неломкий, прямоугольной формы, с медленным переходом в верхней части в ромбическую соломенно-желтый.
                                                Ости длинные, с интенсивным антоциановым окраской, слабо зазубренные, мало пространные, тонкие эластичные.
                                                Колоскова чешуя тонкая, узкая без опушки. Цветочная чешуя морщинистая, нервация мало выражена, нервы слабо зазубренные, переход в ость постепенный.
                                                Основная щетинка зерна войлочная.
                                                Куст полуразвесистый.
                                                Лист не опушенный, зеленый, со слабым восковым налетом во время кущения.
                                                Зерно крупное, желтое, удлиненной формы</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">8 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/talbot3.jpg">
                    <p>ТАЛБОТ</p>
                    <a href="#myModal19" id="btn19">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal19" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ТАЛБОТ (Германия, Австрия)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Применяется в животноводстве: корм для скота и для изготовления круп. Рост растения – 115-120 см, стоит прямо, окружность стебля 40 мм. Колос имеет 6 рядов, длиной до 20 см.
                                                Зерно золотистое, большое, колос до 220 штук зерен.
                                                Вес 1000 семян – 55 гр.
                                                Урожайность в потенциале до 130 ц./га.
                                                Всхожесть-96 %, Энергия прорастания-93 %, Сортовая чистота-99,0 %, Влажность-12.4 %.
                                                Расход на 1 га – 130-140 кг, на глубину от 3 до 4 см., сеют различными методами.
                                                Высевают с 15.02 по 5.05 (юг страны), с 25.02 по 25.04 (север страны), всходы выдерживают до – 25.Удобрения можно вносить как после, так и перед посевом.. Количество удобрений зависит от региона, состава почвы.
                                                Убирают с 10 июня по 5 июля.
                                                Срок вегетации растения ячменя – 85-90 дней (среднеспелый).
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 5 тонн</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>3. РАПС ОЗИМЫЙ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/kanola13.jpg">
                    <p>КАНОЛА ПОД РАУПДАП</p>
                    <a href="#myModal20" id="btn20">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal20" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">КАНОЛА ПОД РАУПДАП</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Имеет чрезвычайно высокий потенциал урожайности. Характеризуется высоким уровнем зимостойкости, хорошей засухоустойчивостью. Имеет отличные стеблевые параметры, что способствует более равномерному созреванию и значительно повышает устойчивость к осыпанию. Характеризуется высоким содержанием масла (в среднем до 47-49%), по качественным показателям соответствует всем действующим стандартам в странах ЕС и СНГ.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">120 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 400 кг</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/raps-nelson3.jpg">
                    <p>НЕЛЬСОН</p>
                    <a href="#myModal21" id="btn21">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal21" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">НЕЛЬСОН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Благодаря высокому коэффициенту ветвистости обладает отличным потенциалом урожайности.Хорошая масличность и высокое качество масла (содержание эруковой кислоты — 0%, глюкозинолатов — не более 25 мкмоль/г).

                                                Высокий уровень зимостойкости.

                                                Отличные стеблевые параметры способствуют более равномерному созреванию.

                                                Обладает высокой устойчивостью к полеганию.

                                                Рекомендуется для выращивания во всех рапсосеющих регионах.</b>
                                        </div>


                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">120 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 400 кг</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/raps-horton3.jpg">
                    <p>ХОРТОН</p>
                    <a href="#myModal22" id="btn22">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal22" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ХОРТОН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Благодаря высокому коэффициенту ветвистости рапс ХОРТОН обладает отличным потенциалом урожайности. Хорошая масличность и высокое качество масла (содержание эруковой кислоты — 0%, глюкозинолатов — не более 25 мкмоль/г). Высокий уровень зимостойкости. Отличные стеблевые параметры способствуют более равномерному созреванию. Обладает высокой устойчивостью к полеганию. Рекомендуется для выращивания во всех рапсосеющих регионах. При возделывании зерновых после рапса гарантирована прибавка урожайности без дополнительных затрат, а в целом продуктивность севооборота повышается на 10-15%. Рапс хороший фитосанитар, он существенно уменьшает количество возбудителей корневых гнилей в почве.</b>
                                        </div>


                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">120 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 400 кг</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/raps-freizon3.jpg">
                    <p>ФРЕЙЗЕР</p>
                    <a href="#myModal23" id="btn23">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal23" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ФРЕЙЗЕР (гибрид классика)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Семядоли средней длины, средней ширины. Лист зеленый. Лепесток желтый, средней длины, средней ширины. Образование пыльцы имеется. Стручок без носика средний. Тенденция к формированию соцветия в год посева при весеннем посеве слабая. Масса 1000 семян — 5 грамм. Содержание жира в семенах — 45%. Гибрид рапса формирует мощное растение высотой 160-170 см с устойчивым стеблем и развитыми боковыми побегами, при соблюдении оптимальной нормы высева количество побегов может достигать 10-12. Весной Фрейзер зацветает рано и цветет довольно продолжительное время – 28-29 дней, что способствует лучшему опылению, созревание происходит равномерно. Средняя урожайность семян — 2,62 тонн с гектара, максимальная — 5,5 тонн с гектара. Зимостойкость 3,7 балла. Устойчивость к полеганию 5,0 балла, к осыпанию 4,0 балла. Рапс отличный мелиорант и предшественник. Он способствует улучшению структуры почвы, оставляет после себя большое количество органической массы.</b>
                                        </div>


                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">120 000 грн</div></div>
                                        <div class="col-md-12">
                                            <b>от 400 кг</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>4. ГОРОХ ЗИМУЮЩИЙ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/ns-Moroz-500x5003.jpg">
                    <p>МОРОЗ</p>
                    <a href="#myModal24" id="btn24">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal24" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">МОРОЗ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>НС Мороз первый сербский озимый сорт белкового гороха, предназначенного для производства зерна. Сорт создан “педигри“ методом отбора из гибридной популяции. Oчень ранний сорт, равномерного созревания. Отлично переносит низкие температуры. По устойчивости к низким температурам в условиях Сербии, этот сорт на уровне с озимой пшеницей. Растения – ограниченного роста, высотой 60-80 см, с частыми узелками в нижней части стебля, что увеличивает толерантность к полеганию. Растения разветвляются и в среднем  имеют по два стебля.

                                                Сорт НС Мороз имеет тип листа афила (усатый), что позволяет связывание растений на ранних стадиях роста и развития, так что посев остается неполегаем до самой уборки. Это позволяет более легкую уборку и значительное снижение потери зерна во время сбора урожая.

                                                Цветок – белый. Стручки находятся в верхней части стебля, что также значительно уменьшает потери при механизированной уборке. Число стручков по растению варьирует между 10 и 14. Зерно –круглой формы, от светло-кремового до светло-зеленого цвета.

                                                Сорт ультра раннеспелый, уборка проводится за десять дней до уборки озимого ячменя, в среднем от 10 до 15 июня. Достигает урожайность зерна между 4,0 и 6,2 т/га.

                                                Масса тысячи семян 180-200 г. Среднее содержание сырых белков в зерне 23-25%. После уборки, семена гороха, учитывая очень низкий процент антинутритивных веществ в семенах, не нужно термически обрабатывать, но только правильно хранить в складах, и использовать в питании всех видов и категорий домашних животных, как отличное дополнение соевому шроту.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">20 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/enduro3.jpg">
                    <p>ЭНДУРО</p>
                    <a href="#myModal25" id="btn25">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal25" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЭНДУРО (Чехия)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Высокоурожайный зимующий сорт жёлтозернового гороха с возможностью осеннего высева. Большое преимущество перед яровыми сортами гороха!!! НЕ требователен к осенней влаге!
                                                Средне-ранний сорт озимого гороха сорта Эндуро типа безлистных (быстрый начальный рост). Растения средне-высокие, устойчивы к полеганию.
                                                Семена желтого цвета, круглые.
                                                Масса 1000 шт — 174,8 г
                                                Всхожесть — 97%
                                                Энергия прорастания — 95%
                                                Рекомендуемая норма высева 1 млн. на га (170-200 кг/га)

                                                Сорт выделяется высокими показателями урожайности от 40 до 60 ц/га
                                                Высокое содержание N-веществ — 22,7%

                                                Посев лучше проводить после 10-го октября, идеально после 25 октября до середины ноября, за 10-15 дней до начала морозов. Глубина сева 5-6 см
                                                Хорошо переносит низкие зимние температуры (на уровне озимой пшеницы).
                                                Высокие результаты в южных регионах, менее подходит для тяжелых и переувлажненных грунтов</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">20 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>5. НУТ ЗИМУЮЩИЙ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/nut_melkiy_razvesnoy3.jpg">
                    <p>ДАВИД</p>
                    <a href="#myModal26" id="btn26">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal26" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ДАВИД (Казахстан) </b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Его основное отличие от других видов заключается в том, что он имеет весьма мощное и интенсивное развитие. Это доказано опытом в Германии и Украине с 2014 году. Перед уходом на зимовку этот гибрид формирует большую вегетативную массу, что дает возможность весной быстро перейти к фазе активного роста и цветения.
                                                Реальная урожайность до 50 ц/га при масличности от 45%.
                                                возможность высаживания растения на самых поздних сроках. Именно это положительно скажется в тех регионах, где в конце лета или в начале осени наблюдается недостаток влаги;
                                                интенсивное развитие рапса возможно даже при весьма низких температурах, что было доказано исследованиями;
                                                показатели зимостойкости находятся на высоком уровне за счет прохождения рапсом всех самых суровых испытаний;
                                                не выдвигает к себе особенных требований как со стороны почвы, так и со стороны качества обработки высаженного рапса;
                                                листовой аппарат растения мощный и хорошо развит, что гарантирует формирование высокого урожая. Учитывая все особенности рапса при его высевании в почву, можно сократить количество обработок и увеличить возможный урожай культуры.
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">35 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>6. ОЗИМАЯ ГОРЧИЦА</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/regen3.jpg">
                    <p>РЕГЕН</p>
                    <a href="#myModal27" id="btn27">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal27" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">РЕГЕН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Норма высева 7 кг на 1 га.
                                                Потенциал урожайности достигает 40-50 ц/га.
                                                Масса 1000 шт. семян — 4-4.5 г. Общая зимостойкость сорта на уровне 81%.
                                                Продолжительность вегетационного периода — 278-280 дней.
                                                Масличность — 50%, содержание эфирного масла (эфирность) 0,78-0,80%. До уборки стручок не растрескивается и не требует обработки. Уборка ведется прямым комбайнированием. Сроки уборки середина июля.Сроки посева до 25% влияют на успешную зимовку культуры. При оптимальном соблюдении технологии и сроков посева гарантируется зимостойкость на уровне 81%. Важно, чтобы до зимовки горчица не переросла и вошла в зиму в фазе 4-6 пар настоящих листьев, в отличии от рапса 6-8.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">100 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/gorchitsa5283650823.jpg">
                    <p>ВЕЙДЕН</p>
                    <a href="#myModal28" id="btn28">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal28" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ВЕЙДЕН (Германия)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                "Вейден"- название озимой (желтой) горчицы. Она дает урожайность в 2-2.5 раза больше яровых сортов и достигает 3-3.5 т/га, а лучшее достижение в производстве 4,1 т/га. Растение получает хорошее развитие и имеет 6-12 веток первого порядка, плод стручок с 12-20 семенами, хотя масса 1000 шт семян всего 2,3-3 г., в отличие от яровых горчиц 4-6г. До уборки стручек не растрескивается и не требует обработки. Уборка ведется прямым комбайнированием. Сроки уборки середина июля. Сроки посева на юге Украины оптимально 10-20 сентября, на западе и в центре до 15 сентября . Сроки посева до 25% влияют на успешную зимовку культуры. При оптимальном соблюдении технологии и сроков посева гарантируется зимостойкость на уровне 81%. Важно, чтобы до зимовки горчица не переросла и вошла в зиму в фазе 4-6 пар настоящих листьев, в отличии от рапса 6-8. Подготовка почвы к посеву аналогична порядку яровой горчицы, глубина заделки семян 1,5-2 см , но если есть дефицит влаги допускается до 4 см. Количество на 1га от 1млн. 250тыс. до 1млн400тис. штук семян.
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">100 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/lucerna3.jpg">
                    <p>ЛЮЦЕРНА ПОД РАУНДАП</p>
                    <a href="#myModal29" id="btn29">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal29" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЛЮЦЕРНА ПОД РАУНДАП (США)</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Люцерна гарантирует получение доходов 2-2,5 раза больше, чем аналог яровых горчиц, урожайность озимой в 2-2,5 раза больше яровой горчицы. Также озимая горчица- отличный сидeрат- весной пока яровая всходит озимая достигает высоты до 35см., а до середины апреля начала мая почти 80-90см, а при посев ев июле до начала сентября вырпстает до одного метра и если запахать в фазе бутонизации - то будет эквивалентно 60-ти тн органики , при нынешних ценах на минеральные удобрения - это не мало. Одно из качеств горчицы это улучшение гигроскопичности почвы, т. е. сохранение и удерживание влаги в верхнем ее слое, этот показатель значтельно снижается при ситематическом применении неорганических удобрений, а также поле чистится от вредителей.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">100 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>7. ЯРОВЫЙ ЯЧМЕНЬ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/talbot.jpg">
                    <p>ТАЛБОТ</p>
                    <a href="#myModal32" id="btn32">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal32" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ТАЛБОТ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Ярый сорт ячменя «TALBOT» был селекционирован с применением новых технологий, канадскими и американскими учеными. Применяется в животноводстве: корм для скота и для изготовления круп. Производство: Канада. Прошел испытания в различных погодных условиях (холод и засуха), при этом не потерял показателей урожайности. Высевается до 7 лет подряд. Имеет устойчивость к засухе до +65 и весенним приморозкам до −10. Устойчивость к заболеваниям, которыми болеют обычные сорта. Устойчивость к засоленности почв. Устойчивость к полеганию. Высокие показатели урожайности за счет кустистости до 14 стеблей с узла кущения, длины колоса до 22 см и наличию 320 зерен в колосе
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/elf.jpg">
                    <p>ЭЛЬФ</p>
                    <a href="#myModal33" id="btn33">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal33" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЭЛЬФ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Разновидность нутанс. Куст прямостоячий до полупрямостоячего. Влагалища нижних листьев без опушения. Антоциановая окраска ушек флагового листа слабая, восковой налет на влагалище средний. Растение среднерослое. Колос полупрямостоячий, цилиндрический, среднеплотный,со средним восковым налетом. Ости длиннее колоса, зазубренные, кончики со средней антоциановой окраской. Первый сегмент колосового стержня средний, со средним изгибом, без горбинки. Стерильный колосок отклоненный, с округлым кончиком и среднедлинной нижней цветковой чешуей. Колосковая чешуя с остью среднего колоска короче зерновки. Зазубренность внутренних боковых нервов наружной цветковой чешуи слабая. Зерновка с неопушенной бороздкой и охватывающей лодикулой. Масса 1000 зерен 40-54 г.
                                                Сорт обладает геном устойчивости к пыльной головне. Устойчив к черной головне, среднеустойчив к твердой. Восприимчив к мучнистой росе, стеблевой ржавчине, гельминтоспориозным пятнистостям всех трех видов
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/francin.jpg">
                    <p>ФРАНЦИН</p>
                    <a href="#myModal34" id="btn34">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal34" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ФРАНЦИН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Стебель крепкий, среднерослое, высотой 71 см. Хорошо реагирует на внесение полного минерального питания. Рекомендуется высевать при 100% хозяйственной годности 3,5 - 4,0 млн. / Га семян. Для достижения высокого качества солода, рекомендуется высевать после корнеплодов. Если же пивоварни качества не являются доминирующими, то можно высевать и после злаковых. Высокая устойчивость к ржавчине, но при благоприятных условиях для развития болезней требует фунгицидной защиты. Рекомендован для выращивания в зонах Полесья, Лесостепи и Степи. Вид культуры - ячмень. Разновидность - нутанс. Колос - двухрядный. Срок посева - среднеранний. Период созревания - среднеспелый. Высота стебля - 71 см. Урожайность - 82 ц / га. Потенциальная урожайность - 91,3 ц / га. Масса 1000 семян - 50 г. Норма высева - 3,5 - 4,0 млн. Всхожих семян / га. Содержание белка - 11,1%. Экстрактивность - 82,4%.
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>8. ЯРАЯ ПШЕНИЦА</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/tesla2.jpg">
                    <p>ТЕСЛА</p>
                    <a href="#myModal35" id="btn35">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal35" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ТЕСЛА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Мягкая пшеница нашла применение в производстве мукомольной, хлеба и различных круп. В отличии от твердых сортов, мягкая имеет более уплотненный стебель колоса с остями, внутри соломины находится соединительная ткань, желтовато-золотистый цвет зерна с бороздкой глубокой, питательная ткань мучнистая. Высота растения до 120 см. (прямостоячее), кустистоть до 12 стеблей. Стебель в обхвате до 15 мм. Масса 1000 семян 48-50 гр. В потенциале урожайность пшеницы 65-80 ц./га. Всхожесть 98%. Энергия прорастания 98%. Чистота сорта 97,0%. Влажность 12%. Сеют в почву 145-160 кг/га, на глубину до 5-6 см, междурядье 14-15 см.
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/liza.jpg">
                    <p>ЛИЗА</p>
                    <a href="#myModal36" id="btn36">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal36" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЛИЗА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт Лиза имеет более короткий стебель что позволяет увеличить дозы азотного удобрения и соответственно содержание белка при уменьшении риска полегания растений.Этот сотр  даже в самых плохих условиях хорошо развивается.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/ester.jpg">
                    <p>ЭСТЕР</p>
                    <a href="#myModal37" id="btn37">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal37" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЭСТЕР</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Высокая и стабильная продуктивность сорта сочетается с прекрасными хлебопекарными качествами зерна.Разновидность лютесценс. Сорт среднеспелый с вегетационным периодом от 80 до 100 дней. Зерно сорта Эстер средней крупности (масса 1000 зёрен от 35 до 40 грамм).
                                                Устойчив к полеганию.
                                                Засухоустойчивость высокая.
                                                Ценная пшеница. Масса 1000 зёрен 27-35 г.
                                                Зерно выровненное, с высоким выходом кондиционных семян.
                                                Содержание клейковины до 40,3%.
                                                Мучнистой росой поражается слабо.
                                                Жёлтой ржавчиной и септориозом поражается средне.
                                                Восприимчив к бурой ржавчине.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/matus.jpg">
                    <p>МАТУС</p>
                    <a href="#myModal38" id="btn38">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal38" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">МАТУС</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Пшеница сорта Маттус то среднеспелый высокоурожайный сорт мягкой пшеницы, устойчивый к засухе, полеганию и большинства заболеваний зерновых. Сорт по типу развития - двуручка - годен для озимого и ярового выращивания, всходы которого появляются раньше посевов озимых, имеет раннее колошения и хороший налив зерна. Основное направление выращивания - на зерно. Сорт отличается хорошим наливом зерна.Пшеница предназначена для весенне-осеннего посева.
                                                Количество колосков – 560 шт./кв. м. Количество зерен в колосе – до 31 шт.

                                                Масса 1000 семян – 51 г.

                                                Потенциал урожайности – 85 ц/га.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">9000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>9. ЯРАЯ КУКУРУЗА</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/fronteza.jpg">
                    <p>ФРОНТЕЗА</p>
                    <a href="#myModal39" id="btn39">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal39" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ФРОНТЕЗА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Гибрид кукурузы Фортеза австрийской селекции выращивается для сбора зерна. Период вегетации колеблется от 123 - 129 см.  Высота стебля составляет 220-226 см. 8-балльная засухоустойчивость. Культура не полегает. Зерно - высокого качества, зубовидное.  Быстро сбрасывает влагу в период перед сбором урожая. Сухое собранное зерно можно сразу сдавать на элеватор без предварительного досушивания. При обмолоте выход зерна до 83%.  Хорошо отзывается на внесение комплекса макроудобрений и цинка в период вегетации.
                                                Преимущества семян кукурузы Фортеза: толерантность к гельминтоспориозу, летучей головне, фузариозу початок хорошо выполнен с полураскрытыми листами обертки крепкая корневая система и не полегающий стебель может использоваться для производства биотоплива гибрид универсальный с хорошей адаптивностью посевной материал обработан протравителем Апрон для защиты проростка и семян в уязвимый период роста.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (за 1 единицу):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">1800 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/catalina.jpg">
                    <p>КАТАЛИНА</p>
                    <a href="#myModal40" id="btn40">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal40" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">КАТАЛИНА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Этот гибрид кукурузы раразработан для наиболее засушливых и неблагоприятных регионов. Именно поэтому данный посевной материал отлично подходит для всех территорий Украины.Урожайность гибрида не зависит от присутствия или отсутствия насекомых-опылителей, так как гибрид является самоопыляющимся.Гибрид кукурузы Calina зарекомендовал себя, как засухо- и морозоустойчивый гибрид.Гибрид обладает повышенной урожайностью: с одного гектара можно получить центнеров.Всхожесть - 97 %, Энергия прорастания - 97 %, Типовость - 100 %, Влажность - 12 %, Чистота - 99,99 %. Стебель кукурузы крепкий, не имеет полости внутри, листья достаточно крупные, початки кукурузы длинные (до 32 см) и тяжелые (около 650 г) содержат большое количество зерновок.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (за 1 единицу):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">1800 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/korolina.jpg">
                    <p>КОРОЛИНА</p>
                    <a href="#myModal41" id="btn41">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal41" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">КОРОЛИНА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Початок средней длины, толстый, рядов зёрен много, антоциановая окраска стержня имеется. Тип зерна промежуточный, ближе к кремнистому. Окраска верхней части зерна жёлтая, нижней - жёлто-оранжевая.Средняя урожайность нормализованного сухого вещества в Центрально-Черноземном регионе составила 167,4 ц/га (+16,1 ц/га (+10,6% к стандарту), максимальная 309,5 ц/га, получена на Тамбовской ГСИС в Тамбовской области в 2018 г. Содержание сухого вещества составило 41,1% (+2,2% к стандарту). Вегетационный период 93 дня (- 2 дня к стандарту).</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (за 1 единицу):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">1800 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>10. ЯРЫЙ РАПС</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/raudis.jpg">
                    <p>РАУДИС</p>
                    <a href="#myModal42" id="btn42">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal42" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">РАУДИС</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Главные особенности ярового рапса «Раудис»:
                                                Сверхбыстрая энергия начального роста;
                                                Стойкость к осыпанию, полеганию;
                                                Жаростойкий яровой гибрид рапса.
                                                Характеристики яровой рапс «Раудис»:
                                                Разновидность гибрида : простой, оо-тип;
                                                Разновидность выращивания : ярый;
                                                Период вегетации: ранний 85-90 дней;
                                                Рапсовое масло: 48,6%;
                                                Количество белка: 23%;
                                                Количество глюкозинолатов: 0,4-,5%;
                                                Количество эруковой кислоты: 0,0-0,5%;
                                                Средний урожай : 25-35 ц/га;
                                                Потенциал урожая : 60 ц/га. Норма высева :0,9-1,0 миллион семян на один гектар.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">120 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/madonna.jpg">
                    <p>МАДОННА</p>
                    <a href="#myModal43" id="btn43">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal43" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">МАДОННА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт относится к ранним, вегетационный период   68-80 дней. Сорт интенсивного типа, пригоден к механизированной уборке. Высокоурожайный,  средняя урожайность в Украине  37-50 ц/га при потенциале до 55 ц/га. Засухоустойчивый. Устойчив к осыпанию. Восприимчив к аскохитозу и корневым гнилям.
                                                Масса 1000 зерен гороха сорта Мадонна  до 300 г. Содержание протеина  22,5 — 23,7 %. Предназначен для продовольственного использования.Немецкий сорт ярового гороха Мадонна – хороший вариант на посев в любом регионе Украины. Этот сорт принадлежит к ранней группе созревания с периодом вегетации до 90 дней, что позволяет вовремя подготовить поле под посев зерновых.Горох Мадонна отличается высоким содержанием белка в бобах и качественным урожаем. При потенциальной урожайности в 55 ц/га, реальная полевая урожайность гороха Мадонна 37-45 ц/га.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">120 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/radius.jpg">
                    <p>РАДИУС</p>
                    <a href="#myModal44" id="btn44">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal44" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">РАДИУС</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Сорт ярого рапса радиус
                                                Ранний 85-90 дней
                                                (под глифосат)
                                                Для формирования высокого урожая рекомендуем удобрение Плантокон. Рапс подойдет для посадки в любое время года благодаря своей выносливости и стойкости. Имеет схожесть с растениями семейства капустных и используется во многих сферах:
                                                для кормления скота;
                                                для изготовления пищевых продуктов;
                                                в техническом секторе. Особенности гибрида рапса: Потенциал урожайности – 55-65 ц/га;
                                                Период вегетации - среднеранний;
                                                Масличность – более 45%;
                                                Высокая способность к регенерации;
                                                Очень высокая зимостойкость;
                                                Высокая засухоустойчивость;
                                                Пригоден для выращивания на легких и тяжелых почвах. Благодаря своим свойствам рапс Радиус имеет хорошую устойчивость к болезням и высокую способность к регенерации, что делает этот сорт рапса одним из выносливых и урожайных. Он прекрасно комбинируется с любыми сортами, что дает ему привилегию над другими видами.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">120 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>11. ЯРЫЙ ГОРОХ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/eco.jpg">
                    <p>ЭСО</p>
                    <a href="#myModal45" id="btn45">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal45" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЭСО</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт жовтозерного гороха.Сорт интенсивного типа, пригоден для прямого комбайнирование. Относится к высокоурожайных среднерослый горохов, с кормовым и продовольственным направлением использования. Высота растений 79-81 см. Среднее количество зерен в бобе - 4-6 шт., Максимальная - 7 шт.

                                                Среднеспелый сорт, вегетационный период 80-86 дня.

                                                Зерно крупное, масса 1000 семян 203-214 г. Норма высева 1,0-1,2 млн. Всхожих семян / га.

                                                Высокоурожайный сорт, средняя урожайность в хозяйстве 56,0 ц / га, потенциальная урожайность 60-70 ц / га.

                                                Сбор урожая рекомендуется проводить при влажности зерна 17-18%.

                                                Сорт характеризуется засухоустойчивостью, высокой устойчивостью к полеганию растений и осыпанию зерна. Слабо поражается аскохитозом, антракнозом, пероноспорозом и корневыми гнилями.

                                                Предназначен для кормового и продовольственного использования (хорошие вкусовые качества).</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">16 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/zekon.jpg">
                    <p>ЗЕКОН</p>
                    <a href="#myModal46" id="btn46">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal46" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЗЕКОН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт относится к раннеспелым, вегетационный период  около 100 дней. Сорт интенсивного типа, пригоден к механизированной уборке. Высокоурожайный,  средняя урожайность в Украине  35-40 ц/га. Потенциальная урожайность сорта — 50,0 ц/га.
                                                Предназначен для продовольственного и кормового использования. Засухоустойчивый, устойчивый к осыпанию. Сорт слабо поражается аскохитозом, антракнозом, корневым гнилям.
                                                Масса 1000 семян гороха сорта Зекон  240 — 260 г. Содержание протеина  21- 23%.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">16 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/goroh-madonna.jpg">
                    <p>МАДОННА</p>
                    <a href="#myModal47" id="btn47">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal47" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">МАДОННА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт зеленозернового гороха, безлисткового (прямостоячего) типа. Семя – зеленого цвета, от округлой до овальной формы, средней величины. Цветок – максимальное количество на узле две, реже по одной, белые большие.

                                                Боб – прямой, редко слегка изогнутый с тупым концом, длиной 5-6 см. Среднее количество семян в бобе – 6-7, максимальная – 8 штук.

                                                Вкусовые качества и развариваемость хорошие. Сорт интенсивного типа, пригоден для прямого комбайнирование.

                                                Высокоурожайный сорт. Сбор урожая рекомендуется проводить при влажности зерна 17-18%.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">16 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>12. ЯРАЯ СОЯ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/canzac.jpg">
                    <p>КАНЗАС</p>
                    <a href="#myModal48" id="btn48">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal48" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">КАНЗАС</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>KANSAS нано трансгенный сорт сои.Боб крупный составляет 11 см длиной, насчитывает 560 бобов на одном растении, устойчивый к растрескиванию. Характеризуется соя хорошей засухоустойчивостью до + 60 С*, характеризуется равномерным созреванием, устойчива к полеганию и осыпанию ( обильные дожди, ветер, град ) убирается соя на прямую и не требует десикации. соя устойчива, к всем заболеваниям сои поражающих обычные сорта и гибриды сои не поражается заболеваниями такие как ( фузариоз, церкоспороз, ложная мучнистая роса, ржавая пятнистость, ржавчина, мучнистая роса, аскохитоз, угловатая пятнистость и т. д.). 4) Устойчива трансгенная соя к вирусым заболеваниям морщинистой мозаике, желтой мозаике, пустульному бактериозу, бактериальному ожогу, черной пятнистости. Этот сорт сои трансгенной имеет модифицированный ген устойчивости ко всем вредным насекомым поражающим обычные сорта и гибриды сои такие как (ростковой мухе, гороховый слоник, совке ипсилону,  Устойчива к абиотическим стрессам ( резкие перепады температур от + 60 С*, до — 10 С* на протяжении всего периода вегетации. Содержание соевого масла в сое составляет 54 % — 55 %. Данный сорт сои является самоопыляющимся и не требует присутствия пчел. Этот сорт сои устойчив к кислотным дождям.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">18 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/apoll.jpg">
                    <p>АПОЛЛО</p>
                    <a href="#myModal49" id="btn49">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal49" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">АПОЛЛО</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт сои под гербицид раундап / глифосат АПОЛЛО/APOLLO относится к раннеспелой группе, продолжительность вегетационного периода 85-87 дней; отлично растут в отечественных условиях лесостепной, степной зоны и полесья. Дают быстрые, равномерные и дружные всходы, давая стабильный урожай в районе 30-38 ц/га.Имеет генетически обусловленную устойчивость к болезням, устойчив к солям глифосатов. Содержание белка 41,3 %. Рекомендованная густота к посеву 900 - 950 тисяч шт/га, ширина междурядий: 12,5-25 см.Преимуществом данной сои для сельхозпроизводителя состоит в первую очередь в том, что её легче и дешевле выращивать, поскольку можно намного эффективнее бороться с сорняками. Устойчивости к гербициду позволяет обрабатывать растения после прорастания вплоть до стадии цветения. Это позволяет сократить общее количество обработок различными гербицидами и таким образом существенно экономить время и деньги.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">18 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/haister.jpg">
                    <p>ХАЙСТАР</p>
                    <a href="#myModal50" id="btn50">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal50" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ХАЙСТАР</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Сорт среднеранний 105 дней, СHU 2475. 1 Репродукция
                                                Биологические признаки сорта:
                                                Характерным признаком данного сорта RR2Y является повышенное количество бобов на растении и семян в бобе (до 40% 4-семенных).
                                                Прекрасное сочетание высокой урожайности и пластичности.
                                                Высота растений - 85 - 115 см.
                                                Окрашенную цветка - белое.
                                                Высота прикрепления нижнего боба - 15 - 17 см.
                                                Содержание протеина 41-42%.
                                                Хозяйственные показатели:
                                                Технологический потенциал урожайности - 42 - 52 ц / га.
                                                Масса 1000 семян - 197 г.
                                                Устойчивость к болезням - 9 баллов.Очень засухоустойчив и пластичный сорт в своей группе спелости, что обеспечивает высокие и стабильные показатели урожая.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">18 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>13. ЯРАЯ ГОРЧИЦА</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/sofia.jpg">
                    <p>СОФИЯ</p>
                    <a href="#myModal51" id="btn51">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal51" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">СОФИЯ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Семена горчицы черной сорт "София" 1-я репродукция чистота 99.9% в мешках по 40кг. Всхожесть 96%.отличается высокой устойчивостью к осыпанию
                                                семена коричневые
                                                содержание масла 30-32%
                                                масса 1000 семян 3,0-3,2 г
                                                Средняя урожайность составляет:
                                                20-22 ц / га
                                                Норма высева 8-12 кг / га
                                                Направление использования пищевое, техническое.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/garden.jpg">
                    <p>ГАРДЕН</p>
                    <a href="#myModal52" id="btn52">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal52" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ГАРДЕН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Однолетнее растение. Вегетационный период от всходов до хозяйственной спелости 25-35 дней. В пищу используют свежие, сочные с приятным острым вкусом листья.
                                                Семена высевают в открытый грунт, начиная с апреля и повторяя посевы через 10-15 дней вплоть до середины августа. Уборку зелени проводят при высоте растений 10-15 см.Салатная горчица.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/raduga.jpg">
                    <p>РАДУГА</p>
                    <a href="#myModal53" id="btn53">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal53" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">РАДУГА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Среднеранний сорт, период от всходов до физиологической спелости – 82 дня. Растение средней высоты, лист средней ширины. Початок средней длины, средней толщины, слабоконический. Ножка короткая, среднее количество рядов зерен, стержень окрашен средне. Зерно зубовидное, в верхней части желтое. Масличность семян — 32%. Эфиромасличность семян — 0,16 %. Масса 1000 семян — 4,8 грамм. Содержние в масле олеиновой и линолевой кислот до 74%.
                                                Урожайность горчицы Радуга в конкурсном сортоиспытании составляет до 1,7 тонн с гектара, средняя урожайность —1,63 тонн с гектара.
                                                Горчица Радуга устойчива к южному гельминтоспориозу, очень слабо поражается пузырчатой головней, слабо поражается бактериозом и стеблевым кукурузным мотыльком.
                                                Используется в качестве масличной, лекарственной, медоносной культуры и как сидерат. Горчица не требовательна к почве и климату.Отзывчива на подкормки азотными удобрениями.
                                                Рекомендуемая норма высева 15-18 г/м2.
                                            </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>14. ЯРЫЙ НУТ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/meksika.jpg">
                    <p>МЕКСИКА</p>
                    <a href="#myModal54" id="btn54">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal54" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">МЕКСИКА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Семена крупноплодного нута "Мексикан"Из зерна этой культуры производят муку, крупу, широко используется для получения качественного комбикорма, зеленная масса применяется на подкормку и при закладке силоса.В семенах этой культуры содержится примерно 23% белка, 8% жира, до 40% углеводов. В муке из пророщенных семян уже 28% белка, 6%
                                                жира, 36% углеводов.Масса 1000 семян 640-660 гр, калибр 10+. Всхожесть 87%.Период вегетации 90-105 дней. Норма высева 300-400 тысяч семян на 1 гектар (при массе 1000 семян 650гр норма высева 200-250 кг на 1га).</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/bar.jpg">
                    <p>БАР</p>
                    <a href="#myModal55" id="btn55">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal55" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">БАР</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Стебель прямостоячий, разветвленный, сжатый, раскидистой формы, ветвление начинается возле основания стебля, высота растений нута составляет 120 см. Хорошо подходит для выращивания во всех регионах, ЖАРА-НЕ ПРОБЛЕМА! Калибр семян 8-9, форма - округлая сильно морщинистая, цвет – слоновая кость. Масса 1000 зерен -420-450 грамм. Размеры растений до – 55-60 см, высота крепления нижнего боба – 23-25 см. Сорт нута БАР устойчив к полеганию и убирается прямым комбайнированием. Срок вегетации – 90-95 суток. Выносит заморозки до -8 С. Выдерживает жару до +50 С. Устойчивость к аскохитозу и антракнозу высокая. Норма высева 400-500 тыс./га.Сорт нута Бар стойкий к полеганию. Культуру можно убирать прямым комбайнированием.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/nore.jpg">
                    <p>НОРЕ</p>
                    <a href="#myModal56" id="btn56">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal56" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">НОРЕ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Семена нута HOPE канадский ярый трансгенный сорт (элита).Характеристики :Повышенная засухоустойчивость нута до + 60°С.Характеризуется устойчивостью к абиотическим стрессам, хорошо переносит весенние приморозки в стадии полного развития растения до -22°С, а в фазе проростков выдерживает понижение температуры -18°С. Это дает возможность сеять нут в самые ранние сроки.Имеет устойчивость к повышенному влагосодержанию в почве.Имеет хороший иммунитет к всем заболеваниям нута, поражающих обычные сорта нута,Устойчив ко всем вредным насекомым поражающим обычные сорта нута.Устойчив к засолению почв.Семена нута этого сорта крупные, калибр нута +10. Содержание белка в нуте составляет 65 %.Масса 1000 семян – 420 грамм.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>15. ЯРЫЙ ПОДСОЛНУХ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/fantom.jpg">
                    <p>ФАНТОМ</p>
                    <a href="#myModal59" id="btn59">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal59" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ФАНТОМ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Имеет очень высокие показатели урожайности. Хорошо адаптируется к внешним почвенно-климатическим условиям. Характеризируется генетической устойчивостью к заболеваниям подсолнечника. Группа спелости – среднеранний.
                                                Период вегетации – 105-110 дней.
                                                Всходы - цветение – 64 дней.
                                                Тип гибрида – простой.
                                                Форма корзинки – выпуклая.
                                                Диаметр корзинки – 18-22 см.
                                                Масличность – 47-49 %.
                                                Высота растений – 160-180 см.
                                                Лузжистость – 21-24 %.
                                                Потенциал урожайности – 55 ц/га.
                                                Средняя урожайность – 42 ц/га.
                                                Устойчивость к пероноспорозу –7.
                                                Устойчивость к фомопсису – 8.
                                                Устойчивость к ржавчине – 9.
                                                Устойчивость к серой гнили – 7.
                                                Устойчивость к белой гнили – 7.
                                                Устойчивость к заразихе – А-G.
                                                Засухоустойчивость – высокая.
                                                Зимостойкость – высокая.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (за 1 единицу):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">1 800 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/grand-admiral.jpg">
                    <p>ГРАНТ АДМИРАЛ</p>
                    <a href="#myModal60" id="btn60">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal60" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ГРАНТ АДМИРАЛ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Особенность гибрида Гранд-давать максимально высокий урожай в экстремальных условиях выращивания. Подсолнечник Гранд по созреванию - среднеранний до 109дн. Подсолнух среднего роста до 180см, дает возможность в уборке любым комбайном. Корзина у подсолнуха тонкая, диаметром до 23см, а семя  черного цвета с масличностью до 52% и не осыпаются. Подсолнечник Гранд устойчивый к болезням ложномучнистой росе, ржавчине, а также гибрид устойчивый к заразихе. Урожайный потенциал – 55 ц/га.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (за 1 единицу):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">1 800 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/levron.jpg">
                    <p>ЛЕВРОН</p>
                    <a href="#myModal61" id="btn61">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal61" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ЛЕВРОН</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Семена гибрид подсолнечника LEBRON (под Гранстар) – отличное современное решение при выборе качественного посевного материала с рекордными показателями урожайности.. Трансгенный подсолнечник LEBRON от Sertis Holding Group уже показал себя на практике и в различных исследованиях, как гибрид, который позволяет собирать по 53 центнера урожая с одного гектара! 2. Максимальная пластичность в различных климатических условиях. Данный гибрид подсолнечника хорошо чувствует себя при засухе (до +55 С) и повышенной влажности, что дает возможность получить значительную гибкость в вопросах сроков посевов. К тому же растения отлично справляются с резкими перепадами температур и устойчивы к различного рода абиотическим стрессам. На протяжение всего периода вегетации прекрасно выдерживает перепады температур и приморозки до -12 С 3. Устойчивость к гербициду. Внесение гербицидов с действующим веществом Трибенурон-метил (Гранстар 50 грамм), которые не вредят подсолнечнику, в свою очередь, позволяет избавиться от сорняков и максимизировать урожай. 4. Невосприимчивость к большинству заболеваний подсолнечника 5. Стойкость к вредным насекомым Подсолнечник, выращенный из трансгенного семени, крайне устойчив к болезням (мучнистая роса, фомоз и т.д.) и воздействию вредоносных насекомых, что существенно уменьшает финансовые затраты на обработку посева.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (за 1 единицу):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">1 800 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/viking.jpg">
                    <p>ВИКИНГ</p>
                    <a href="#myModal62" id="btn62">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal62" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ВИКИНГ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>Существенным отличием трансгенного гибрида подсолнечника от обычных гибридов является то, что его не нужно опрыскивать ядами от насекомых, обрабатывать фунгицидами от различных болезней, Данный гибрид обладает хорошей засухоустойчивостью – выдерживает до +60°С. При высоких температурах пыльца подсолнечника не сгорает. Гибрид устойчив к всем заболеваниям подсолнуха, поражающим обычные сорта и гибриды подсолнуха. Практически не поражается такими заболеваниями, как волчок, борошистая, мучнистая, ложная роса, ржавчина, фомоз, белая, серая, пепельная, сухая гнили, септориоз, аскохитоз, бактериоз, бурая угловатая пятнистость, хлороз, бактериальное увядание, макрофомина и др.).
                                                Подсолнечник устойчив к всем вредным насекомым.Устойчив к абиотическим стрессам (перепады температур от + 53°С до -16°С) на протяжении всего периода вегетации. Прекрасно переносит ранние весенние приморозки -16°С.
                                                Также устойчив к засолению почв, повышенной влажности и кислотным дождям.
                                                Гибрид VIKING F 696 является самоопыляющимся и не требует присутствия пчел.Содержание подсолнечного масла в кондитерском гибриде подсолнухе составляет 49%. Урожайность трансгенного гибрида кондитерского подсолнечника VIKING F 696 составляет 47-48 цент. с 1 га. </b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (за 1 единицу):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">1 800 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>




    <div class="container  container-wheat">
        <div class="row">
            <div class="col-md-12">
                <p>16. ЯРАЯ ГРЕЧИХА</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/grendbi.jpg">
                    <p>ГРЕМБИ</p>
                    <a href="#myModal63" id="btn63">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal63" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ГРЕМБИ</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>  Гречиха «Гранби» (или «Гренби») — это высокоурожайный эффективный сорт.высокая урожайность
                                                устойчивость к осыпанию
                                                способность к самозапылению
                                                подходит для прямого комбайнирования
                                                быстро набирает массу
                                                устойчивость к болезням и вредителям, способным нанести урон отечественным сортам гречихи
                                                убирается, напрямую без валков
                                                отличается равномерным созреванием, не требует дисекации.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/devatka.jpg">
                    <p>ДЕВЯТКА</p>
                    <a href="#myModal64" id="btn64">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal64" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ДЕВЯТКА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b>
                                                Девятка относится к среднеранним сортам, поэтому при потенциальной урожайности 45ц/га, средняя реальная урожайность составляет 20 до 30 ц/га. Растение этого сорта детерминантного типа, что обеспечивает равномерное созревание урожая и пригодность для уборки комбайном напрямую.
                                                Высота растений гречихи Девятка достигает 80-130 см, вес тысячи семян – 28-32 г, выход крупы до 74%. Рекомендуется высевать гречиху Девятка с нормой 80-100 кг/га.Урожайность до 36,3 ц / га
                                                Масса 1000 зерен 29-33 г
                                                Вегетационный период 73-75 дней
                                                Растения прямостоячие, детерминантные, высота 80-130 см.
                                                Характеризуется повышенной устойчивостью к полеганию.
                                                Пригоден к уборке комбайном напрямую
                                                Устойчив к осыпанию, засухе.
                                                Отзывчив на удобрения.
                                                Технологическая и кулинарная оценка высокая.
                                                Характеризуется повышенным выходом крупы и большим ядром.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/florida.jpg">
                    <p>ФЛОРИДА</p>
                    <a href="#myModal65" id="btn65">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal65" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">ФЛОРИДА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Научно разработан известным канадским холдингом "SERTIS" и американским концерном "UNION CARBIDE". Однолетняя культура, род растений из семейства гречишные высотой 165 см.Масса 1000 семян – 47 грамм.
                                                Урожайность мин 55 ц, мак 62 ц с 1 га.
                                                Всхожесть – 98%
                                                , энергия прорастания – 98%,
                                                сортовая чистота – 100%,
                                                влажность – 12%.
                                                Норма высева - 25 кг на 1 га
                                                Посев начинается 25 апреля по 5 августа включительно
                                                Вегетационный период 63–66 дней (ранний).</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="image_item">
                    <img src="image/yar/sumchanka.jpg">
                    <p>СУМЧАНКА</p>
                    <a href="#myModal66" id="btn66">
                        <div class="circle">
                            <span>ПОДРОБНЕЕ О СОРТЕ</span>
                        </div>
                    </a>
                    <div id="myModal66" class="modal fadeInUp">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <b class="modal-title">СУМЧАНКА</b>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <img src="image/btn-close.png">
                                </button>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <b> Достоинства сорта:
                                                • высокая урожайность - реальная 24-28ц\га;
                                                • повышенная отзывчивость на удобрения;
                                                • высокая пластичность;
                                                • дружное созревание;
                                                • устойчивость к полеганию
                                                • высокий уборочный индекс.
                                                Масса 1000 зерен 34 г. Пленчатость 20,1%, выравненность 64,5%. Выход крупы 72,9%, ядрицы 56,2%, крупность крупы 52,5%. Включен в список ценных по качеству сортов.</b>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Цена (тонна с НДС):</p>
                                        </div>
                                        <div class="col-md-6"><div class="circle-cost1">25 000 грн</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<section class="consultation-container" id="rain"
         style="background: url('image/section-four-1.jpg') 50% 50%; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Получите квалифицированную консультацию наших специалистов</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="form-1">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Получить консультацию</p>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <span>Заполните форму и мы свяжемся с вами в ближайшее время</span>
                            <form class="form-2" action="mail.php">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Имя *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Номер телефона *" required>
                                </div>
                                <button type="submit">
                                    ЗАКАЗАТЬ ЗВОНОК
                                </button>
                            </form>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="info-container" id="block3">
    <div class="container">
        <div class="row">
            <div class="col-md-5 info-1">
                <h3>КОМПАНИЯ ООО НЦ "Деметра"</h3>
                <span>лидер селекции посевного материала в Украине</span>
            </div>
            <div class="col-md-3 info-2">
                <div class="row">
                    <div class="col-md-2">
                        <h3>6</h3>
                    </div>
                    <div class="col-md-8">
                        <span>лет успешной работы</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 info-3">
                <div class="row">
                    <div class="col-md-2">
                        <h3>24</h3>
                    </div>
                    <div class="col-md-10">
                        <span>области Украины <br>засеяны нашими сортами</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--    <div class="container info-4">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-7">-->
    <!--                <p>Информация о компании</p>-->
    <!--            </div>-->
    <!--            <div class="col-md-4">-->
    <!--                <img src="image/im61_wheat.jpg">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</section>
<section class="question-container">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="question-container-1">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Не нашли ответ на свои вопросы?</p>
                            <p>Задайте их сейчас!</p>
                        </div>
                        <div class="col-md-4">
                            <a href="#myModal30" id="btn30">ЗАДАТЬ СВОЙ ВОПРОС</a>
                            <div id="myModal30" class="modal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content-first">
                                        <b class="modal-title-first">Задайте вопрос</b>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            <img src="image/btn-close.png">
                                        </button>

                                        <div class="modal-body-first">
                                            <form action="mail.php" method="POST" class="form-2">
                                                <input type="text" name="name" placeholder="Имя" required>
                                                <input type="text" name="phone" placeholder="Номер телефона" required>
                                                <input type="text" name="message" placeholder="Вопрос" required>
                                                <button type="submit">ЗАДАТЬ ВОПРОС</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="cooperation-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Этапы сотрудничества</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class=" cooperation-block">
                    <span><b>Звонок</b> в нашу компанию</span>
                </div>

            </div>
            <div class="col-md-3">
                <div class=" cooperation-block">
                    <span><b>Составление</b> счета и договора поставки</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" cooperation-block">
                    <span><b>Подготовка</b> посевного материала и документов на семена</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" cooperation-block">
                    <span><b>Оплата</b> продукции по счету</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="image/cooperation.jpg" class="block-image">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class=" cooperation-block1">
                    <span><b>Консультация</b>, определение подходящего сорта и объема заказа</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" cooperation-block1">
                    <span><b>Обсуждение</b> способа и срока отгрузки</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" cooperation-block1">
                    <span><b>Отгрузка</b> продукции в оговоренный день</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class=" cooperation-block1">
                    <span><b>Возможность</b> получить ответы на интересующие вас вопросы</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section  id="block4">
    <div class="contactform">
        <h3>Наши контакты</h3>
        <div class="phones">
            <a href="tel:+380677768080" style="text-decoration: none"><p>(067) 776-80-80</p></a>
            <a href="tel:+380666863198" style="text-decoration: none"><p>(066) 686-31-98</p></a>
            <a href="tel:+380934034788" style="text-decoration: none"><p>(093) 403-47-88</p></a>
        </div>
        <a href="#">smirnovpasa120@gmail.com</a>
        <span>Украина, Киевская область, Киево-Святошинский район</span>
    </div>
    <div class="googlemaps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162643.23001922705!2d30.129990842399298!3d50.4355037405054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b34ce297e4a25%3A0x5565335259ecff48!2z0JrQuNC10LLQvi3QodCy0Y_RgtC-0YjQuNC90YHQutC40Lkg0YDQsNC50L7QvSwg0JrQuNC10LLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1595715061289!5m2!1sru!2sua"
                frameborder="0" style="width: 100%; height: 700px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
    </div>
</section>
<footer>
    <div class="container-footer">
        <div class="row">
            <div class="col-md-7">
                <p>ЕСЛИ ВЫ УЖЕ ОПРЕДЕЛИЛИСЬ С ЗАКАЗОМ ИЛИ У ВАС ЕСТЬ ВОПРОСЫ, СВЯЖИТЕСЬ С НАШИМ МЕНЕДЖЕРОМ</p>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-3 scroll">
                <a href="#rain" >ПОЗВОНИТЬ</a>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function () {
        $("#btn1").click(function () {
            $("#myModal1").modal('show');
        });
        $("#btn2").click(function () {
            $("#myModal2").modal('show');
        });
        $("#btn3").click(function () {
            $("#myModal3").modal('show');
        });
        $("#btn4").click(function () {
            $("#myModal4").modal('show');
        });
        $("#btn5").click(function () {
            $("#myModal5").modal('show');
        });
        $("#btn6").click(function () {
            $("#myModal6").modal('show');
        });
        $("#btn7").click(function () {
            $("#myModal7").modal('show');
        });
        $("#btn8").click(function () {
            $("#myModal8").modal('show');
        });
        $("#btn9").click(function () {
            $("#myModal9").modal('show');
        });
        $("#btn10").click(function () {
            $("#myModal10").modal('show');
        });
        $("#btn11").click(function () {
            $("#myModal11").modal('show');
        });
        $("#btn12").click(function () {
            $("#myModal12").modal('show');
        });
        $("#btn13").click(function () {
            $("#myModal13").modal('show');
        });
        $("#btn14").click(function () {
            $("#myModal14").modal('show');
        });
        $("#btn15").click(function () {
            $("#myModal15").modal('show');
        });
        $("#btn16").click(function () {
            $("#myModal16").modal('show');
        });
        $("#btn17").click(function () {
            $("#myModal17").modal('show');
        });
        $("#btn18").click(function () {
            $("#myModal18").modal('show');
        });
        $("#btn19").click(function () {
            $("#myModal19").modal('show');
        });
        $("#btn20").click(function () {
            $("#myModal20").modal('show');
        });
        $("#btn21").click(function () {
            $("#myModal21").modal('show');
        });
        $("#btn22").click(function () {
            $("#myModal22").modal('show');
        });
        $("#btn23").click(function () {
            $("#myModal23").modal('show');
        });
        $("#btn24").click(function () {
            $("#myModal24").modal('show');
        });
        $("#btn25").click(function () {
            $("#myModal25").modal('show');
        });
        $("#btn26").click(function () {
            $("#myModal26").modal('show');
        });
        $("#btn27").click(function () {
            $("#myModal27").modal('show');
        });
        $("#btn28").click(function () {
            $("#myModal28").modal('show');
        });
        $("#btn29").click(function () {
            $("#myModal29").modal('show');
        });
        $("#btn30").click(function () {
            $("#myModal30").modal('show');
        });
        $("#btn31").click(function () {
            $("#myModal31").modal('show');
        });
        $("#btn32").click(function () {
            $("#myModal32").modal('show');
        });
        $("#btn33").click(function () {
            $("#myModal33").modal('show');
        });
        $("#btn34").click(function () {
            $("#myModal34").modal('show');
        });
        $("#btn35").click(function () {
            $("#myModal35").modal('show');
        });
        $("#btn36").click(function () {
            $("#myModal36").modal('show');
        });
        $("#btn37").click(function () {
            $("#myModal37").modal('show');
        });
        $("#btn38").click(function () {
            $("#myModal38").modal('show');
        });
        $("#btn39").click(function () {
            $("#myModal39").modal('show');
        });
        $("#btn40").click(function () {
            $("#myModal40").modal('show');
        });
        $("#btn41").click(function () {
            $("#myModal41").modal('show');
        });
        $("#btn42").click(function () {
            $("#myModal42").modal('show');
        });
        $("#btn43").click(function () {
            $("#myModal43").modal('show');
        });
        $("#btn44").click(function () {
            $("#myModal44").modal('show');
        });
        $("#btn45").click(function () {
            $("#myModal45").modal('show');
        });
        $("#btn46").click(function () {
            $("#myModal46").modal('show');
        });
        $("#btn47").click(function () {
            $("#myModal47").modal('show');
        });
        $("#btn48").click(function () {
            $("#myModal48").modal('show');
        });
        $("#btn49").click(function () {
            $("#myModal49").modal('show');
        });
        $("#btn50").click(function () {
            $("#myModal50").modal('show');
        });
        $("#btn51").click(function () {
            $("#myModal51").modal('show');
        });
        $("#btn52").click(function () {
            $("#myModal52").modal('show');
        });
        $("#btn53").click(function () {
            $("#myModal53").modal('show');
        });
        $("#btn54").click(function () {
            $("#myModal54").modal('show');
        });
        $("#btn55").click(function () {
            $("#myModal55").modal('show');
        });
        $("#btn56").click(function () {
            $("#myModal56").modal('show');
        });
        $("#btn57").click(function () {
            $("#myModal57").modal('show');
        });
        $("#btn58").click(function () {
            $("#myModal58").modal('show');
        });
        $("#btn59").click(function () {
            $("#myModal59").modal('show');
        });
        $("#btn60").click(function () {
            $("#myModal60").modal('show');
        });
        $("#btn61").click(function () {
            $("#myModal61").modal('show');
        });
        $("#btn62").click(function () {
            $("#myModal62").modal('show');
        });
        $("#btn63").click(function () {
            $("#myModal63").modal('show');
        });
        $("#btn64").click(function () {
            $("#myModal64").modal('show');
        });
        $("#btn65").click(function () {
            $("#myModal65").modal('show');
        });
        $("#btn66").click(function () {
            $("#myModal66").modal('show');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".scroll").on("click", "a", function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
</script>
</body>
</html>
