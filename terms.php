<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Экспертный консалтинг и инновации
    </title>

    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%2300CEC9'/><circle cx='50' cy='50' r='25' fill='white'/><circle cx='70' cy='30' r='10' fill='%236C5CE7'/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="./#hero" class="nav__link">Главная</a></li>
                    <li class="nav__item"><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li class="nav__item"><a href="./#insights" class="nav__link">Аналитика</a></li>
                    <li class="nav__item"><a href="./#innovation" class="nav__link">Инновации</a></li>
                    <li class="nav__item"><a href="./#about" class="nav__link">О нас</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--primary">Связаться</a>
<button class="burger" id="burger-menu" aria-label="Открыть меню">
    <span></span>
</button>
            </div>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-down">Условия использования</h1>

            <p>
                Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                услуги на территории Италии и ЕС, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование сайта.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с консалтинг-платформой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных и личных
                некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul>
                <li>
                    Публиковать, передавать или распространять любую информацию,
                    которая является незаконной, вредоносной, нарушает авторские права или разжигает ненависть.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную
                    работу сайта или привести к перегрузке
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Использовать автоматизированные скрипты для сбора
                    информации без нашего предварительного письменного разрешения.
                </li>
                <li>
                    Выдавать себя за другое лицо при регистрации на экспертную консультацию.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                логотипы и программный код, является объектом интеллектуальной
                собственности Компании. Вам предоставляется ограниченная
                лицензия на использование Контента в личных целях для профессионального развития. 
                Любое копирование или распространение Контента без разрешения правообладателя строго запрещено.
            </p>

            <h2>4. Ограничение ответственности и отказ от гарантий</h2>
            <p>
                Услуги и все материалы на сайте предоставляются по принципу «как
                есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно
                или что его контент является абсолютно точным в контексте динамически 
                меняющегося рынка в <strong>Италии</strong> и странах ЕС.
            </p>
            <p>
                Компания не несет ответственности за любые прямые или косвенные
                убытки, возникшие в результате использования 
                платформы <strong><?= $domainTitle ?></strong>. 
            </p>

            <h2>5. Изменения в Условиях использования</h2>
            <p>
                Мы оставляем за собой право в любое время изменять настоящие Условий. 
                Все изменения вступают в силу с момента их публикации на этой странице. 
                Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> означает ваше 
                автоматическое согласие с новой редакцией Условий.
            </p>

            <h2>6. Разрешение споров</h2>
            <p>
                Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров.
                В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                с действующим законодательством по месту регистрации представительства Компании в <strong>Италии</strong>.
            </p>

            <h2>7. Контактная информация</h2>
            <p>
                Если у вас возникли вопросы, связанные с настоящими Условиями,
                пожалуйста, свяжитесь с нами по электронной почте:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697639127">+39 06 9763 9127</a>
            </p>
            
            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Редакция: Март 2026</p>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__col footer__col--info">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Инновационная технология консалтинга для тех, кто готов переосмыслить подход к развитию бизнеса в
                    Европе.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__menu">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#insights">Аналитика</a></li>
                    <li><a href="./#about">О нас</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__menu">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+390697639127">+39 06 9763 9127</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:support@<?= $fullDomain ?>">support@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Via Montenapoleone, 8, 20121 Milano MI, Italy</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
        <div class="mobile-overlay" id="mobile-overlay">
            <div class="mobile-menu">
                <ul class="mobile-nav">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategy">Стратегия</a></li>
                    <li><a href="./#insights">Аналитика</a></li>
                    <li><a href="./#innovation">Инновации</a></li>
                    <li><a href="./#about">О нас</a></li>
                    <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
                </ul>
            </div>
        </div>
        
        <div id="cookie-popup" class="cookie-popup">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.
            </p>
            <button id="cookie-accept" class="btn btn--primary">Принять</button>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>