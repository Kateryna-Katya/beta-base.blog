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
    <title><?= $domainTitle ?> — Informativa sul Trattamento dei Dati Personali</title>
    
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
                <span class="section-tag">Privacy & Security</span>
                <h1>Informativa sul trattamento dei dati personali</h1>

                <div class="legal-content">
                    <div class="policy-intro">
                        <h2>1. Disposizioni generali</h2>
                        <p>
                            La presente informativa sul trattamento dei dati personali (di seguito — 
                            «Informativa») definisce le modalità e le condizioni del trattamento dei dati 
                            personali adottate dalla piattaforma <strong><?= $domainTitle ?></strong> (di seguito — «Titolare»), e 
                            stabilisce le misure per garantire la sicurezza di tali dati.
                        </p>
                        <p>
                            1.1. Il Titolare considera obiettivo fondamentale il rispetto dei diritti e delle libertà 
                            dell'uomo nel trattamento dei suoi dati, inclusa la protezione del diritto alla riservatezza della vita privata.
                        </p>
                        <p>
                            1.2. La presente Informativa si applica a tutte le informazioni che il 
                            Titolare può ricevere sui visitatori del sito web <strong><?= $fullDomain ?></strong>.
                        </p>
                    </div>

                    <div class="policy-section">
                        <h2>2. Concetti principali</h2>
                        <ul class="legal-list">
                            <li>
                                <strong>Sito Web</strong> — l'insieme dei materiali grafici e 
                                informativi di <strong><?= $fullDomain ?></strong>.
                            </li>
                            <li><strong>Utente</strong> — qualsiasi visitatore del sito web.</li>
                            <li>
                                <strong>Dati personali</strong> — qualsiasi informazione relativa, 
                                direttamente o indirettamente, all'Utente.
                            </li>
                            <li>
                                <strong>Trattamento dei dati</strong> — qualsiasi operazione effettuata con i dati (raccolta, registrazione, conservazione).
                            </li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h2>3. Dati che trattiamo</h2>
                        <div class="contact-cards" style="grid-template-columns: repeat(2, 1fr); margin: 30px 0;">
                            <div class="contact-card">
                                <div class="contact-card__icon"><i data-lucide="user-check"></i></div>
                                <h3>Dati identificativi</h3>
                                <p>Nome, Email, numero di telefono per contatto e registrazione.</p>
                            </div>
                            <div class="contact-card">
                                <div class="contact-card__icon"><i data-lucide="shield-check"></i></div>
                                <h3>Dati tecnici</h3>
                                <p>Cookie, indirizzo IP, dati del browser e analisi delle visite.</p>
                            </div>
                        </div>
                    </div>

                    <div class="policy-section">
                        <h2>4. Finalità del trattamento</h2>
                        <p>Utilizziamo un'infrastruttura digitale avanzata per le seguenti finalità:</p>
                        <ul class="legal-list">
                            <li>Identificazione dell'Utente per l'accesso alle funzioni AI.</li>
                            <li>Stabilire un feedback e fornire supporto esperto.</li>
                            <li>Esecuzione delle condizioni del programma di reddito passivo.</li>
                            <li>Miglioramento della qualità della piattaforma nei paesi UE.</li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h2>5. Base giuridica</h2>
                        <p>Il Titolare tratta i dati solo in presenza del vostro consenso volontario, confermato tramite i moduli sul sito, o se la memorizzazione dei file «cookie» è consentita nelle impostazioni del vostro browser.</p>
                    </div>

                    <div class="contact-extra">
                        <h2>6. Domande e feedback</h2>
                        <p>Se avete domande sulla protezione dei dati sulla piattaforma <strong><?= $domainTitle ?></strong>, potete inviare un'e-mail all'indirizzo:</p>
                        <div style="margin-top: 20px;">
                            <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--outline">
                                <i data-lucide="mail" style="width: 18px; vertical-align: middle; margin-right: 8px;"></i>
                                hello@<?= $fullDomain ?>
                            </a>
                        </div>
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