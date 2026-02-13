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
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Informazioni di Contatto</title>
    
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
                    <li><a href="./#hero" class="nav__link">Home</a></li>
                    <li><a href="./#possibilities" class="nav__link">Possibilità</a></li>
                    <li><a href="./#solutions" class="nav__link">Soluzioni</a></li>
                    <li><a href="./#education" class="nav__link">Formazione</a></li>
                    <li><a href="./#community" class="nav__link">Community</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline">Contattaci</a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
        <section class="pages">
            <div class="container">
                <span class="section-tag">Centro Supporto</span>
                <h1>Informazioni di Contatto</h1>

                <p class="lead-text">
                    Siamo sempre aperti a nuovi progetti e discussioni professionali. 
                    Contatta il team di <strong><?= $domainTitle ?></strong> nel modo che preferisci. 
                    I nostri specialisti sono pronti a rispondere alle tue domande nei giorni feriali dalle 09:00 alle 18:00 (CET).
                </p>

                <div class="contact-cards">
                    <div class="contact-card">
                        <div class="contact-card__icon">
                            <i data-lucide="mail"></i>
                        </div>
                        <h2>Scrivici</h2>
                        <p>Per domande generali, proposte e richieste di consulenza:</p>
                        <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__icon">
                            <i data-lucide="phone-call"></i>
                        </div>
                        <h2>Chiamaci</h2>
                        <p>Linea diretta per il supporto clienti e consulenze specialistiche:</p>
                        <a href="tel:+390697637885" class="contact-link">+39 06 9763 7885</a>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__icon">
                            <i data-lucide="map-pin"></i>
                        </div>
                        <h2>La nostra sede</h2>
                        <p>Rappresentanza di <strong><?= $domainTitle ?></strong> in Italia:</p>
                        <address class="contact-address">
                            Via del Corso, 418,<br>
                            00186 Roma RM,<br>
                            Italia
                        </address>
                    </div>
                </div>

                <div class="contact-extra">
                    <p>
                        L'offerta è attiva solo nei paesi dell'UE. Puoi anche utilizzare il modulo di contatto nella 
                        <a href="./#contact">pagina principale</a> per un invio rapido della tua richiesta. Supporto esperto in ogni fase.
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
                    <p class="footer__description">Tecnologie di nuova generazione, accessibili a tutti. Rendiamo l'AI uno strumento chiaro e utile per la tua vita.</p>
                </div>
                
                <div class="footer__col">
                    <h4 class="footer__title">Menu</h4>
                    <ul class="footer__list">
                        <li><a href="./#hero">Home</a></li>
                        <li><a href="./#possibilities">Possibilità</a></li>
                        <li><a href="./#solutions">Soluzioni</a></li>
                        <li><a href="./#education">Formazione</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Documenti</h4>
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
                    <h4 class="footer__title">Contatti</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+390697637885">+39 06 9763 7885</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Via del Corso, 418, 00186 Roma RM, Italia</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p>&copy; 2026 <?= $domainTitle ?>. Tutti i diritti riservati. Piattaforma disponibile in Europa.</p>
            </div>
        </div>
    </footer>

    <div class="cookie-popup" id="cookie-popup">
        <div class="cookie-popup__content">
            <div class="cookie-popup__icon"><i data-lucide="cookie"></i></div>
            <p class="cookie-popup__text">
                Questo sito utilizza i cookie per migliorare l'esperienza. Maggiori dettagli nella nostra <a href="./cookies.php">Cookie Policy</a>.
            </p>
            <button class="btn btn--primary btn--sm" id="cookie-accept">Accetta</button>
        </div>
    </div>
    
    <div class="mobile-overlay" id="mobile-overlay"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>