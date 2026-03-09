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
            <h1 data-aos="fade-down">Политика касаемо обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с законодательством Италии и нормами GDPR.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, в том числе защиты прав на
                неприкосновенность частной жизни, личную и семейную тайну.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ и баз данных,
                    обеспечивающих их доступность в сети интернет по сетевому адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному или определяемому
                    Пользователю веб-сайта.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие
                    (операция) или совокупность действий (операций), совершаемых с
                    использованием средств автоматизации или без использования таких
                    средств с персональными данными.
                </li>
                <li>
                    <strong>Безопасность персональных данных</strong> — защищенность
                    персональных данных от неправомерного или случайного доступа к
                    ним, уничтожения, изменения или блокирования.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Персональные данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам Италии).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            На сайте происходит сбор и обработка обезличенных данных
                            о посетителях (в т.ч. файлов «cookie») с помощью сервисов
                            интернет-статистики (Google Аналитика и других). Эти данные включают 
                            IP-адрес, тип браузера и время доступа.
                        </li>
                    </ul>
                </li>
            </ul>
            <p>
                Вышеперечисленные данные далее по тексту Политики <strong><?= $domainTitle ?></strong> объединены общим
                понятием Персональные данные.
            </p>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления доступа к сервисам
                    инновационной консалтинговой платформы.
                </li>
                <li>
                    Установление с Пользователем обратной связи, включая направление
                    уведомлений, запросов, касающихся использования сайта, обработку
                    запросов и заявок.
                </li>
                <li>
                    Заключение и исполнение договоров на экспертные услуги в Италии и ЕС.
                </li>
                <li>
                    Информирование Пользователя посредством отправки электронных писем. 
                    Пользователь всегда может отказаться от рассылок, направив
                    Оператору письмо на адрес
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    с пометкой «Отказ от уведомлений».
                </li>
            </ul>

            <h2>5. Правовые основания обработки персональных данных</h2>
            <p>
                Оператор обрабатывает персональные данные Пользователя только на
                законных основаниях:
            </p>
            <ul>
                <li>
                    При наличии добровольного согласия Пользователя, выраженного 
                    путем заполнения форм на сайте <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    При условии, что сохранение файлов «cookie» разрешено в настройках браузера Пользователя.
                </li>
            </ul>

            <h2>6. Порядок сбора, хранения и безопасности данных</h2>
            <ul>
                <li>
                    Оператор принимает все возможные правовые, организационные и технические меры для
                    защиты данных от неправомерного доступа в соответствии с Генеральным регламентом о защите данных (GDPR).
                </li>
                <li>
                    Персональные данные Пользователя никогда не будут переданы третьим лицам, 
                    за исключением случаев, предусмотренных законодательством ЕС.
                </li>
                <li>
                    Срок обработки персональных данных является неограниченным.
                    Пользователь может в любой момент отозвать свое согласие, направив 
                    Оператору уведомление на email 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Пользователь может получить разъяснения по любым вопросам, обратившись к 
                    Оператору по электронной почте 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> находится в свободном 
                    доступе на сайте <strong><?= $fullDomain ?></strong>.
                </li>
            </ul>
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