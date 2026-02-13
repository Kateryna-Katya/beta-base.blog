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
            <span class="section-tag">Terms & Conditions</span>
            <h1>Условия использования</h1>

            <div class="legal-content">
                <div class="contact-extra" style="border-left-color: var(--primary); margin-top: 0; margin-bottom: 40px;">
                    <p class="lead-text" style="margin-bottom: 0; font-size: 1.1rem;">
                        Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>.
                        Используя наш сайт, вы подтверждаете свое полное согласие с данными Условиями.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию сайта
                        <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                        инновационным материалам, статьям в блоге, AI-инструментам и другим решениям, 
                        которые меняют правила игры. Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с платформой.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list">
                        <li>Публиковать или передавать любую незаконную, вредоносную или клеветническую информацию.</li>
                        <li>Предпринимать действия, которые могут нарушить работу цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li>Использовать автоматизированные скрипты для сбора информации без письменного разрешения.</li>
                        <li>Предоставлять недостоверную информацию при регистрации на бесплатную консультацию.</li>
                    </ul>
                </div>

                <div class="legal-section" style="background: rgba(255, 255, 255, 0.02); padding: 30px; border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.05); margin: 40px 0;">
                    <h2 style="margin-top: 0; display: flex; align-items: center; gap: 12px;">
                        <i data-lucide="copyright" style="color: var(--primary);"></i> 3. Интеллектуальная собственность
                    </h2>
                    <p style="margin-bottom: 0;">
                        Весь контент на <strong><?= $fullDomain ?></strong> (тексты, код, графика, логотипы) является собственностью Компании. 
                        Вам предоставляется ограниченная лицензия для личного использования в целях изучения технологий. Копирование материалов без разрешения строго запрещено.
                    </p>
                </div>

                <div class="legal-section">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="warning-block" style="background: rgba(255, 255, 255, 0.03); padding: 25px; border-radius: 15px; border-left: 4px solid #94A3B8;">
                        <p style="margin-bottom: 0; font-style: italic;">
                            Услуги предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не несет ответственности за любые убытки, 
                            возникшие в результате использования или невозможности использования платформы <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-section">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять Условия в любое время. Все споры стороны будут стремиться разрешить путем конструктивных переговоров. 
                        В случае недостижения согласия, спор подлежит рассмотрению по месту регистрации Оператора в Италии или ЕС.
                    </p>
                </div>

                <div class="contact-extra" style="text-align: center; border-left: none; border-top: 4px solid var(--primary); margin-top: 60px;">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--primary" style="margin-top: 15px;">hello@<?= $fullDomain ?></a>
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