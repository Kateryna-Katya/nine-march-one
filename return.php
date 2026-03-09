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
            <h1 data-aos="fade-down">Политика возврата средств</h1>
            
            <h2 data-aos="fade-up">Условия для оформления возврата</h2>
            <p data-aos="fade-up">
                В рамках работы платформы <strong><?= $domainTitle ?></strong> в Италии и странах ЕС, вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание
                    предоставленной консультации или экспертного материала существенно отличается от программы,
                    заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При
                    возникновении критических технических проблем на платформе
                    <strong><?= $fullDomain ?></strong>, которые делают доступ к материалам или сессиям невозможным и не были
                    устранены нашей командой в разумные сроки.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                    решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                    дней с момента оплаты, согласно законодательству ЕС, при условии, что вы еще не получили доступ
                    к значительному объему материалов.
                </li>
            </ul>

            <h2 data-aos="fade-up">Процедура запроса на возврат</h2>
            <p data-aos="fade-up">
                Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                следующие шаги:
            </p>
            <ol class="custom-list" data-aos="fade-up">
                <li>
                    Составьте письмо и отправьте его на наш официальный email экспертной поддержки:
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма обязательно укажите: «Запрос на возврат средств — <?= $domainTitle ?>».
                </li>
                <li>
                    В теле письма предоставьте полную информацию: ваше имя и фамилию,
                    email, который использовался при регистрации, и точное название выбранной программы или услуги.
                </li>
                <li>
                    Четко опишите причину, по которой вы запрашиваете
                    возврат, со ссылкой на один из пунктов наших условий.
                </li>
                <li>
                    Наша служба поддержки рассмотрит ваш запрос
                    и свяжется с вами для предоставления инструкций в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2 data-aos="fade-up">Сроки и способ возврата</h2>
            <p data-aos="fade-up">
                После одобрения вашего запроса, возврат денежных средств будет
                произведен в течение 7–14 рабочих дней. Средства будут возвращены
                тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                может зависеть от регламента работы вашего банка в <strong>Италии</strong> или стране вашего пребывания.
            </p>

            <h2 data-aos="fade-up">Исключения и ограничения</h2>
            <p data-aos="fade-up">Возврат средств не может быть осуществлен, если:</p>
            <ul data-aos="fade-up">
                <li>
                    Запрос подан по истечении 14 календарных дней с момента оплаты.
                </li>
                <li>
                    Вы уже изучили, просмотрели или скачали более 50% материалов программы, что подтверждается логами системы <strong><?= $fullDomain ?></strong>.
                </li>
                <li>
                    Причиной невозможности пройти обучение являются технические
                    проблемы на стороне пользователя (например, проблемы с ПО или интернет-соединением).
                </li>
                <li>
                    Были нарушены условия Пользовательского соглашения с вашей стороны.
                </li>
            </ul>

            <h2 data-aos="fade-up">Изменения в политике</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                Политику возврата. Актуальная версия всегда доступна на этой
                странице <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">Свяжитесь с нами</h2>
            <p data-aos="fade-up">
                По всем вопросам, связанным с возвратом средств или условиями
                консультаций, пожалуйста, обращайтесь в нашу службу поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697639127">+39 06 9763 9127</a><br>
                Адрес: Via della Conciliazione, 44, 00193 Roma RM, Italy
            </p>
            
            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026</p>
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