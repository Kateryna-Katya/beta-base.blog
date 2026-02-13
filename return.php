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
            <span class="section-tag">Payment & Refunds</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="contact-extra" style="border-left-color: var(--primary); margin-top: 0; margin-bottom: 40px;">
                    <p class="lead-text" style="margin-bottom: 0; font-size: 1.1rem;">
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей.
                    </p>
                </div>

                <h2>Условия для оформления возврата</h2>
                <div class="contact-cards" style="grid-template-columns: repeat(3, 1fr); margin: 30px 0; gap: 20px;">
                    <div class="contact-card" style="padding: 25px;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="file-warning"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 10px;">Несоответствие</h4>
                        <p style="font-size: 0.9rem; margin-bottom: 0;">Если материалы существенно отличаются от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="contact-card" style="padding: 25px;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="settings-2"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 10px;">Технические сбои</h4>
                        <p style="font-size: 0.9rem; margin-bottom: 0;">Критические ошибки на <strong><?= $fullDomain ?></strong>, не устраненные в срок.</p>
                    </div>
                    <div class="contact-card" style="padding: 25px;">
                        <div class="contact-card__icon" style="margin-bottom: 15px;"><i data-lucide="timer"></i></div>
                        <h4 style="color: var(--white); margin-bottom: 10px;">Срок 14 дней</h4>
                        <p style="font-size: 0.9rem; margin-bottom: 0;">Отказ в «период охлаждения» при условии минимального использования материалов.</p>
                    </div>
                </div>

                <div class="procedure-block" style="background: rgba(255, 255, 255, 0.02); padding: 40px; border-radius: 24px; border: 1px solid rgba(255, 255, 255, 0.05); margin: 50px 0;">
                    <h2 style="margin-top: 0;">Процедура запроса</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <ul class="legal-list" style="margin-top: 20px;">
                        <li>Письмо на <a href="mailto:hello@<?= $fullDomain ?>" style="color: var(--primary);">hello@<?= $fullDomain ?></a></li>
                        <li>Тема письма: <strong>«Запрос на возврат средств»</strong></li>
                        <li>Укажите ваши данные: ФИО, Email, Название программы</li>
                        <li>Приложите подробное описание причины запроса</li>
                    </ul>
                </div>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    зависит от регламента вашего банка в Италии или стране вашего пребывания.
                </p>

                <div class="warning-block" style="background: rgba(239, 68, 68, 0.05); padding: 30px; border-radius: 20px; border: 1px solid rgba(239, 68, 68, 0.1); margin-top: 40px;">
                    <h2 style="margin-top: 0; color: #f87171;">Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Вы уже просмотрели или скачали более 50% материалов программы.</li>
                        <li>Технические проблемы на стороне пользователя (софт, соединение).</li>
                        <li>Нарушение условий Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-extra" style="text-align: center; border-left: none; border-top: 4px solid var(--primary); margin-top: 60px;">
                    <h2>Служба поддержки</h2>
                    <p>По всем вопросам, связанным с возвратом средств, обращайтесь к нам:</p>
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