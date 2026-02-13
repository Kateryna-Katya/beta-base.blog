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
            <span class="section-tag">Legal Documents</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                    Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                    (язык, настройки региона Италия и другие параметры) в течение определенного времени.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Инновационная технология, которая критически важна для функционирования платформы.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наши AI-инструменты.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках обучения.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Предложение активно только в странах ЕС и помогает доставлять релевантные новости.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение стабильной и безопасной работы цифровой инфраструктуры.</li>
                    <li>Анализ пользовательского поведения для оптимизации AI-решений.</li>
                    <li>Персонализация контента для пользователей в Европе.</li>
                    <li>Методологии, доказавшие эффективность в управлении данными.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере или через наш Cookie-popup. 
                    Однако отключение некоторых функций может замедлить ваш быстрый и лёгкий старт на платформе.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах мы используем внешние сервисы для визуализации (например, Matter.js или Lucide Icons). Мы рекомендуем ознакомиться с их политиками конфиденциальности.
                </p>

                <div class="contact-extra">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="footer__contacts" style="margin-top: 20px;">
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+390697639202">+39 06 9763 9202</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Via del Corso, 418, 00186 Roma RM, Italy</span>
                        </li>
                    </ul>
                </div>
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