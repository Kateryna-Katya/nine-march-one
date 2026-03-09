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
            <h1 data-aos="fade-down">Отказ от ответственности (Дисклеймер)</h1>

            <p>
                <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-ознакомительный характер. Они не являются и не должны
                рассматриваться как персональная инвестиционная рекомендация,
                профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                каких-либо финансовых операций на территории Италии и ЕС.
            </p>

            <p>
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                относительно точности, полноты или актуальности представленной в блоге
                информации. Любые упоминания потенциального карьерного роста, инновационных программ пассивного дохода или прошлых
                результатов наших клиентов не гарантируют аналогичных результатов в будущем. 
                Индивидуальные итоги вашей деятельности зависят от множества факторов, включая рыночные условия в Италии и ЕС, и могут существенно
                отличаться от приведенных примеров.
            </p>

            <p>
                <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                его владельцы и аффилированные лица не несут ответственности за
                любые прямые или косвенные убытки, решения или действия,
                предпринятые вами на основе информации с этого ресурса. Вся
                ответственность за использование предложенных методологий и возможные последствия
                лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                источников, которые считаются надежными и общедоступными на момент публикации.
            </p>

            <p>
                <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                изменение финансового статуса или инвестиции в новые технологические проекты, сопряжена с
                определенным уровнем риска. Перед принятием
                любыв важных стратегических решений в рамках итальянского законодательства мы настоятельно рекомендуем провести
                собственное исследование и проконсультироваться с квалифицированным
                независимым специалистом в соответствующей области.
            </p>

            <p>
                <strong>Подтверждение пользователя:</strong> Продолжая использовать
                сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                действуете по собственной воле, полностью осознаете и принимаете все
                упомянутые риски и условия данного отказа от ответственности.
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