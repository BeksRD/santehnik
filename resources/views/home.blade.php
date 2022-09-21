<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.jpg" />
    <script src="https://kit.fontawesome.com/a25e08e916.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="{{asset('js/script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Сантехники</title>
</head>
<body>
<div class="callme">
    <a href="tel:+996550751413">
        <i class="fa fa-phone" aria-hidden="true"></i>
    </a>
</div>
@include('flashMessage')
<header class="header">
    <div class="container">
        <div class="header-inner">
            <div class="logo">
                <div class="logo-img">
                    <img src="{{asset('images/logo.jpg')}}" alt="image" />
                </div>
                <div class="logo-title">
                    <p>BISH</p>
                    <p>Santehnik</p>
                </div>
            </div>
            <div class="header-menu">
                <div class="menu-icon" onclick="toggleMenu(event)">
                    <span></span>
                </div>
                <div class="navbar">
                    <a onclick="goto('benefits', event)" href="#">Наши преимущества</a>
                    <a onclick="goto('services', event)" href="#">Услуги</a>
                    <a onclick="goto('services', event)"  href="#"
                    >Бесплатная консультация</a
                    >
                </div>
            </div>
        </div>
    </div>
</header>
<div class="banner">
    <div class="container">
        <div class="banner-inner">
            <h1>Сантехники</h1>
            <div class="banner-content">
                <div>
                    <i class="fa-solid fa-chevron-down fa-3x"></i>
                    <p>На рынке больше 5 лет</p>
                </div>
                <div>
                    <i class="fa-solid fa-chevron-down fa-3x"></i>
                    <p>Более 100 мастеров</p>
                </div>
                <div>
                    <i class="fa-solid fa-chevron-down fa-3x"></i>
                    <p>Круглосуточно</p>
                </div>
                <div>
                    <i class="fa-solid fa-chevron-down fa-3x"></i>
                    <p>Приезд 30 минут</p>
                </div>
                <div>
                    <i class="fa-solid fa-chevron-down fa-3x"></i>
                    <p>Качественно и быстро</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits" id="benefits">
    <div class="container">
        <div class="benefits-inner">
            <h2>Наши преимущества</h2>
            <div class="benefits-list">
                <div class="economy b-item">
                    <div class="b-img">
                        <img src="{{asset('images/economy.png')}}" alt="image" />
                    </div>
                    <h5>Экономия</h5>
                    <div class="b-text">
                        Благодаря скидкам/акциям, действующим в нашей компании, вы можете
                        сэкономить на сантехнических работах
                    </div>
                </div>
                <div class="quality b-item">
                    <div class="b-img">
                        <img src="{{'images/quality.png'}}" alt="image" />
                    </div>
                    <h5>Качество</h5>
                    <div class="b-text">
                        Мы не используем дешёвые материалы при монтаже труб водоснабжения
                        и не устанавливаем смесители китайского производства
                    </div>
                </div>
                <div class="guarantee b-item">
                    <div class="b-img">
                        <img src="{{asset('images/guarantee.png')}}" alt="image" />
                    </div>
                    <h5>Гарантия</h5>
                    <div class="b-text">
                        На все виды работ мы даем гарантию 12 месяцев, кроме прочистки
                        канализации. Каждому клиенту предоставляем квитанцию
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services" id="services">
    <div class="container">
        <div class="services-inner">
            <h1>Услуги</h1>
            <div class="services-content">
                <div class="plumber s-item">
                    <div class="s-text">
                        <h5>Услуги сантехника</h5>
                        <p>Наши опытные сантехники готовы к выезду Круглосуточно. Аварийная бригада. Чтобы пригласить сантехников по городу Бишкек, Вам достаточно вызвать на дом сантехника</p>
                    </div>
                    <div class="s-img">
                        <img src="{{asset('images/services1.png')}}" alt="#">
                    </div>
                </div>
                <div class="electrician s-item">
                    <div class="s-text">
                        <h5>Услуги электрика</h5>
                        <p>Наши опытные электрики готовы к выезду Круглосуточно. Чтобы пригласить электрика по городу Бишкек, Вам достаточно вызвать на дом электрика</p>
                    </div>
                    <div class="s-img">
                        <img src="{{asset('images/services2.png')}}" alt="#">
                    </div>
                </div>
                <div class="cleaning s-item">
                    <div class="s-text">
                        <h5>Чистка канализаций</h5>
                        <p>Продувка. Чистка тросом 10-15-25 метров. Чистим оборудованием</p>
                    </div>
                    <div class="s-img">
                        <img src="{{asset('images/services3.png')}}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="consulting" id="consulting">
    <div class="container">
        <div class="consulting-inner">
            <div class="consulting-block">
                <h2>Бесплатная консультация</h2>
                <div class="consulting-content">
                    <div class="cons-description">
                        Оставьте нам свои данные и с Вами свяжется наш специалист
                    </div>
                    <form class="cons-form" action="/contact" method="post">
                        @csrf
                        <label>
                            <div>Имя:</div>
                            <input required type="text" placeholder="Имя" name="name">
                        </label>
                        <label>
                            <div>Телефон:</div>
                            <input required minlength="9"  type="text" placeholder="Телефон" name="phone">
                        </label>
                        <button type="submit">Заказать звонок</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="contacts">
                <div class="logo">
                    <div class="logo-img">
                        <img src="{{asset('images/logo.jpg')}}" alt="image">
                    </div>
                    <div class="logo-title">
                        <p>BISH</p>
                        <p>Santehnik</p>
                    </div>
                </div>
                <div class="contacts-content">
                    <div class="phones">
                        <a href="tel:+996550751413">+996550751413</a>
                        <a href="tel:+996550751413">+996550751413</a>
                    </div>
                    <div class="social-links">
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Bish Santehnik KG Copyright © 2022 Все права защищены
            </div>
        </div>
    </div>
</footer>
</body>
</html>
