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
            <span class="section-tag">Risk Disclosure</span>
            <div class="legal-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                <div class="contact-card__icon" style="margin-bottom: 0; color: #ffcc00;">
                    <i data-lucide="alert-triangle"></i>
                </div>
                <h1 style="margin-bottom: 0;">Отказ от ответственности</h1>
            </div>

            <div class="legal-content">
                <div class="contact-extra" style="border-left-color: #ffcc00; margin-top: 0; margin-bottom: 40px;">
                    <p>
                        <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                        опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                        информационно-ознакомительный характер. Они не являются и не должны
                        рассматриваться как персональная инвестиционная рекомендация,
                        профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                        каких-либо финансовых операций.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>Отсутствие гарантий</h2>
                    <p>
                        Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                        относительно точности, полноты или актуальности представленной в блоге
                        информации. Любые упоминания потенциального пассивного дохода, карьерного роста или прошлых
                        результатов наших клиентов не гарантируют аналогичных результатов в будущем. 
                        <strong>Стратегия роста на базе инноваций</strong> зависит от множества факторов и может существенно
                        отличаться от приведенных примеров.
                    </p>
                </div>

                <div class="legal-block">
                    <h2>Ограничение ответственности</h2>
                    <p>
                        Администрация сайта <strong><?= $fullDomain ?></strong>,
                        его владельцы и аффилированные лица не несут ответственности за
                        любые прямые или косвенные убытки, решения или действия,
                        предпринятые вами на основе информации с этого ресурса. Вся
                        ответственность за использование методологий, которые меняют правила игры,
                        лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="legal-block" style="background: rgba(255, 204, 0, 0.03); padding: 30px; border-radius: 20px; border: 1px solid rgba(255, 204, 0, 0.1);">
                    <h2 style="margin-top: 0; color: #ffcc00;">Предупреждение о рисках</h2>
                    <p>
                        Любая деятельность, направленная на изменение финансового статуса или инвестиции в новые проекты, 
                        сопряжена с определенным уровнем риска. Перед принятием любых важных решений мы настоятельно 
                        рекомендуем провести собственное исследование и проконсультироваться с квалифицированным 
                        независимым специалистом в Италии или вашей стране проживания.
                    </p>
                </div>

                <div class="legal-block agreement" style="margin-top: 50px; text-align: center; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 40px;">
                    <p style="font-style: italic;">
                        Продолжая использовать сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                        действуете по собственной воле, полностью осознаете и принимаете все
                        упомянутые риски. Платформа уже доступна в Европе и работает в рамках законодательства ЕС.
                    </p>
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