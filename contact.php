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
    <title><?= $domainTitle ?> — AI для обычных людей</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='none' stroke='%2300D4FF' stroke-width='8'/><path d='M30 50 Q50 20 70 50 T30 50' fill='%2300D4FF'/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="page">

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"><i data-lucide="cpu"></i></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#possibilities" class="nav__link">Возможности</a></li>
                    <li><a href="./#solutions" class="nav__link">Решения</a></li>
                    <li><a href="./#education" class="nav__link">Обучение</a></li>
                    <li><a href="./#community" class="nav__link">Сообщество</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline">Связаться</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
        <section class="pages">
            <div class="container">
                <span class="section-tag">Support Center</span>
                <h1>Контактная информация</h1>

                <p class="lead-text">
                    Мы всегда открыты для новых проектов и профессиональных дискуссий. 
                    Свяжитесь с командой <strong><?= $domainTitle ?></strong> любым удобным для вас способом. 
                    Наши специалисты готовы ответить на ваши вопросы по будням с 09:00 до 18:00 (CET).
                </p>

                <div class="contact-cards">
                    <div class="contact-card">
                        <div class="contact-card__icon">
                            <i data-lucide="mail"></i>
                        </div>
                        <h2>Пишите нам</h2>
                        <p>Для общих вопросов, предложений и запросов на консалтинг:</p>
                        <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__icon">
                            <i data-lucide="phone-call"></i>
                        </div>
                        <h2>Звоните</h2>
                        <p>Прямая линия поддержки клиентов и экспертных консультаций:</p>
                        <a href="tel:+390697639202" class="contact-link">+39 06 9763 9202</a>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__icon">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <h2>Наш офис</h2>
                        <p>Представительство <strong><?= $domainTitle ?></strong> в Италии:</p>
                        <address class="contact-address">
                            Via del Corso, 418,<br>
                            00186 Roma RM,<br>
                            Italy
                        </address>
                    </div>
                </div>

                <div class="contact-extra">
                    <p>
                        Предложение активно только в странах ЕС. Вы также можете воспользоваться формой обратной связи на 
                        <a href="./#contact">главной странице</a> для быстрой отправки запроса. Экспертная поддержка на всех этапах.
                    </p>
                </div>
            </div>
        </section>
    </main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__text"><?= $domainTitle ?></span>
                    </a>
                    <p class="footer__description">Технологии нового поколения, доступные каждому. Мы делаем AI понятным и полезным инструментом для вашей жизни.</p>
                </div>
                
                <div class="footer__col">
                    <h4 class="footer__title">Меню</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#possibilities">Возможности</a></li>
                        <li><a href="./#solutions">Решения</a></li>
                        <li><a href="./#education">Обучение</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__list">
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
                            <i data-lucide="phone"></i>
                            <a href="tel:+390697639202">+39 06 9763 9202</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Via del Corso, 418, 00186 Roma RM, Italy</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.</p>
            </div>
        </div>
    </footer>
    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <div class="cookie-popup__icon"><i data-lucide="cookie"></i></div>
            <p class="cookie-popup__text">
                Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.
            </div>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
        </div>
    </div>
    
    <div class="mobile-overlay" id="mobile-overlay"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>